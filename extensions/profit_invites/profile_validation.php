<?php

if (file_exists($ext_info['path'] . '/lang/' . $forum_user['language'] . '/profit_invites.php'))
    include $ext_info['path'] . '/lang/' . $forum_user['language'] . '/profit_invites.php';
else
    include $ext_info['path'] . '/lang/English/pun_repository.php';

if ($section == 'invites') {

    $form = extract_elements(array('invite_email'));

    if ( $user['invites_count']+1 > $forum_config['o_invites_number'] )
        $errors[] = $lang_profit_invites['Invites limit exceeded'];

    if (!defined('FORUM_EMAIL_FUNCTIONS_LOADED'))
        require FORUM_ROOT.'include/email.php';

    $form['invite_email'] = strtolower(forum_trim($form['invite_email']));

    if (!is_valid_email( $form['invite_email']))
        $errors[] = $lang_common['Invalid e-mail'];

    if (is_banned_email( $form['invite_email']))
        $errors[] = $lang_profit_invites['Banned e-mail'];

    $query = array(
        'SELECT'	=> 'COUNT(u.id) AS dupe',
        'FROM'		=> 'users AS u',
        'WHERE'		=> 'u.email=\''.$forum_db->escape($form['invite_email']).'\''
    );
    $result = $forum_db->query_build($query) or error(__FILE__, __LINE__);
    $result = $forum_db->fetch_assoc($result);
    if ( 0 < $result['dupe'] )
        $errors[] = $lang_profile['Dupe e-mail'];

    $query = array(
        'SELECT'	=> 'COUNT(i.id) AS dupe',
        'FROM'		=> 'invites AS i',
        'WHERE'		=> 'i.email=\''.$forum_db->escape($form['invite_email']).'\''
    );
    $result = $forum_db->query_build($query) or error(__FILE__, __LINE__);
    $result = $forum_db->fetch_assoc($result);
    if ( 0 < $result['dupe'] )
        $errors[] = $lang_profit_invites['Dupe invite'];

}