<?php
include_once "/opt/fpp/www/common.php";
$pluginName = "remote-falcon";

WriteSettingToFile("interrupt_schedule_enabled",urlencode("false"),$pluginName);
WriteSettingToFile("remote_fpp_enabled",urlencode("false"),$pluginName);
WriteSettingToFile("remote_fpp_restarting",urlencode("true"),$pluginName);
?>