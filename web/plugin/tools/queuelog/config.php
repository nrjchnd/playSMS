<?php
defined('_SECURE_') or die('Forbidden');

$menutab_tools = $core_config['menutab']['tools'];
$arr_menu[$menutab_tools][] = array("index.php?app=menu&inc=tools_queuelog&op=queuelog_list", _('View SMS queue'));
?>