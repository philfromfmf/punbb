<?php

if (isset($_POST['form_sent']) && $section == 'invites' && empty($errors)) {

    $code = mt_rand(100000, 999999);

    $query = array(
        'INSERT'	=> 'inviter, email, code',
        'INTO'		=> 'invites',
        'VALUES'    => $id . ',\'' . $form['invite_email'] . '\', ' . $code,
    );
    $forum_db->query_build($query) or error(__FILE__, __LINE__);

    $forum_flash->add_info($lang_profile['Profile redirect']);
    redirect(forum_link('profile.php?section=invites&amp;id=$1', $id), $lang_profile['Profile redirect']);

}