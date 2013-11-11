<?php

if ( $forum_config['p_regs_invites'] ) {
    if ( !empty($_GET['req_email1']) )
        $_POST['req_email1'] = $_GET['req_email1'];
    if ( !empty($_GET['req_invite_code']) )
        $_POST['req_invite_code'] = $_GET['req_invite_code'];
}