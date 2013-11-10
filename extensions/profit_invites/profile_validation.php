<?php

if (file_exists($ext_info['path'] . '/lang/' . $forum_user['language'] . '/profit_invites.php'))
    include $ext_info['path'] . '/lang/' . $forum_user['language'] . '/profit_invites.php';
else
    include $ext_info['path'] . '/lang/English/pun_repository.php';

if ($section == 'invites') {

    $form = extract_elements(array('realname', 'url', 'location', 'jabber', 'icq', 'msn', 'aim', 'yahoo', 'facebook', 'twitter', 'linkedin', 'skype'));

}