#
# Table structure for table 'tx_mkphpids_log'
#
CREATE TABLE tx_mkphpids_log (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	name tinytext,
	value text,
	page text,
	ip tinytext,
	impact int(11) DEFAULT '0' NOT NULL,
	origin tinytext,
	created tinytext,
	data longtext,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_mkphpids_cache'
#
CREATE TABLE tx_mkphpids_cache (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	type tinytext,
	created tinytext,
	phpids_data text,
	modified tinytext,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);