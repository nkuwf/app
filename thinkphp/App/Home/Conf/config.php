<?php
$config=array(
	//'配置项'=>'配置值'
	'APP_GROUP-LIST'=>'Index,Admin',
	//默认分组
	'DEFAULT-GROUP'=>' Index',

	'username'=>'admin',
	 
	
	
);
return array_merge(include './Conf/config.php', $config);
?>