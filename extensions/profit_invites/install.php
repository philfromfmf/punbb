<?php

$schema = array(
    'FIELDS' => array(
        'id' => array(
            'datatype' => 'SERIAL',
            'allow_null' => false
        ),
        'inviter' => array(
            'datatype' => 'INT(10) UNSIGNED',
            'allow_null' => false,
        ),
        'email' => array(
            'datatype' => 'VARCHAR(200)',
            'allow_null' => false,
        ),
        'code' => array(
            'datatype' => 'CHAR(6)',
            'allow_null' => false,
        ),
    ),
    'PRIMARY KEY' => array('id'),
    'UNIQUE KEYS' => array(
        'email_idx' => array('email'),
    ),
);

if ( !$forum_db->table_exists('invites') ) {
    $forum_db->create_table('invites', $schema);
}

forum_config_add('p_regs_invites', '0');
forum_config_add('o_invites_number', '5');