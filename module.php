<?php

namespace Forge\Modules\ForgeQR;

use \Forge\Core\App\App;
use \Forge\Core\Abstracts\Module as AbstractModule;
use \Forge\Loader;


class Module extends AbstractModule {

    public function setup() {
        $this->version = '1.0.0';
        $this->id = "forge-qr";
        $this->name = i('QR Code', 'forge-qr');
        $this->description = i('Module for QR Generator.', 'forge-qr');
        $this->image = $this->url().'/module-image.png';
    }

    public function start() {
    }

}

?>
