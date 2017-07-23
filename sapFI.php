<?php
define('IN_PHPBB', true);
$phpbb_root_path =  './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
$user->session_begin();
$auth->acl($user->data);
$user->setup();

page_header();
$template->set_filenames(array(
	'body' => 'sapFI.html',
	'common_bloc' => 'common_bloc.html'
));
include($phpbb_root_path.'welcome.'.$phpEx);
include($phpbb_root_path.'list_users.'.$phpEx);
page_footer();
?>