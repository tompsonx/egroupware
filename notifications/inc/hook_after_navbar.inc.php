<?php
/**
 * EGroupware - Notifications
 *
 * serves the hook "after_navbar" to create the notificationwindow
 *
 * @abstract notificatonwindow is an empty and non displayed 1px div which gets rezised
 * and populated if a notification is about to be displayed.
 * @license http://opensource.org/licenses/gpl-license.php GPL - GNU General Public License
 * @package notifications
 * @subpackage ajaxpoup
 * @link http://www.egroupware.org
 * @author Cornelius Weiss <nelius@cwtech.de>
 * @version $Id$
 */

use EGroupware\Api;
if ($GLOBALS['egw_info']['user']['apps']['notifications'])
{
	$notification_config = Api\Config::read('notifications');
	Api\Translation::add_app('notifications');
	$popup_poll_interval = empty($notification_config['popup_poll_interval']) ? 60 : $notification_config['popup_poll_interval'];
	echo '<script src="'. $GLOBALS['egw_info']['server']['webserver_url']. '/notifications/js/notificationajaxpopup.js?'.
		filemtime(EGW_SERVER_ROOT.'/notifications/js/notificationajaxpopup.js'). '" type="text/javascript" id="notifications_script_id" data-poll-interval="'.$popup_poll_interval.'"></script>';
	echo '
		<div id="egwpopup" style="display: none; z-index: 999;">
			<div id="egwpopup_header">'.lang('Notifications').
			'<span class="egwpopup_toggle"></span><span class="egwpopup_seenall" title="'. lang('mark all as read').'"></span>'.
			'<span class="egwpopup_deleteall" title="'.lang('delete all messages').'"></span></div>
			<div id="egwpopup_list"></div>
		</div>
	';
	unset($notification_config);
}
