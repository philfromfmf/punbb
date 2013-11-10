<?php

if ($forum_db->table_exists('invites')) {
    $forum_db->drop_table('invites');
}

forum_config_remove(array('p_regs_invites'));