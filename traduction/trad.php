<?php
if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    if (in_array($lang, ['en', 'fr', 'esp'])) {
        setcookie('lang', $lang, time() + (86400 * 30), '/'); 
    } else {
        $lang = 'en';
    }
} else if (isset($_COOKIE['lang'])) {
    $lang = $_COOKIE['lang'];
    if (!in_array($lang, ['en', 'fr', 'esp'])) {
        $lang = 'en';
    }
} else {
    $lang = 'en';
}

require_once (dirname(__FILE__) . '/' . $lang . '.php');

$TRAD = $translations;
?>