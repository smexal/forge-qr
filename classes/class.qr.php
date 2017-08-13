<?php

namespace Forge\Modules\ForgeQR;

class ForgeQR {
    public $file = null;

    public static function load() {
        require_once(MOD_ROOT."forge-qr/library-external/qrlib.php");
    }

}

?>