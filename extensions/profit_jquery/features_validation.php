<?php
if (isset($form['profit_jquery_include_method'])) {
    $form['profit_jquery_include_method'] = intval($form['profit_jquery_include_method']);
    if (($form['profit_jquery_include_method'] < JQUERY_INCLUDE_METHOD_LOCAL) || ($form['profit_jquery_include_method'] > JQUERY_INCLUDE_METHOD_JQUERY_CDN)) {
        $form['profit_jquery_include_method'] = JQUERY_INCLUDE_METHOD_LOCAL;
    }
} else {
    $form['profit_jquery_include_method'] = JQUERY_INCLUDE_METHOD_LOCAL;
}