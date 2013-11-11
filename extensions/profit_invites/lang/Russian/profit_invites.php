<?php

if (!defined('FORUM'))
    die();

$lang_profit_invites = array(

    'Invites' => 'Инвайты',
    'Invites info' => 'Регистрация по инвайтам',
    'Invites registration' => 'Регистрация по инвайтам',
    'Invites registration label' => 'Включить регистрацию по инвайтам (Внимание! Обычная регистрация будет невозможна!)',
    'Invites count per user' => 'Число инвайтов, выдаваемых пользователю',

    'Section invites' => 'Инвайты',
    'Invites welcome' => 'Инвайты',
    'Invites welcome user' => 'Инвайты пользователя %s',
    'Invites limit exceeded' => 'Вы уже использовали все инвайты',
    'Banned e-mail' => 'Введенный адрес электронной почты забанен',
    'Dupe invite' => 'Такой инвайт уже выслан',
    'Sent invites' => 'Отправленные инвайты',
    'Email to invite' => 'E-mail пользователя, которого Вы хотите пригласить на форум',
    'Send invite' => 'Отправить инвайт',

    'Mail subject' => 'You are welcome to <board_title>!',
    'Mail body' => <<<BODY
Вы приглашены на форум <base_url>.

Вам необходимо пройти регистрацию. Чтобы зарегистрироваться, пройдите по этой ссылке:
<activation_url_with_code>

Если по какой-то причине ссылка выше не работает, зайдите на страницу <activation_url> и вручную введите свои данные:
e-mail: <email>
код инвайта: <code>

--
<board_mailer>
(Сообщение сгенерировано автоматически, не отвечайте на него)
BODY
,

    'Invite code' => 'Код инвайта',
    'Invite code help' => 'Введите код из письма с приглашением на форум',
    'Invite doesn\'t exists' => 'Вы не приглашены на этот форум',
    'Invalid invite code' => 'Неверный код инвайта',

);
