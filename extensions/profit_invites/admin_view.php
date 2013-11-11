<?php
if (file_exists($ext_info['path'] . '/lang/' . $forum_user['language'] . '/profit_invites.php'))
    include $ext_info['path'] . '/lang/' . $forum_user['language'] . '/profit_invites.php';
else
    include $ext_info['path'] . '/lang/English/pun_repository.php';

$forum_page['group_count'] = $forum_page['item_count'] = 0;
?>
<div class="content-head">
    <h2 class="hn"><span><?php echo $lang_profit_invites['Invites']; ?></span></h2>
</div>
<div class="ct-box">
    <p><?php echo $lang_profit_invites['Invites info']; ?></p>
</div>

<fieldset class="frm-group group<?php echo ++$forum_page['group_count'] ?>">
    <legend class="group-legend"><span><?php echo $lang_profit_invites['Invites registration']; ?></span></legend>
    <div class="sf-set set<?php echo ++$forum_page['item_count'] ?>">
        <div class="sf-box checkbox">
            <span class="fld-input"><input type="checkbox" id="fld<?php echo ++$forum_page['fld_count'] ?>"
                                           name="form[regs_invites]"
                                           value="1"<?php if ($forum_config['p_regs_invites'] == '1') echo ' checked="checked"' ?> /></span>
            <label
                for="fld<?php echo $forum_page['fld_count'] ?>"><span><?php echo $lang_profit_invites['Invites registration']; ?></span><?php echo $lang_profit_invites['Invites registration label']; ?>
            </label>
        </div>
    </div>
    <div class="sf-set set<?php echo ++$forum_page['item_count'] ?>">
        <div class="sf-box text">
            <label for="fld<?php echo ++$forum_page['fld_count'] ?>">
                <span><?php echo $lang_profit_invites['Invites count per user']; ?></span>
            </label><br />
            <span class="fld-input"><input type="number" id="fld<?php echo $forum_page['fld_count'] ?>" name="form[invites_number]" size="6" maxlength="5" value="<?php echo $forum_config['o_invites_number']; ?>" /></span>
        </div>
    </div>
</fieldset>