<?php
if(!defined('InElvesCMS'))
{
        exit();
}

//------ QQ登录插件安装 ------

$appnum=$Elves->gettotal("select count(*) as total from {$dbtbpre}melvemember_connect_app where apptype='qq'");
if(!$appnum)
{
	//增加QQ登录应用记录
	$Elves->query("REPLACE INTO `{$dbtbpre}melvemember_connect_app`(`id`,`apptype`,`appname`,`appid`,`appkey`,`isclose`,`myorder`,`qappname`,`appsay`) VALUES (NULL,'qq','QQ登录','12345678','123456789',0,0,'QQ','QQ登录');");

	GetConfig();
}
?>