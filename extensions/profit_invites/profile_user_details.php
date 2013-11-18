<?php
if ( $forum_config['p_regs_invites'] ) {

    $forum_page['user_info']['registered']  = preg_replace('/(<\/span><\/li>)$/', ' ', $forum_page['user_info']['registered']);

    $query = array(
        'SELECT'	=> 'u.*',
        'FROM'		=> 'invites AS i',
        'JOINS'     => array(
            array(
                'LEFT JOIN' => 'users AS u',
                'ON'        => 'u.id=i.inviter',
            ),
        ),
        'WHERE'		=> 'i.email=\'' . $user['email'] . '\'',
    );
    $result = $forum_db->query_build($query) or error(__FILE__, __LINE__);
    $inviter = $forum_db->fetch_assoc($result);

    if ( $inviter ) {
        $forum_page['user_info']['registered'] .= 'по приглашению пользователя <a href="' . forum_link($forum_url['user'], $inviter['id']) . '">' . forum_htmlencode($inviter['username']) . '</a>';
    }

    $forum_page['user_info']['registered'] .= '</span></li>';

}