<?php
if(!defined('InElvesCMS'))
{
        exit();
}

//------ QQ登录插件卸载 ------

//删除QQ登录应用记录
$Elves->query("delete from {$dbtbpre}melvemember_connect_app where apptype='qq';");

GetConfig();

?>