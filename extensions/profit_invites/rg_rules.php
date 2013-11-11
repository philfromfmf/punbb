<?php

if ( $forum_config['p_regs_invites']) {

    if ( !empty($_GET['email']) ) {
        ?>
        <input type="hidden" name="req_email1" value="<?php echo $_GET['email']; ?>" />
        <?php
    }

    if ( !empty($_GET['code']) ) {
        ?>
        <input type="hidden" name="req_invite_code" value="<?php echo $_GET['code']; ?>" />
        <?php
    }

}