<?php

if ( $forum_config['p_regs_invites'] ) {

    if (file_exists($ext_info['path'] . '/lang/' . $forum_user['language'] . '/profit_invites.php'))
        include $ext_info['path'] . '/lang/' . $forum_user['language'] . '/profit_invites.php';
    else
        include $ext_info['path'] . '/lang/English/pun_repository.php';

    if ( isset($forum_page['main_menu']['admin']) ) {
        $adminMenu = $forum_page['main_menu']['admin'];
        unset($forum_page['main_menu']['admin']);
    }

    $forum_page['main_menu']['invites'] = '<li class="'.(($section == 'invites') ? ' active' : '').'"><a href="'.forum_link('profile.php?section=invites&amp;id=$1', $id).'"><span>'.$lang_profit_invites['Section invites'].'</span></a></li>';

    if ( isset($adminMenu) ) {
        $forum_page['main_menu']['admin'] = $adminMenu;
    }

}