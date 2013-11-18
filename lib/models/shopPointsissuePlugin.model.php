<?php

class shopPointsissuePluginModel extends waModel {

    protected $table = 'shop_pointsissue';

    public function getAll($key = null, $normalize = false) {
        $sql = "SELECT * FROM {$this->table}";
        return $this->query($sql)->fetchAll($key, $normalize);
    }

    public function truncate() {
        $sql = "TRUNCATE TABLE {$this->table}";
        return $this->query($sql);
    }

}
