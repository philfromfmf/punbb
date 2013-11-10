<?php
if (!isset($form['regs_invites']) || $form['regs_invites'] != '1')
    $form['regs_invites'] = '0';

$form['invites_number'] = intval($form['invites_number'])>0 ? intval($form['invites_number']) : 5;