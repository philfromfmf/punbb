<?php

if (isset($_POST['form_sent']) && $section == 'invites' && empty($errors)) {

    if (file_exists($ext_info['path'] . '/lang/' . $forum_user['language'] . '/profit_invites.php'))
        include $ext_info['path'] . '/lang/' . $forum_user['language'] . '/profit_invites.php';
    else
        include $ext_info['path'] . '/lang/English/pun_repository.php';

    $code = mt_rand(100000, 999999);

    $query = array(
        'INSERT'	=> 'inviter, email, code',
        'INTO'		=> 'invites',
        'VALUES'    => $id . ',\'' . $form['invite_email'] . '\', ' . $code,
    );
    $forum_db->query_build($query) or error(__FILE__, __LINE__);

    $mail_subject = $lang_profit_invites['Mail subject'];
    $mail_message = $lang_profit_invites['Mail body'];
    $mail_message = str_replace('<board_title>', $forum_config['o_board_title'], $mail_message);
    $mail_message = str_replace('<base_url>', $base_url.'/', $mail_message);
    $mail_message = str_replace('<activation_url_with_code>', $base_url.'/register.php?email=' . $form['invite_email'] . '&code=' . $code, $mail_message);
    $mail_message = str_replace('<activation_url>', $base_url.'/register.php', $mail_message);
    $mail_message = str_replace('<email>', $form['invite_email'], $mail_message);
    $mail_message = str_replace('<code>', $code, $mail_message);
    $mail_message = str_replace('<board_mailer>', sprintf($lang_common['Forum mailer'], $forum_config['o_board_title']), $mail_message);
    forum_mail($form['invite_email'], $mail_subject, $mail_message);

    $forum_flash->add_info($lang_profile['Profile redirect']);
    redirect(forum_link('profile.php?section=invites&amp;id=$1', $id), $lang_profile['Profile redirect']);

}