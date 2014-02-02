<?php

defined('REPUTATION_EXTENSION') or die('Direct access not allowed');

if (!$forum_db->table_exists('reputation')) {
    $schema = array(
        'FIELDS' => array(
            'id' => array(
                'datatype' => 'SERIAL',
                'allow_null' => false
            ),
            'user_id' => array(
                'datatype' => 'INT(10) UNSIGNED',
                'allow_null' => false,
                'default' => '0'
            ),
            'from_user_id' => array(
                'datatype' => 'INT(10) UNSIGNED',
                'allow_null' => false,
                'default' => '0'
            ),
            'time' => array(
                'datatype' => 'INT(10) UNSIGNED',
                'allow_null' => false
            ),
            'post_id' => array(
                'datatype' => 'INT(10) UNSIGNED',
                'allow_null' => false
            ),
            'topic_id' => array(
                'datatype' => 'INT(10) UNSIGNED',
                'allow_null' => false
            ),
            'reason' => array(
                'datatype' => 'TEXT',
                'allow_null' => false
            ),
            'comment' => array(
                'datatype' => 'TEXT',
                'allow_null' => true,
            ),
            'rep_plus' => array(
                'datatype' => 'TINYINT(1)',
                'allow_null' => false,
                'default' => '0'
            ),
            'rep_minus' => array(
                'datatype' => 'TINYINT(1)',
                'allow_null' => false,
                'default' => '0'
            )
        ),
        'PRIMARY KEY' => array('id'),
        'INDEXES' => array(
            'rep_post_id_idx' => array('post_id'),
            'rep_time_idx' => array('time'),
            'rep_multi_user_id_idx' => array('from_user_id', 'topic_id')
        )
    );
    $forum_db->create_table('reputation', $schema);
}

if (!$forum_db->field_exists('users', 'rep_enable'))
    $forum_db->add_field('users', 'rep_enable', 'TINYINT(1)', true, '1');
if (!$forum_db->field_exists('users', 'rep_disable_adm'))
    $forum_db->add_field('users', 'rep_disable_adm', 'TINYINT(1)', true, '0');
if (!$forum_db->field_exists('users', 'rep_minus'))
    $forum_db->add_field('users', 'rep_minus', 'INT(10)', true, '0');
if (!$forum_db->field_exists('users', 'rep_plus'))
    $forum_db->add_field('users', 'rep_plus', 'INT(10)', true, '0');
if (!$forum_db->field_exists('groups', 'g_rep_minus_min'))
    $forum_db->add_field('groups', 'g_rep_minus_min', 'INT(10)', true, '0');
if (!$forum_db->field_exists('groups', 'g_rep_plus_min'))
    $forum_db->add_field('groups', 'g_rep_plus_min', 'INT(10)', true, '0');
if (!$forum_db->field_exists('groups', 'g_rep_enable'))
    $forum_db->add_field('groups', 'g_rep_enable', 'TINYINT(1)', true, '1');

$reputation_config = array(
    'o_reputation_enabled'      => '1',
    'o_reputation_timeout'      => '300',
    'o_reputation_maxmessage'   => '400',
    'o_reputation_show_full'    => '1'
);
foreach ($reputation_config as $key => $value) {
    if (!array_key_exists($key, $forum_config)) {
        forum_config_add($key, $value);    }
}