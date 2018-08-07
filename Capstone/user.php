<? php
CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(50) NOT NULL default '',
  `password` varchar(128) NOT NULL default '',
  `email` varchar(250) NOT NULL default '',
  `active` binary(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
>