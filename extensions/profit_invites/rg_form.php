<?php

if ( $forum_config['p_regs_invites'] ) {

    // Language file includes
    if (file_exists($ext_info['path'] . '/lang/' . $forum_user['language'] . '/profit_invites.php'))
        include $ext_info['path'] . '/lang/' . $forum_user['language'] . '/profit_invites.php';
    else
        include $ext_info['path'] . '/lang/English/pun_repository.php';

    ?>
    <div class="sf-set set<?php echo ++$forum_page['item_count']; if ($forum_config['o_regs_verify'] == '0') echo ' prepend-top'; ?>">
        <div class="sf-box text required">
            <label for="fld<?php echo ++$forum_page['fld_count'] ?>"><span><?php echo $lang_profit_invites['Invite code'] ?></span> <small><?php echo $lang_profit_invites['Invite code help'] ?></small></label><br />
            <span class="fld-input"><input type="text" data-suggest-role="code" id="fld<?php echo $forum_page['fld_count'] ?>" name="req_invite_code" value="<?php echo(isset($_POST['req_invite_code']) ? forum_htmlencode($_POST['req_invite_code']) : '') ?>" size="6" maxlength="6" required spellcheck="false" /></span>
        </div>
    </div>
<?php

}