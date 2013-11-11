<?php

if ( $forum_config['p_regs_invites'] ) {

    // Language file includes
    if (file_exists($ext_info['path'] . '/lang/' . $forum_user['language'] . '/profit_invites.php'))
        include $ext_info['path'] . '/lang/' . $forum_user['language'] . '/profit_invites.php';
    else
        include $ext_info['path'] . '/lang/English/pun_repository.php';

    $code = forum_trim($_POST['req_invite_code']);

    $query = array(
        'SELECT'	=> 'COUNT(i.id) AS email_exists',
        'FROM'		=> 'invites AS i',
        'WHERE'		=> 'i.email=\''.$forum_db->escape($email1).'\''
    );
    $result = $forum_db->query_build($query) or error(__FILE__, __LINE__);
    $result = $forum_db->fetch_assoc($result);
    if ( !$result['email_exists'] ) {
        $errors[] = $lang_profit_invites['Invite doesn\'t exists'];
    } else {
        $query = array(
            'SELECT'	=> 'COUNT(i.id) AS code_exists',
            'FROM'		=> 'invites AS i',
            'WHERE'		=> 'i.email=\''.$forum_db->escape($email1).'\' AND i.code=\'' . $code . '\'',
        );
        $result = $forum_db->query_build($query) or error(__FILE__, __LINE__);
        $result = $forum_db->fetch_assoc($result);
        if ( !$result['code_exists'] ) {
            $errors[] = $lang_profit_invites['Invalid invite code'];
        };
    }

}