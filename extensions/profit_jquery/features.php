<?php
if (!isset($lang_profit_jquery)) {
    if (file_exists($ext_info['path'] . '/lang/' . $forum_user['language'] . '/lang.php')) {
        require $ext_info['path'] . '/lang/' . $forum_user['language'] . '/lang.php';
    } else {
        require $ext_info['path'] . '/lang/English/lang.php';
    }
}

// Reset counter
$forum_page['group_count'] = $forum_page['item_count'] = 0;
?>
    <div class="content-head">
        <h2 class="hn"><span><?php echo sprintf($lang_profit_jquery['Setup jquery'], JQUERY_VERSION) ?></span></h2>
    </div>

    <fieldset class="frm-group group<?php echo ++$forum_page['group_count'] ?>">
        <legend class="group-legend">
            <strong><?php echo sprintf($lang_profit_jquery['Setup jquery legend'], JQUERY_VERSION) ?></strong></legend>
        <fieldset class="mf-set set<?php echo ++$forum_page['item_count'] ?>">
            <legend><span><?php echo $lang_profit_jquery['Include method'] ?></span></legend>
            <div class="mf-box">
                <div class="mf-item">
                    <span class="fld-input">
                        <input type="radio" id="fld<?php echo ++$forum_page['fld_count'] ?>"
                            name="form[profit_jquery_include_method]"
                            value="<?php echo JQUERY_INCLUDE_METHOD_LOCAL; ?>"
                            <?php if ($forum_config['o_jquery_include_method'] == JQUERY_INCLUDE_METHOD_LOCAL) echo ' checked="checked"' ?> />
                    </span>
                    <label for="fld<?php echo $forum_page['fld_count'] ?>"><?php echo $lang_profit_jquery['Include method local label'] ?></label>
                </div>
                <div class="mf-item">
                    <span class="fld-input">
                        <input type="radio" id="fld<?php echo ++$forum_page['fld_count'] ?>"
                            name="form[profit_jquery_include_method]"
                            value="<?php echo JQUERY_INCLUDE_METHOD_GOOGLE_CDN; ?>"
                            <?php if ($forum_config['o_jquery_include_method'] == JQUERY_INCLUDE_METHOD_GOOGLE_CDN) echo ' checked="checked"' ?> />
                    </span>
                    <label for="fld<?php echo $forum_page['fld_count'] ?>"><?php echo $lang_profit_jquery['Include method google label'] ?></label>
                </div>
                <div class="mf-item">
                    <span class="fld-input">
                        <input type="radio" id="fld<?php echo ++$forum_page['fld_count'] ?>"
                            name="form[profit_jquery_include_method]"
                            value="<?php echo JQUERY_INCLUDE_METHOD_MICROSOFT_CDN; ?>"
                            <?php if ($forum_config['o_jquery_include_method'] == JQUERY_INCLUDE_METHOD_MICROSOFT_CDN) echo ' checked="checked"' ?> />
                    </span>
                    <label for="fld<?php echo $forum_page['fld_count'] ?>"><?php echo $lang_profit_jquery['Include method microsoft label'] ?></label>
                </div>
                <div class="mf-item">
                    <span class="fld-input">
                        <input type="radio" id="fld<?php echo ++$forum_page['fld_count'] ?>"
                            name="form[profit_jquery_include_method]"
                            value="<?php echo JQUERY_INCLUDE_METHOD_JQUERY_CDN; ?>"
                            <?php if ($forum_config['o_jquery_include_method'] == JQUERY_INCLUDE_METHOD_JQUERY_CDN) echo ' checked="checked"' ?> />
                    </span>
                    <label for="fld<?php echo $forum_page['fld_count'] ?>"><?php echo $lang_profit_jquery['Include method jquery label'] ?></label>
                </div>
            </div>
        </fieldset>
    </fieldset>