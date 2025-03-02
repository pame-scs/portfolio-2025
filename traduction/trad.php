<?php
if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    if (in_array($lang, ['eng', 'fr', 'es'])) {
        setcookie('lang', $lang, time() + (86400 * 30), '/'); 
    } else {
        $lang = 'eng';
    }
} else if (isset($_COOKIE['lang'])) {
    $lang = $_COOKIE['lang'];
    if (!in_array($lang, ['eng', 'fr', 'es'])) {
        $lang = 'eng';
    }
} else {
    $lang = 'eng';
}

require_once (dirname(__FILE__) . '/' . $lang . '.php');

$TRAD = $translations;
?>