<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsmemberadd`;");
E_C("CREATE TABLE `phome_enewsmemberadd` (
  `userid` int(10) unsigned NOT NULL DEFAULT '0',
  `truename` varchar(20) NOT NULL DEFAULT '',
  `oicq` varchar(25) NOT NULL DEFAULT '',
  `msn` varchar(120) NOT NULL DEFAULT '',
  `mycall` varchar(30) NOT NULL DEFAULT '',
  `phone` varchar(30) NOT NULL DEFAULT '',
  `address` varchar(255) NOT NULL DEFAULT '',
  `zip` varchar(8) NOT NULL DEFAULT '',
  `spacestyleid` smallint(6) NOT NULL DEFAULT '0',
  `homepage` varchar(200) NOT NULL DEFAULT '',
  `saytext` text NOT NULL,
  `company` varchar(255) NOT NULL DEFAULT '',
  `fax` varchar(30) NOT NULL DEFAULT '',
  `userpic` varchar(200) NOT NULL DEFAULT '',
  `spacename` varchar(255) NOT NULL DEFAULT '',
  `spacegg` text NOT NULL,
  `viewstats` int(11) NOT NULL DEFAULT '0',
  `regip` varchar(20) NOT NULL DEFAULT '',
  `lasttime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastip` varchar(20) NOT NULL DEFAULT '',
  `loginnum` int(10) unsigned NOT NULL DEFAULT '0',
  `regipport` varchar(6) NOT NULL DEFAULT '',
  `lastipport` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsmemberadd` values('1','','','','','','','','1','','','','','','','','0','192.168.1.1','1453957951','192.168.1.1','2','0','0');");
