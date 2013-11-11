<?php

if ($section == 'invites') {
    $query['SELECT'] .= ', COUNT(i.id) AS invites_count';
    $query['JOINS'][] = array(
        'LEFT JOIN' => 'invites AS i',
        'ON' => 'i.inviter = u.id',
    );
}