<?php

namespace Forge\Modules\ForgeQR;

use \Forge\Modules\ForgeQR\ForgeQR;
use \Forge\Core\Abstracts\View;

class QrView extends View {
    public $name = 'fe-qr';
    public $standalone = true;

    public function content($parts = array()) {
        ForgeQR::load();
        \QRcode::png(urldecode($_GET['text']), false, QR_ECLEVEL_M, 4);
    }
}