E_D("replace into `phome_enewsmemberadd` values('2','','','','','','','','1','','','','','','','','0','123.157.184.21','1452307520','123.157.184.21','1','0','0');");
E_D("replace into `phome_enewsmemberadd` values('3','','','','','','','','1','','','','','','','','1','117.136.97.116','1452311835','117.136.97.116','1','0','0');");
E_D("replace into `phome_enewsmemberadd` values('4','','','','','','','','1','','','','','','','','0','183.160.96.227','1452443338','183.160.96.227','1','0','0');");
E_D("replace into `phome_enewsmemberadd` values('5','','','','','','','','1','','','','','','','','0','61.175.101.122','1452582121','61.175.101.122','1','0','0');");
E_D("replace into `phome_enewsmemberadd` values('6','','','','','','','','1','','','','','','','','0','111.161.114.233','1452616198','111.161.114.233','1','0','0');");
E_D("replace into `phome_enewsmemberadd` values('7','','','','','','','','1','','','','','','','','1','36.186.10.147','1452921396','36.186.10.147','2','0','0');");
E_D("replace into `phome_enewsmemberadd` values('8','','','','','','','','1','','','','','','','','1','221.220.206.237','1452997701','221.220.206.237','1','0','0');");
E_D("replace into `phome_enewsmemberadd` values('9','','','','','','','','1','','','','','','','','0','113.162.124.112','1453143223','113.162.124.112','1','0','0');");
E_D("replace into `phome_enewsmemberadd` values('10','','','','','','','','1','','','','','','','','0','112.83.203.204','1453301900','112.83.203.204','1','0','0');");
E_D("replace into `phome_enewsmemberadd` values('11','','','','','','','','1','','','','','','','','1','119.181.43.239','1453356244','119.181.43.239','2','0','0');");
E_D("replace into `phome_enewsmemberadd` values('12','','','','','','','','1','','','','','','','','1','113.81.228.120','1453372044','113.81.228.120','1','0','0');");
E_D("replace into `phome_enewsmemberadd` values('13','','','','','','','','1','','','','','','','','0','116.77.238.132','1453384639','116.77.238.132','1','0','0');");
E_D("replace into `phome_enewsmemberadd` values('14','','','','','','','','1','','','','','','','','3','171.217.145.251','1453427600','171.217.145.251','1','0','0');");
E_D("replace into `phome_enewsmemberadd` values('15','凌晨','1468939749','1468939749','13479827105','13479827105','家里蹲','333214','1','http://266118.com','1111111','','','','','','0','182.86.202.182','1453585228','182.86.202.182','1','0','0');");
E_D("replace into `phome_enewsmemberadd` values('16','','','','','','','','1','','','','','','','','0','183.167.179.162','1453623070','183.167.179.162','1','0','0');");
E_D("replace into `phome_enewsmemberadd` values('17','','','','','','','','1','','','','','','','','1','36.250.66.188','1453631910','112.10.117.228','2','0','0');");
E_D("replace into `phome_enewsmemberadd` values('18','','','','','','','','1','','','','','/d/file/2016-01-26/bca81f964d4afc6f2ab5d18817eaaedf.gif','','','0','117.95.74.162','1453818816','117.95.74.162','1','0','0');");
E_D("replace into `phome_enewsmemberadd` values('19','','','','','','','','1','','','','','','','','1','221.3.133.210','1453893398','221.3.133.210','3','0','0');");
E_D("replace into `phome_enewsmemberadd` values('20','','','','','','','','1','','','','','','','','0','39.88.17.179','1453852233','39.88.17.179','1','0','0');");
E_D("replace into `phome_enewsmemberadd` values('21','','','','','','','','1','','','','','','','','1','113.66.170.6','1453900470','113.66.170.6','3','0','0');");
E_D("replace into `phome_enewsmemberadd` values('22','','','','','','','','1','','','','','','','','0','59.48.153.166','1453979793','59.48.153.166','1','0','0');");
E_D("replace into `phome_enewsmemberadd` values('23','','','','','','','','1','','','','','','','','2','59.63.187.171','1456141383','175.22.6.13','2','0','0');");
E_D("replace into `phome_enewsmemberadd` values('29','','','','','','','','1','','','','','','','','0','36.46.97.198','1456487024','36.46.97.198','1','0','0');");
E_D("replace into `phome_enewsmemberadd` values('24','','','','','','','','1','','','','','','','','0','218.84.238.74','1454305336','218.84.238.74','1','0','0');");
E_D("replace into `phome_enewsmemberadd` values('25','','','','','','','','1','','','','','','','','3','113.66.231.242','1454310825','113.66.231.242','1','0','0');");
E_D("replace into `phome_enewsmemberadd` values('26','','','','','','','','1','','','','','','','','2','112.5.170.188','1455689566','101.226.125.108','3','0','0');");
E_D("replace into `phome_enewsmemberadd` values('27','','','','','','','','1','','','','','','','','1','219.82.152.18','1455703309','219.82.152.18','2','0','0');");
E_D("replace into `phome_enewsmemberadd` values('28','','','','','','','','1','','','','','','','','0','218.104.106.46','1455939419','112.90.239.204','2','0','0');");
E_D("replace into `phome_enewsmemberadd` values('30','','','','','','','','1','','','','','','','','1','125.127.1.246','1456570427','125.127.1.246','1','0','0');");
E_D("replace into `phome_enewsmemberadd` values('31','','','','','','','','1','','','','','','','','2','39.69.21.15','1456800098','39.69.21.15','1','0','0');");
E_D("replace into `phome_enewsmemberadd` values('32','','','','','','','','1','','','','','','','','0','182.244.35.26','1457114950','182.244.35.26','1','0','0');");
E_D("replace into `phome_enewsmemberadd` values('33','','','','','','','','1','','','','','','','','1','1.57.51.188','1457141988','1.57.51.188','1','0','0');");
E_D("replace into `phome_enewsmemberadd` values('34','','','','','','','','1','','','','','','','','1','110.252.173.89','1457337911','110.252.173.89','1','0','0');");
E_D("replace into `phome_enewsmemberadd` values('35','','','','','','','','1','','','','','','','','1','14.153.245.89','1457510084','14.153.245.89','1','0','0');");
E_D("replace into `phome_enewsmemberadd` values('36','','','','','','','','1','','','','','','','','1','111.85.231.191','1457529646','111.85.231.191','2','0','0');");
E_D("replace into `phome_enewsmemberadd` values('37','','','','','','','','1','','','','','','','','1','113.2.203.220','1458018027','113.2.203.220','1','0','0');");
E_D("replace into `phome_enewsmemberadd` values('38','','','','','','','','1','','','','','','','','0','117.24.8.127','1458165074','117.24.8.127','1','0','0');");
E_D("replace into `phome_enewsmemberadd` values('39','','','','','','','','1','','','','','','','','0','42.81.34.217','1458186305','42.81.34.217','1','0','0');");
E_D("replace into `phome_enewsmemberadd` values('40','','','','','','','','1','','','','','','','','1','124.113.137.99','1458224727','124.113.137.99','1','0','0');");
E_D("replace into `phome_enewsmemberadd` values('41','','','','','','','','1','','','','','','','','1','59.42.34.187','1458241313','59.42.34.187','1','0','0');");
E_D("replace into `phome_enewsmemberadd` values('42','','','','','','','','1','','','','','','','','2','58.245.82.245','1458267652','58.245.82.245','1','0','0');");
E_D("replace into `phome_enewsmemberadd` values('43','','','','','','','','1','','','','','','','','1','183.154.133.226','1458300214','183.154.133.226','1','0','0');");
E_D("replace into `phome_enewsmemberadd` values('44','','','','','','','','1','','','','','','','','0','183.46.156.253','1458377491','183.46.156.253','1','0','0');");
E_D("replace into `phome_enewsmemberadd` values('45','asd','asd','asd','asd','sdf','sfg','xf','1','sdf','xfg','','','','','','0','124.127.65.216','1458399720','124.127.65.216','1','0','0');");
E_D("replace into `phome_enewsmemberadd` values('46','','','','','','','','1','','','','','','','','0','124.91.113.72','1458650827','124.91.113.72','1','0','0');");
E_D("replace into `phome_enewsmemberadd` values('47','','','','','','','','1','','','','','','','','0','27.37.139.98','1459358321','27.37.139.98','1','0','0');");
E_D("replace into `phome_enewsmemberadd` values('48','王有','25842568','','','','','','1','','','','','','','','0','182.91.43.52','1459655849','182.91.43.52','1','0','0');");
E_D("replace into `phome_enewsmemberadd` values('49','','','','','','','','1','','','','','','','','10','221.218.84.99','1459918327','61.51.69.250','7','0','0');");
E_D("replace into `phome_enewsmemberadd` values('50','','','','','','','','1','','','','','','','','1','112.250.194.25','1459743433','112.250.194.25','2','0','0');");
E_D("replace into `phome_enewsmemberadd` values('51','','','','','','','','1','','','','','','','','1','58.255.26.222','1459925769','58.255.26.222','1','0','0');");

@include("../../inc/footer.php");
?>