<?php

if (!defined('FORUM'))
    die();

$lang_profit_invites = array(

    'Invites' => 'Invites',
    'Invites info' => 'Invites by e-mail',
    'Invites registration' => 'Registration by invites',
    'Invites registration label' => 'Allow registration by invites (only! normal registration will be disabled!)',
    'Invites count per user' => 'Invites count per user',

    'Section invites' => 'Invites',
    'Invites welcome' => 'Invites',
    'Invites welcome user' => 'Invites of user %s',
    'Invites limit exceeded' => 'Invites limit exceeded',
    'Banned e-mail' => 'E-mail is banned',
    'Dupe invite' => 'This invite is already sent',
    'Sent invites' => 'Sent invites',
    'Email to invite' => 'User e-mail you want to invite',
    'Send invite' => 'Send invite',

    'Mail subject' => 'You are welcome to <board_title>!',
    'Mail body' => <<<BODY
You are invited to in the forums at <base_url>.

You have to register. To register, please visit the following page:
<activation_url_with_code>

If this url doesn't work, visit <activation_url> and manually enter you data
e-mail: <email>
invite code: <code>

--
<board_mailer>
(Do not reply to this message)
BODY
,

    'Invite code' => 'Invite code',
    'Invite code help' => 'Enter invite code from invitation e-mail',
    'Invite doesn\'t exists' => 'Invite doesn\'t exists',
    'Invalid invite code' => 'Invalid invite code',

);
