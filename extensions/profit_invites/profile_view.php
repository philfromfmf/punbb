<?php

if ( $forum_config['p_regs_invites'] && $section == 'invites' ) {

    // Language file includes
    if (file_exists($ext_info['path'] . '/lang/' . $forum_user['language'] . '/profit_invites.php'))
        include $ext_info['path'] . '/lang/' . $forum_user['language'] . '/profit_invites.php';
    else
        include $ext_info['path'] . '/lang/English/pun_repository.php';

    // Setup breadcrumbs
    $forum_page['crumbs'] = array(
        array($forum_config['o_board_title'], forum_link($forum_url['index'])),
        array(sprintf($lang_profile['Users profile'], $user['username']), forum_link($forum_url['user'], $id)),
        $lang_profit_invites['Section invites']
    );

    // Setup form
    $forum_page['group_count'] = $forum_page['item_count'] = $forum_page['fld_count'] = 0;
    $forum_page['form_action'] = forum_link('profile.php?section=invites&amp;id=$1', $id);

    $forum_page['hidden_fields'] = array(
        'form_sent'		=> '<input type="hidden" name="form_sent" value="1" />',
        'csrf_token'	=> '<input type="hidden" name="csrf_token" value="'.generate_form_token($forum_page['form_action']).'" />'
    );

    define('FORUM_PAGE', 'profile-invites');
    require FORUM_ROOT.'header.php';
    ob_start();
?>

    <div class="main-subhead">
        <h2 class="hn"><span><?php printf(($forum_page['own_profile']) ? $lang_profit_invites['Invites welcome'] : $lang_profit_invites['Invites welcome user'], forum_htmlencode($user['username'])) ?></span></h2>
    </div>

    <div class="main-content main-frm">
        <?php
        if (!empty($errors)):
            $forum_page['errors'] = array();
            foreach ($errors as $cur_error)
                $forum_page['errors'][] = '<li class="warn"><span>'.$cur_error.'</span></li>';
            ?>
            <div class="ct-box error-box">
                <h2 class="warn hn"><?php echo $lang_profile['Profile update errors'] ?></h2>
                <ul class="error-list">
                    <?php echo implode("\n\t\t\t", $forum_page['errors'])."\n" ?>
                </ul>
            </div>
        <?php endif; ?>
        TEST
    </div>

<?php

    $tpl_temp = forum_trim(ob_get_contents());
    $tpl_main = str_replace('<!-- forum_main -->', $tpl_temp, $tpl_main);
    ob_end_clean();
    require FORUM_ROOT.'footer.php';

}