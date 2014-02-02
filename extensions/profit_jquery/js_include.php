<?php
switch ($forum_config['o_jquery_include_method']) {
    case JQUERY_INCLUDE_METHOD_GOOGLE_CDN:
        $jquery_url = '//ajax.googleapis.com/ajax/libs/jquery/' . JQUERY_VERSION . '/jquery.min.js';
        break;

    case JQUERY_INCLUDE_METHOD_MICROSOFT_CDN:
        $jquery_url = '//ajax.aspnetcdn.com/ajax/jQuery/jquery-' . JQUERY_VERSION . '.min.js';
        break;

    case JQUERY_INCLUDE_METHOD_JQUERY_CDN:
        $jquery_url = '//code.jquery.com/jquery-' . JQUERY_VERSION . '.min.js';
        break;

    case JQUERY_INCLUDE_METHOD_LOCAL:
    default:
        $jquery_url = $ext_info['url'] . '/js/jquery-' . JQUERY_VERSION . '.min.js';
        break;
}

$forum_loader->add_js($jquery_url, array('type' => 'url', 'async' => false, 'weight' => 75));