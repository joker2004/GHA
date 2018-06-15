<?php namespace Premmerce\UrlManager;

use Premmerce\SDK\V1\FileManager\FileManager;
use Premmerce\SDK\V1\Notifications\AdminNotifier;
use Premmerce\UrlManager\Admin\Admin;
use Premmerce\UrlManager\Admin\Settings;
use Premmerce\UrlManager\Frontend\Frontend;

/**
 * Class UrlManagerPlugin
 *
 * @package Premmerce\UrlManager
 */
class UrlManagerPlugin{

	const DOMAIN = 'premmerce-url-manager';

	/**
	 * @var FileManager
	 */
	private $fileManager;

	/**
	 * @var AdminNotifier
	 */
	private $notifier;

	/**
	 * PluginManager constructor.
	 *
	 * @param $mainFile
	 */
	public function __construct($mainFile){
		$this->fileManager = new FileManager($mainFile);
		$this->notifier    = new AdminNotifier();


		add_action('init', [$this, 'loadTextDomain']);

		add_action('admin_init', [$this, 'checkRequirePlugins']);
	}

	/**
	 * Run plugin part
	 */
	public function run(){
		$valid = count($this->validateRequiredPlugins()) === 0;
		(new Updater())->update();

		if(is_admin()){
			new Admin($this->fileManager);
		}

		if($valid){
			if(!is_admin()){
				new Frontend();
			}
			(new PermalinkListener())->registerFilters();
		}

	}

	/**
	 * Fired when the plugin is activated
	 */
	public function activate(){
		flush_rewrite_rules();
	}

	/**
	 * Fired when the plugin is deactivated
	 */
	public function deactivate(){
		flush_rewrite_rules();
	}

	/**
	 * Fired during plugin uninstall
	 */
	public static function uninstall(){
		delete_option(Updater::DB_OPTION);
		delete_option(Settings::OPTION_FLUSH);
		delete_option(Settings::OPTION_DISABLED);
		delete_option(Settings::OPTIONS);
		flush_rewrite_rules();
	}

	/**
	 * Load plugin translations
	 */
	public function loadTextDomain(){
		$name = $this->fileManager->getPluginName();
		load_plugin_textdomain('premmerce-url-manager', false, $name . '/languages/');
	}

	/**
	 * Check required plugins and push notifications
	 */
	public function checkRequirePlugins(){
		$message = __('The %s plugin requires %s plugin to be active!', 'premmerce-url-manager');

		$plugins = $this->validateRequiredPlugins();

		if(count($plugins)){
			foreach($plugins as $plugin){
				$error = sprintf($message, 'WooCommerce Permalink Manager', $plugin);
				$this->notifier->push($error, AdminNotifier::ERROR, false);
			}
		}

	}

	/**
	 * Validate required plugins
	 *
	 * @return array
	 */
	private function validateRequiredPlugins(){

		$plugins = [];

		if(!function_exists('is_plugin_active')){
			include_once(ABSPATH . 'wp-admin/includes/plugin.php');
		}

		/**
		 * Check if WooCommerce is active
		 **/
		if(!(is_plugin_active('woocommerce/woocommerce.php') || is_plugin_active_for_network('woocommerce/woocommerce.php'))){
			$plugins[] = '<a target="_blank" href="https://wordpress.org/plugins/woocommerce/">WooCommerce</a>';
		}

		return $plugins;
	}
}