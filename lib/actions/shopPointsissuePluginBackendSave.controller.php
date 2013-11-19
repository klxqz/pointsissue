<?php

/**
 * @author Коробонв Николай wa-plugins.ru <support@wa-plugins.ru>
 * @link http://wa-plugins.ru/
 */
class shopPointsissuePluginBackendSaveController extends waJsonController {

    public function execute() {

        $app_settings_model = new waAppSettingsModel();
        $shop_pointsissue = waRequest::post('shop_pointsissue');
        foreach ($shop_pointsissue as $name => $val) {
            $app_settings_model->set(array('shop', 'pointsissue'), $name, $val);
        }

        $points = waRequest::post('points');
        $pointmaps = waRequest::post('pointmaps');
        $pointsissue_model = new shopPointsissuePluginModel();
        $pointsissue_model->truncate();
        if ($points) {
            foreach ($points as $id => $point) {
                $data = array('name' => $point, 'map' => $pointmaps[$id]);
                $pointsissue_model->insert($data);
            }
        }
    }

}
