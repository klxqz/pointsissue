<?php

$plugin_id = array('shop', 'pointsissue');
$app_settings_model = new waAppSettingsModel();
$app_settings_model->set($plugin_id, 'status', '1');
$app_settings_model->set($plugin_id, 'frontend_cart', '1');
$app_settings_model->set($plugin_id, 'title', 'Пункты выдачи');
$app_settings_model->set($plugin_id, 'link_name', 'Посмотреть на карте');
$app_settings_model->set($plugin_id, 'width_modal', '640');
$app_settings_model->set($plugin_id, 'height_modal', '500');
