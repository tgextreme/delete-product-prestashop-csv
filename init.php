<?php

include '../config/config.inc.php';
include '../init.php'; //$existe=checkExiste($refgen);
//include 'classes/PrestaShopAutoload.php';
//@include 'classes/Search.php';
 @include '../config/config.inc.php';
                    @include '../init.php';
                    Tools::clearSmartyCache();
                    Tools::clearXMLCache();
                    Media::clearCache();
                    Tools::generateIndex();


                    ?>