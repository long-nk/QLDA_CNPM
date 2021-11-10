<?php

/* * *************************************************************************** */

//Duong dan dia chi goc
//          o   /virtual-directory/: Chay bang thu muc ao (Virtual Directory)
//          o   /                  : Chay bang domain
$SITE_ROOT = '/laravel_shop/';

/* * *************************************************************************** */
//KHONG DIEU CHINH cac tham so duoi day
if (defined('CLI') == false) {
    if (!preg_match('/^http:/', $SITE_ROOT) OR ! preg_match('/^https:/', $SITE_ROOT)) {
        if (empty($_SERVER['HTTPS'])) {
            $FULL_SITE_ROOT = 'http://' . $_SERVER['HTTP_HOST'] . $SITE_ROOT;
        } else {
            $FULL_SITE_ROOT = 'https://' . $_SERVER['HTTP_HOST'] . $SITE_ROOT;
        }
    } else {
        $FULL_SITE_ROOT = $SITE_ROOT;
    }
}

?>