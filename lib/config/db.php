<?php

/**
 * @author Коробонв Николай wa-plugins.ru <support@wa-plugins.ru>
 * @link http://wa-plugins.ru/
 */
return array(
    'shop_pointsissue' => array(
        'id' => array('int', 11, 'null' => 0, 'autoincrement' => 1),
        'name' => array('text', 'null' => 0),
        'map' => array('text', 'null' => 0),
        ':keys' => array(
            'PRIMARY' => array('id'),
        ),
    ),
);
