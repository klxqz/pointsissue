<?php

return array(
    'name' => 'Пункты выдачи',
    'description' => 'Выводит список пунктов выдачи для самовывоза товара',
    'vendor' => '',
    'version' => '1.0.0',
    'img' => 'img/pointsissue.png',
    'frontend' => true,
    'shop_settings' => true,
    'handlers' => array(
        'frontend_cart' => 'frontendCart',
    ),
);
//EOF
