drop database if exists connexion_user;
create database connexion_user;
use connexion_user;

CREATE TABLE `session` (
  `sess_id` char(40) NOT NULL,
  `sess_datas` text NOT NULL,
  `sess_expire` bigint(20) NOT NULL,
  UNIQUE KEY `sess_id` (`sess_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
