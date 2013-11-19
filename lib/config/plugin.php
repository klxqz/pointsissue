<?php

/**
 * @author Коробонв Николай wa-plugins.ru <support@wa-plugins.ru>
 * @link http://wa-plugins.ru/
 */
return array(
    'name' => 'Пункты выдачи',
    'description' => 'Выводит список пунктов выдачи для самовывоза товара',
    'vendor' => '985310',
    'version' => '1.0.0',
    'img' => 'img/pointsissue.png',
    'frontend' => true,
    'shop_settings' => true,
    'handlers' => array(
        'frontend_cart' => 'frontendCart',
    ),
);
//EOF
