<?php

defined('REPUTATION_EXTENSION') or die('Direct access not allowed');

$forum_db->drop_table('reputation');

$forum_db->drop_field('users', 'rep_enable');
$forum_db->drop_field('users', 'rep_disable_adm');
$forum_db->drop_field('users', 'rep_minus');
$forum_db->drop_field('users', 'rep_plus');
$forum_db->drop_field('groups', 'g_rep_minus_min');
$forum_db->drop_field('groups', 'g_rep_plus_min');
$forum_db->drop_field('groups', 'g_rep_enable');

$config_names  =  array('o_reputation_enabled', 'o_reputation_timeout','o_reputation_maxmessage', 'o_reputation_show_full');
$query = array(
    'DELETE'	=> 'config',
    'WHERE'		=> 'conf_name IN (\''.implode('\', \'', $config_names).'\')'
);
$forum_db->query_build($query) or error(__FILE__, __LINE__);

$reputation_config = array(
    'o_reputation_enabled',
    'o_reputation_timeout',
    'o_reputation_maxmessage',
    'o_reputation_show_full'
);
foreach ($reputation_config as $key) {
    forum_config_remove($key);
}