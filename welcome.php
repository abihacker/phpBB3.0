<?php
if (!defined('IN_PHPBB'))
{
	exit;
}
$username = $user->data['username'];
$template->set_filenames(array('welcome' => 'welcome.html'));
$template->assign_vars(array(
   'PSEUDO'    => $username,
));
$html = $template->assign_display('welcome');
$template->assign_block_vars('bloc', array(
	'TITLE'	 => $user->lang['WELCOME'],
	'CONTENT' => $html
));
$template->assign_display('common_bloc', 'BLOC1', false);
$template->destroy_block_vars('bloc');
?>