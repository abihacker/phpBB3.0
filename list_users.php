<?php
if (!defined('IN_PHPBB'))
{
	exit;
}
$template->set_filenames(array('list_users' => 'list_users.html'));
$sql = 'SELECT username FROM ' . USERS_TABLE . '
      ORDER by username ASC LIMIT 0,10';
$result = $db->sql_query($sql);
while($row = $db->sql_fetchrow($result))
{
	$template->assign_block_vars('row', array(
	   'USERNAME'    => $row['username']
	));
}
$html = $template->assign_display('list_users');
$template->assign_block_vars('bloc', array(
	'TITLE'	 => $user->lang['LIST_USERS'],
	'CONTENT' => $html
));
$template->assign_display('common_bloc', 'BLOC2', false);
$template->destroy_block_vars('bloc');
?>