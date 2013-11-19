<?php

/**
 * @author Коробонв Николай wa-plugins.ru <support@wa-plugins.ru>
 * @link http://wa-plugins.ru/
 */
class shopPointsissuePlugin extends shopPlugin {

    protected static $plugin;

    public function __construct($info) {
        parent::__construct($info);
        if (!self::$plugin) {
            self::$plugin = &$this;
        }
    }

    protected static function getThisPlugin() {
        if (self::$plugin) {
            return self::$plugin;
        } else {
            return wa()->getPlugin('pointsissue');
        }
    }

    public function frontendCart() {
        if ($this->getSettings('frontend_cart')) {
            return self::display();
        }
    }

    public static function display() {
        $plugin = self::getThisPlugin();
        $pointsissue_model = new shopPointsissuePluginModel();
        $points = $pointsissue_model->getAll();
        $view = wa()->getView();
        $view->assign('settings', $plugin->getSettings());
        $view->assign('points', $points);
        $template_path = wa()->getAppPath('plugins/pointsissue/templates/Pointsissue.html', 'shop');
        $html = $view->fetch($template_path);
        return $html;
    }

}
