<?php
$installer = $this;
$installer->startSetup();
$sql=<<<SQLTEXT
create table shweta_video_url(id int not null auto_increment, keyurl varchar(100), primary key(id));

		
SQLTEXT;

$installer->run($sql);
//demo 
//Mage::getModel('core/url_rewrite')->setId(null);
//demo 
$installer->endSetup();
	 