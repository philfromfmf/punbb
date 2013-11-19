<?php
/**
 * Default SEF URL scheme.
 *
 * @copyright (C) 2008-2012 PunBB
 * @license http://www.gnu.org/licenses/gpl.html GPL version 2 or higher
 * @package profit_pm
 */

$forum_url['profit_pm_send'] = 'misc.php?action=profit_pm_send';
$forum_url['profit_pm'] = 'misc.php?section=profit_pm';
$forum_url['profit_pm_inbox'] = 'misc.php?section=profit_pm&amp;pmpage=inbox';
$forum_url['profit_pm_outbox'] = 'misc.php?section=profit_pm&amp;pmpage=outbox';
$forum_url['profit_pm_write'] = 'misc.php?section=profit_pm&amp;pmpage=write';
$forum_url['profit_pm_edit'] = 'misc.php?section=profit_pm&amp;pmpage=write&amp;message_id=$1';
$forum_url['profit_pm_view'] = 'misc.php?section=profit_pm&amp;pmpage=$2&amp;message_id=$1';
$forum_url['profit_pm_post_link'] = 'misc.php?section=profit_pm&amp;pmpage=compose&amp;receiver_id=$1';

?>