<?php

/**
 * @author Коробонв Николай wa-plugins.ru <support@wa-plugins.ru>
 * @link http://wa-plugins.ru/
 */
class shopPointsissuePluginSettingsAction extends waViewAction {

    protected $plugin_id = array('shop', 'pointsissue');

    public function execute() {
        $app_settings_model = new waAppSettingsModel();
        $settings = $app_settings_model->get($this->plugin_id);
        $pointsissue_model = new shopPointsissuePluginModel();
        $points = $pointsissue_model->getAll();

        $this->view->assign('settings', $settings);
        $this->view->assign('points', $points);
    }

}
