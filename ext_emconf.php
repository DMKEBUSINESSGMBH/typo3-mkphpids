<?php

########################################################################
# Extension Manager/Repository config file for ext "mkphpids".
#
# Auto generated 19-03-2012 15:00
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'TYPO3 Security / Intrusion Detection System',
	'description' => 'Currently the PHPIDS detects all sorts of XSS, SQL Injection, header injection, directory traversal, RFE/LFI, DoS and LDAP attacks. Through special conversion algorithms the PHPIDS is even able to detect heavily obfuscated attacks.',
	'category' => 'plugin',
	'shy' => 0,
	'version' => '1.4.9',
	'dependencies' => 'cms,rn_base',
	//@TODO cms entfernen ab TYPO3 7.x
	'dependencies' => 'cms,frontend,core,rn_base',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Hannes Bochmann',
	'author_email' => 'dev@dmk-ebusiness.de',
	'author_company' => 'DMK E-BUSINESS',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'php' => '5.1.6-0.0.0',
			'typo3' => '4.4.0-6.2.99',
			//@TODO cms entfernen ab TYPO3 7.x
			'cms' => '',
			'core' => '',
			'frontend' => '',
			'rn_base' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:425:{s:9:"ChangeLog";s:4:"b669";s:10:"README.txt";s:4:"6a21";s:16:"ext_autoload.php";s:4:"40e9";s:12:"ext_icon.gif";s:4:"8408";s:17:"ext_localconf.php";s:4:"fd6d";s:26:"ext_localconf_advanced.php";s:4:"941a";s:14:"ext_tables.php";s:4:"631d";s:14:"ext_tables.sql";s:4:"0c87";s:28:"ext_typoscript_constants.txt";s:4:"9edf";s:24:"ext_typoscript_setup.txt";s:4:"60df";s:26:"icon_tx_pxphpids_cache.gif";s:4:"8408";s:24:"icon_tx_pxphpids_log.gif";s:4:"8408";s:16:"locallang_db.xml";s:4:"7c8c";s:7:"tca.php";s:4:"c2b7";s:24:"Classes/Log/Database.php";s:4:"9fb5";s:21:"Classes/Log/Email.php";s:4:"2301";s:29:"cli/class.tx_mkphpids_cli.php";s:4:"25c4";s:14:"doc/manual.sxw";s:4:"f4e2";s:19:"doc/wizard_form.dat";s:4:"6930";s:20:"doc/wizard_form.html";s:4:"9793";s:17:"IDS/Converter.php";s:4:"28a5";s:13:"IDS/Event.php";s:4:"262a";s:14:"IDS/Filter.php";s:4:"4828";s:12:"IDS/Init.php";s:4:"7619";s:15:"IDS/Monitor.php";s:4:"bbc7";s:14:"IDS/Report.php";s:4:"d79c";s:15:"IDS/Version.php";s:4:"aca6";s:23:"IDS/default_filter.json";s:4:"457f";s:22:"IDS/default_filter.xml";s:4:"ec96";s:19:"IDS/Caching/Apc.php";s:4:"c6ba";s:24:"IDS/Caching/Database.php";s:4:"03b9";s:23:"IDS/Caching/Factory.php";s:4:"e271";s:20:"IDS/Caching/File.php";s:4:"b3d6";s:25:"IDS/Caching/Interface.php";s:4:"8ffb";s:25:"IDS/Caching/Memcached.php";s:4:"ac92";s:23:"IDS/Caching/Session.php";s:4:"bcc7";s:25:"IDS/Config/Config.ini.php";s:4:"a134";s:22:"IDS/Filter/Storage.php";s:4:"92bb";s:21:"IDS/Log/Composite.php";s:4:"3c88";s:20:"IDS/Log/Database.php";s:4:"837d";s:17:"IDS/Log/Email.php";s:4:"fbee";s:16:"IDS/Log/File.php";s:4:"3d56";s:21:"IDS/Log/Interface.php";s:4:"f1f9";s:61:"IDS/tmp/PHPIDS_Log_Email_03c6839add1a571e29df32014e5642b5.tmp";s:4:"a1d2";s:61:"IDS/tmp/PHPIDS_Log_Email_20d363cc6c8b4a91f80939b68c8d30c2.tmp";s:4:"1e9f";s:61:"IDS/tmp/PHPIDS_Log_Email_3a05dabc97c3d428b79b73ecf7fa20f8.tmp";s:4:"6240";s:61:"IDS/tmp/PHPIDS_Log_Email_3e310bcb75589db3fb3a7aa9c89ae85e.tmp";s:4:"80e4";s:61:"IDS/tmp/PHPIDS_Log_Email_56d731f4160500a0528eee42f982959e.tmp";s:4:"57bc";s:61:"IDS/tmp/PHPIDS_Log_Email_7ad0fe6010afbd41f17422a06e707e64.tmp";s:4:"d369";s:61:"IDS/tmp/PHPIDS_Log_Email_7ef8a6ef78a3035c219817f0c85edeed.tmp";s:4:"3d20";s:61:"IDS/tmp/PHPIDS_Log_Email_9b9369edf46a12a535dae21afb527779.tmp";s:4:"f505";s:61:"IDS/tmp/PHPIDS_Log_Email_9cf19e984d12ab91800323edb5a04994.tmp";s:4:"4ac1";s:61:"IDS/tmp/PHPIDS_Log_Email_a174ff5464388b54f281f3c87798b490.tmp";s:4:"9344";s:61:"IDS/tmp/PHPIDS_Log_Email_b1e8866a49969bb98d9357c26934da31.tmp";s:4:"7a82";s:28:"IDS/tmp/default_filter.cache";s:4:"786b";s:22:"IDS/tmp/phpids_log.txt";s:4:"b44b";s:46:"IDS/vendors/htmlpurifier/HTMLPurifier.auto.php";s:4:"1f30";s:50:"IDS/vendors/htmlpurifier/HTMLPurifier.autoload.php";s:4:"3f89";s:46:"IDS/vendors/htmlpurifier/HTMLPurifier.func.php";s:4:"4fc8";s:50:"IDS/vendors/htmlpurifier/HTMLPurifier.includes.php";s:4:"6b69";s:46:"IDS/vendors/htmlpurifier/HTMLPurifier.kses.php";s:4:"b246";s:46:"IDS/vendors/htmlpurifier/HTMLPurifier.path.php";s:4:"970d";s:41:"IDS/vendors/htmlpurifier/HTMLPurifier.php";s:4:"5316";s:55:"IDS/vendors/htmlpurifier/HTMLPurifier.safe-includes.php";s:4:"9d4a";s:57:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrCollections.php";s:4:"82b2";s:49:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef.php";s:4:"56a5";s:55:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrTransform.php";s:4:"74c2";s:51:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrTypes.php";s:4:"7fb6";s:55:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrValidator.php";s:4:"72b5";s:51:"IDS/vendors/htmlpurifier/HTMLPurifier/Bootstrap.php";s:4:"7a36";s:55:"IDS/vendors/htmlpurifier/HTMLPurifier/CSSDefinition.php";s:4:"4d39";s:50:"IDS/vendors/htmlpurifier/HTMLPurifier/ChildDef.php";s:4:"0e7a";s:48:"IDS/vendors/htmlpurifier/HTMLPurifier/Config.php";s:4:"cd6e";s:51:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigDef.php";s:4:"9e40";s:54:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema.php";s:4:"4fce";s:53:"IDS/vendors/htmlpurifier/HTMLPurifier/ContentSets.php";s:4:"e32e";s:49:"IDS/vendors/htmlpurifier/HTMLPurifier/Context.php";s:4:"241a";s:52:"IDS/vendors/htmlpurifier/HTMLPurifier/Definition.php";s:4:"60d0";s:57:"IDS/vendors/htmlpurifier/HTMLPurifier/DefinitionCache.php";s:4:"b1d1";s:64:"IDS/vendors/htmlpurifier/HTMLPurifier/DefinitionCacheFactory.php";s:4:"e73a";s:49:"IDS/vendors/htmlpurifier/HTMLPurifier/Doctype.php";s:4:"1f29";s:57:"IDS/vendors/htmlpurifier/HTMLPurifier/DoctypeRegistry.php";s:4:"eab2";s:52:"IDS/vendors/htmlpurifier/HTMLPurifier/ElementDef.php";s:4:"4a64";s:49:"IDS/vendors/htmlpurifier/HTMLPurifier/Encoder.php";s:4:"de67";s:54:"IDS/vendors/htmlpurifier/HTMLPurifier/EntityLookup.php";s:4:"14ee";s:54:"IDS/vendors/htmlpurifier/HTMLPurifier/EntityParser.php";s:4:"fac9";s:56:"IDS/vendors/htmlpurifier/HTMLPurifier/ErrorCollector.php";s:4:"7ec2";s:53:"IDS/vendors/htmlpurifier/HTMLPurifier/ErrorStruct.php";s:4:"bd3b";s:51:"IDS/vendors/htmlpurifier/HTMLPurifier/Exception.php";s:4:"27fd";s:48:"IDS/vendors/htmlpurifier/HTMLPurifier/Filter.php";s:4:"eac5";s:51:"IDS/vendors/htmlpurifier/HTMLPurifier/Generator.php";s:4:"767d";s:56:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLDefinition.php";s:4:"034e";s:52:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule.php";s:4:"4598";s:59:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModuleManager.php";s:4:"ebea";s:55:"IDS/vendors/htmlpurifier/HTMLPurifier/IDAccumulator.php";s:4:"ba88";s:50:"IDS/vendors/htmlpurifier/HTMLPurifier/Injector.php";s:4:"36c9";s:50:"IDS/vendors/htmlpurifier/HTMLPurifier/Language.php";s:4:"3db4";s:57:"IDS/vendors/htmlpurifier/HTMLPurifier/LanguageFactory.php";s:4:"5e06";s:48:"IDS/vendors/htmlpurifier/HTMLPurifier/Length.php";s:4:"c5f9";s:47:"IDS/vendors/htmlpurifier/HTMLPurifier/Lexer.php";s:4:"b0e5";s:56:"IDS/vendors/htmlpurifier/HTMLPurifier/PercentEncoder.php";s:4:"60af";s:49:"IDS/vendors/htmlpurifier/HTMLPurifier/Printer.php";s:4:"c07a";s:54:"IDS/vendors/htmlpurifier/HTMLPurifier/PropertyList.php";s:4:"5f16";s:62:"IDS/vendors/htmlpurifier/HTMLPurifier/PropertyListIterator.php";s:4:"4a25";s:50:"IDS/vendors/htmlpurifier/HTMLPurifier/Strategy.php";s:4:"e148";s:52:"IDS/vendors/htmlpurifier/HTMLPurifier/StringHash.php";s:4:"8fd1";s:58:"IDS/vendors/htmlpurifier/HTMLPurifier/StringHashParser.php";s:4:"496c";s:54:"IDS/vendors/htmlpurifier/HTMLPurifier/TagTransform.php";s:4:"5794";s:47:"IDS/vendors/htmlpurifier/HTMLPurifier/Token.php";s:4:"4632";s:54:"IDS/vendors/htmlpurifier/HTMLPurifier/TokenFactory.php";s:4:"fd79";s:45:"IDS/vendors/htmlpurifier/HTMLPurifier/URI.php";s:4:"576d";s:55:"IDS/vendors/htmlpurifier/HTMLPurifier/URIDefinition.php";s:4:"1dde";s:51:"IDS/vendors/htmlpurifier/HTMLPurifier/URIFilter.php";s:4:"b037";s:51:"IDS/vendors/htmlpurifier/HTMLPurifier/URIParser.php";s:4:"e7b5";s:51:"IDS/vendors/htmlpurifier/HTMLPurifier/URIScheme.php";s:4:"b832";s:59:"IDS/vendors/htmlpurifier/HTMLPurifier/URISchemeRegistry.php";s:4:"4985";s:55:"IDS/vendors/htmlpurifier/HTMLPurifier/UnitConverter.php";s:4:"66bf";s:51:"IDS/vendors/htmlpurifier/HTMLPurifier/VarParser.php";s:4:"f2cd";s:60:"IDS/vendors/htmlpurifier/HTMLPurifier/VarParserException.php";s:4:"84e9";s:53:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/CSS.php";s:4:"745b";s:54:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/Enum.php";s:4:"e445";s:57:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/Integer.php";s:4:"d558";s:54:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/Lang.php";s:4:"b5cf";s:56:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/Switch.php";s:4:"9aa2";s:54:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/Text.php";s:4:"45c5";s:53:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/URI.php";s:4:"656f";s:64:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/CSS/AlphaValue.php";s:4:"33fa";s:64:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/CSS/Background.php";s:4:"6e4d";s:72:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/CSS/BackgroundPosition.php";s:4:"ee4b";s:60:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/CSS/Border.php";s:4:"cbf5";s:59:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/CSS/Color.php";s:4:"1dd5";s:63:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/CSS/Composite.php";s:4:"bc0a";s:74:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/CSS/DenyElementDecorator.php";s:4:"04b4";s:60:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/CSS/Filter.php";s:4:"3b8f";s:58:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/CSS/Font.php";s:4:"2856";s:64:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/CSS/FontFamily.php";s:4:"a49f";s:72:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/CSS/ImportantDecorator.php";s:4:"1c3d";s:60:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/CSS/Length.php";s:4:"9e76";s:63:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/CSS/ListStyle.php";s:4:"4b04";s:62:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/CSS/Multiple.php";s:4:"73d0";s:60:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/CSS/Number.php";s:4:"d432";s:64:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/CSS/Percentage.php";s:4:"ef10";s:68:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/CSS/TextDecoration.php";s:4:"efca";s:57:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/CSS/URI.php";s:4:"254d";s:59:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/HTML/Bool.php";s:4:"947d";s:60:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/HTML/Class.php";s:4:"aa95";s:60:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/HTML/Color.php";s:4:"4d7b";s:66:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/HTML/FrameTarget.php";s:4:"308a";s:57:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/HTML/ID.php";s:4:"b8e6";s:61:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/HTML/Length.php";s:4:"ad93";s:64:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/HTML/LinkTypes.php";s:4:"6e7e";s:66:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/HTML/MultiLength.php";s:4:"ccef";s:63:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/HTML/Nmtokens.php";s:4:"4a3a";s:61:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/HTML/Pixels.php";s:4:"7120";s:59:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/URI/Email.php";s:4:"3fc4";s:58:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/URI/Host.php";s:4:"dded";s:58:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/URI/IPv4.php";s:4:"0b87";s:58:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/URI/IPv6.php";s:4:"5115";s:71:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/URI/Email/SimpleCheck.php";s:4:"0611";s:66:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrTransform/Background.php";s:4:"fb50";s:62:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrTransform/BdoDir.php";s:4:"c8bd";s:63:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrTransform/BgColor.php";s:4:"2056";s:65:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrTransform/BoolToCSS.php";s:4:"5bf5";s:62:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrTransform/Border.php";s:4:"f526";s:65:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrTransform/EnumToCSS.php";s:4:"3c39";s:67:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrTransform/ImgRequired.php";s:4:"0c44";s:64:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrTransform/ImgSpace.php";s:4:"b824";s:61:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrTransform/Input.php";s:4:"9d4e";s:60:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrTransform/Lang.php";s:4:"4b18";s:62:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrTransform/Length.php";s:4:"5c92";s:60:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrTransform/Name.php";s:4:"e230";s:64:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrTransform/NameSync.php";s:4:"a972";s:64:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrTransform/Nofollow.php";s:4:"defd";s:65:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrTransform/SafeEmbed.php";s:4:"a1fb";s:66:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrTransform/SafeObject.php";s:4:"e186";s:65:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrTransform/SafeParam.php";s:4:"cd04";s:70:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrTransform/ScriptRequired.php";s:4:"ad16";s:64:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrTransform/Textarea.php";s:4:"8dbe";s:60:"IDS/vendors/htmlpurifier/HTMLPurifier/ChildDef/Chameleon.php";s:4:"ab41";s:57:"IDS/vendors/htmlpurifier/HTMLPurifier/ChildDef/Custom.php";s:4:"c099";s:56:"IDS/vendors/htmlpurifier/HTMLPurifier/ChildDef/Empty.php";s:4:"6a3c";s:59:"IDS/vendors/htmlpurifier/HTMLPurifier/ChildDef/Optional.php";s:4:"0516";s:59:"IDS/vendors/htmlpurifier/HTMLPurifier/ChildDef/Required.php";s:4:"2d93";s:67:"IDS/vendors/htmlpurifier/HTMLPurifier/ChildDef/StrictBlockquote.php";s:4:"e2f4";s:56:"IDS/vendors/htmlpurifier/HTMLPurifier/ChildDef/Table.php";s:4:"f031";s:61:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigDef/Directive.php";s:4:"c64a";s:66:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigDef/DirectiveAlias.php";s:4:"c572";s:61:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigDef/Namespace.php";s:4:"2e17";s:64:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/Exception.php";s:4:"f450";s:66:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/Interchange.php";s:4:"af63";s:73:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/InterchangeBuilder.php";s:4:"c646";s:64:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/Validator.php";s:4:"d72d";s:68:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/ValidatorAtom.php";s:4:"4bef";s:61:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema.ser";s:4:"4b91";s:75:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/Builder/ConfigSchema.php";s:4:"9f66";s:66:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/Builder/Xml.php";s:4:"6131";s:76:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/Interchange/Directive.php";s:4:"1cf2";s:69:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/Interchange/Id.php";s:4:"e813";s:76:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/Interchange/Namespace.php";s:4:"4885";s:81:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Attr.AllowedClasses.txt";s:4:"6d6b";s:86:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Attr.AllowedFrameTargets.txt";s:4:"44a5";s:77:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Attr.AllowedRel.txt";s:4:"973f";s:77:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Attr.AllowedRev.txt";s:4:"a571";s:80:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Attr.ClassUseCDATA.txt";s:4:"e69e";s:82:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Attr.DefaultImageAlt.txt";s:4:"4181";s:86:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Attr.DefaultInvalidImage.txt";s:4:"4f88";s:89:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Attr.DefaultInvalidImageAlt.txt";s:4:"6bed";s:81:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Attr.DefaultTextDir.txt";s:4:"f7d7";s:75:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Attr.EnableID.txt";s:4:"0353";s:83:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Attr.ForbiddenClasses.txt";s:4:"8b48";s:78:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Attr.IDBlacklist.txt";s:4:"bac7";s:84:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Attr.IDBlacklistRegexp.txt";s:4:"2a11";s:75:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Attr.IDPrefix.txt";s:4:"db52";s:80:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Attr.IDPrefixLocal.txt";s:4:"3787";s:66:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Attr.txt";s:4:"2ca4";s:86:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/AutoFormat.AutoParagraph.txt";s:4:"68ea";s:79:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/AutoFormat.Custom.txt";s:4:"6a34";s:87:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/AutoFormat.DisplayLinkURI.txt";s:4:"ca6a";s:80:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/AutoFormat.Linkify.txt";s:4:"9db0";s:95:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/AutoFormat.PurifierLinkify.DocURL.txt";s:4:"8d60";s:88:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/AutoFormat.PurifierLinkify.txt";s:4:"8f03";s:106:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/AutoFormat.RemoveEmpty.RemoveNbsp.Exceptions.txt";s:4:"3ae1";s:95:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/AutoFormat.RemoveEmpty.RemoveNbsp.txt";s:4:"b6c6";s:84:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/AutoFormat.RemoveEmpty.txt";s:4:"6e17";s:101:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/AutoFormat.RemoveSpansWithoutAttributes.txt";s:4:"2481";s:72:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/AutoFormat.txt";s:4:"7986";s:99:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/AutoFormatParam.PurifierLinkifyDocURL.txt";s:4:"3379";s:77:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/AutoFormatParam.txt";s:4:"3a64";s:80:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/CSS.AllowImportant.txt";s:4:"5de3";s:77:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/CSS.AllowTricky.txt";s:4:"2abc";s:78:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/CSS.AllowedFonts.txt";s:4:"6593";s:83:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/CSS.AllowedProperties.txt";s:4:"e7b6";s:79:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/CSS.DefinitionRev.txt";s:4:"8628";s:85:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/CSS.ForbiddenProperties.txt";s:4:"cde5";s:78:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/CSS.MaxImgLength.txt";s:4:"6349";s:77:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/CSS.Proprietary.txt";s:4:"4dfb";s:73:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/CSS.Trusted.txt";s:4:"8bc5";s:65:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/CSS.txt";s:4:"857c";s:82:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Cache.DefinitionImpl.txt";s:4:"725f";s:82:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Cache.SerializerPath.txt";s:4:"6ce0";s:89:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Cache.SerializerPermissions.txt";s:4:"d321";s:67:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Cache.txt";s:4:"949b";s:84:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Core.AggressivelyFixLt.txt";s:4:"abee";s:80:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Core.CollectErrors.txt";s:4:"f52c";s:80:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Core.ColorKeywords.txt";s:4:"bd87";s:92:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Core.ConvertDocumentToFragment.txt";s:4:"09fe";s:98:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Core.DirectLexLineNumberSyncInterval.txt";s:4:"a1d4";s:75:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Core.Encoding.txt";s:4:"d630";s:88:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Core.EscapeInvalidChildren.txt";s:4:"de82";s:84:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Core.EscapeInvalidTags.txt";s:4:"d6a6";s:91:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Core.EscapeNonASCIICharacters.txt";s:4:"7d01";s:81:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Core.HiddenElements.txt";s:4:"27eb";s:75:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Core.Language.txt";s:4:"850f";s:76:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Core.LexerImpl.txt";s:4:"3d21";s:86:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Core.MaintainLineNumbers.txt";s:4:"1e24";s:84:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Core.NormalizeNewlines.txt";s:4:"7e28";s:83:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Core.RemoveInvalidImg.txt";s:4:"630c";s:95:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Core.RemoveProcessingInstructions.txt";s:4:"bf24";s:87:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Core.RemoveScriptContents.txt";s:4:"f8e7";s:66:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Core.txt";s:4:"b065";s:75:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Filter.Custom.txt";s:4:"32d1";s:96:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Filter.ExtractStyleBlocks.Escaping.txt";s:4:"afbd";s:93:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Filter.ExtractStyleBlocks.Scope.txt";s:4:"c64b";s:96:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Filter.ExtractStyleBlocks.TidyImpl.txt";s:4:"ac08";s:87:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Filter.ExtractStyleBlocks.txt";s:4:"8342";s:76:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Filter.YouTube.txt";s:4:"a020";s:68:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Filter.txt";s:4:"a779";s:100:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/FilterParam.ExtractStyleBlocksEscaping.txt";s:4:"3c49";s:97:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/FilterParam.ExtractStyleBlocksScope.txt";s:4:"f4db";s:100:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/FilterParam.ExtractStyleBlocksTidyImpl.txt";s:4:"265e";s:73:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/FilterParam.txt";s:4:"b735";s:74:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.Allowed.txt";s:4:"0dfd";s:84:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.AllowedAttributes.txt";s:4:"fca0";s:82:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.AllowedElements.txt";s:4:"f23e";s:81:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.AllowedModules.txt";s:4:"a9ef";s:85:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.Attr.Name.UseCDATA.txt";s:4:"3f7f";s:79:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.BlockWrapper.txt";s:4:"f3a7";s:78:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.CoreModules.txt";s:4:"6c47";s:80:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.CustomDoctype.txt";s:4:"cb57";s:79:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.DefinitionID.txt";s:4:"8b61";s:80:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.DefinitionRev.txt";s:4:"c320";s:74:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.Doctype.txt";s:4:"60e8";s:87:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.FlashAllowFullScreen.txt";s:4:"c93e";s:86:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.ForbiddenAttributes.txt";s:4:"22e3";s:84:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.ForbiddenElements.txt";s:4:"3572";s:79:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.MaxImgLength.txt";s:4:"21ff";s:75:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.Nofollow.txt";s:4:"ed72";s:73:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.Parent.txt";s:4:"bb4e";s:78:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.Proprietary.txt";s:4:"6346";s:76:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.SafeEmbed.txt";s:4:"2a29";s:77:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.SafeObject.txt";s:4:"1f94";s:73:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.Strict.txt";s:4:"177b";s:74:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.TidyAdd.txt";s:4:"beec";s:76:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.TidyLevel.txt";s:4:"f820";s:77:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.TidyRemove.txt";s:4:"4784";s:74:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.Trusted.txt";s:4:"63ce";s:72:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.XHTML.txt";s:4:"4e02";s:66:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.txt";s:4:"9ea6";s:90:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Output.CommentScriptContents.txt";s:4:"6b32";s:81:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Output.FixInnerHTML.txt";s:4:"de37";s:80:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Output.FlashCompat.txt";s:4:"1504";s:76:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Output.Newline.txt";s:4:"e559";s:77:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Output.SortAttr.txt";s:4:"0f87";s:79:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Output.TidyFormat.txt";s:4:"097c";s:68:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Output.txt";s:4:"9c28";s:79:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Test.ForceNoIconv.txt";s:4:"0688";s:66:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Test.txt";s:4:"5c7d";s:80:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/URI.AllowedSchemes.txt";s:4:"4e2c";s:70:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/URI.Base.txt";s:4:"b038";s:79:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/URI.DefaultScheme.txt";s:4:"7d98";s:78:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/URI.DefinitionID.txt";s:4:"8106";s:79:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/URI.DefinitionRev.txt";s:4:"83fa";s:73:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/URI.Disable.txt";s:4:"b972";s:81:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/URI.DisableExternal.txt";s:4:"c558";s:90:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/URI.DisableExternalResources.txt";s:4:"7b0a";s:82:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/URI.DisableResources.txt";s:4:"0ab4";s:70:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/URI.Host.txt";s:4:"53a8";s:79:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/URI.HostBlacklist.txt";s:4:"de43";s:78:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/URI.MakeAbsolute.txt";s:4:"a9b4";s:71:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/URI.Munge.txt";s:4:"e507";s:80:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/URI.MungeResources.txt";s:4:"f342";s:80:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/URI.MungeSecretKey.txt";s:4:"e89c";s:88:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/URI.OverrideAllowedSchemes.txt";s:4:"871a";s:65:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/URI.txt";s:4:"de20";s:66:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/info.ini";s:4:"d414";s:67:"IDS/vendors/htmlpurifier/HTMLPurifier/DefinitionCache/Decorator.php";s:4:"8c98";s:62:"IDS/vendors/htmlpurifier/HTMLPurifier/DefinitionCache/Null.php";s:4:"7c0e";s:68:"IDS/vendors/htmlpurifier/HTMLPurifier/DefinitionCache/Serializer.php";s:4:"3eee";s:75:"IDS/vendors/htmlpurifier/HTMLPurifier/DefinitionCache/Decorator/Cleanup.php";s:4:"2f58";s:74:"IDS/vendors/htmlpurifier/HTMLPurifier/DefinitionCache/Decorator/Memory.php";s:4:"86bc";s:79:"IDS/vendors/htmlpurifier/HTMLPurifier/DefinitionCache/Decorator/Template.php.in";s:4:"56f4";s:71:"IDS/vendors/htmlpurifier/HTMLPurifier/DefinitionCache/Serializer/README";s:4:"dccd";s:113:"IDS/vendors/htmlpurifier/HTMLPurifier/DefinitionCache/Serializer/CSS/4.1.0,801ad73acbcf9d3127e1d01768d26453,1.ser";s:4:"2293";s:114:"IDS/vendors/htmlpurifier/HTMLPurifier/DefinitionCache/Serializer/HTML/4.1.0,ddc9b993d7fc8d4a185e8dbf5b9a0996,1.ser";s:4:"1474";s:113:"IDS/vendors/htmlpurifier/HTMLPurifier/DefinitionCache/Serializer/URI/4.0.0,05c766101e813c246917b022f97b5e6e,1.ser";s:4:"16d8";s:63:"IDS/vendors/htmlpurifier/HTMLPurifier/EntityLookup/entities.ser";s:4:"0eff";s:67:"IDS/vendors/htmlpurifier/HTMLPurifier/Filter/ExtractStyleBlocks.php";s:4:"6734";s:56:"IDS/vendors/htmlpurifier/HTMLPurifier/Filter/YouTube.php";s:4:"34b1";s:56:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/Bdo.php";s:4:"e029";s:69:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/CommonAttributes.php";s:4:"8286";s:57:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/Edit.php";s:4:"1200";s:58:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/Forms.php";s:4:"8f45";s:62:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/Hypertext.php";s:4:"a6ec";s:58:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/Image.php";s:4:"f55b";s:59:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/Legacy.php";s:4:"2361";s:57:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/List.php";s:4:"8317";s:57:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/Name.php";s:4:"1395";s:61:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/Nofollow.php";s:4:"4d78";s:75:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/NonXMLCommonAttributes.php";s:4:"1e3d";s:59:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/Object.php";s:4:"4622";s:65:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/Presentation.php";s:4:"4f88";s:64:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/Proprietary.php";s:4:"5070";s:57:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/Ruby.php";s:4:"10d8";s:62:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/SafeEmbed.php";s:4:"bf30";s:63:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/SafeObject.php";s:4:"e06f";s:62:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/Scripting.php";s:4:"df0b";s:67:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/StyleAttribute.php";s:4:"5a3c";s:59:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/Tables.php";s:4:"a86a";s:59:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/Target.php";s:4:"adfc";s:57:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/Text.php";s:4:"f890";s:57:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/Tidy.php";s:4:"cf5a";s:72:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/XMLCommonAttributes.php";s:4:"4fe3";s:62:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/Tidy/Name.php";s:4:"ad70";s:69:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/Tidy/Proprietary.php";s:4:"6496";s:64:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/Tidy/Strict.php";s:4:"c3fa";s:70:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/Tidy/Transitional.php";s:4:"c398";s:63:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/Tidy/XHTML.php";s:4:"c9df";s:71:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/Tidy/XHTMLAndHTML4.php";s:4:"1572";s:64:"IDS/vendors/htmlpurifier/HTMLPurifier/Injector/AutoParagraph.php";s:4:"21df";s:65:"IDS/vendors/htmlpurifier/HTMLPurifier/Injector/DisplayLinkURI.php";s:4:"0fdc";s:58:"IDS/vendors/htmlpurifier/HTMLPurifier/Injector/Linkify.php";s:4:"20a3";s:66:"IDS/vendors/htmlpurifier/HTMLPurifier/Injector/PurifierLinkify.php";s:4:"1559";s:62:"IDS/vendors/htmlpurifier/HTMLPurifier/Injector/RemoveEmpty.php";s:4:"341b";s:79:"IDS/vendors/htmlpurifier/HTMLPurifier/Injector/RemoveSpansWithoutAttributes.php";s:4:"9ba8";s:61:"IDS/vendors/htmlpurifier/HTMLPurifier/Injector/SafeObject.php";s:4:"268c";s:68:"IDS/vendors/htmlpurifier/HTMLPurifier/Language/classes/en-x-test.php";s:4:"4f71";s:69:"IDS/vendors/htmlpurifier/HTMLPurifier/Language/messages/en-x-test.php";s:4:"d7a7";s:73:"IDS/vendors/htmlpurifier/HTMLPurifier/Language/messages/en-x-testmini.php";s:4:"ee81";s:62:"IDS/vendors/htmlpurifier/HTMLPurifier/Language/messages/en.php";s:4:"7560";s:54:"IDS/vendors/htmlpurifier/HTMLPurifier/Lexer/DOMLex.php";s:4:"d631";s:57:"IDS/vendors/htmlpurifier/HTMLPurifier/Lexer/DirectLex.php";s:4:"7257";s:56:"IDS/vendors/htmlpurifier/HTMLPurifier/Lexer/PEARSax3.php";s:4:"17f2";s:52:"IDS/vendors/htmlpurifier/HTMLPurifier/Lexer/PH5P.php";s:4:"5d3c";s:63:"IDS/vendors/htmlpurifier/HTMLPurifier/Printer/CSSDefinition.php";s:4:"b2fd";s:60:"IDS/vendors/htmlpurifier/HTMLPurifier/Printer/ConfigForm.css";s:4:"ef18";s:59:"IDS/vendors/htmlpurifier/HTMLPurifier/Printer/ConfigForm.js";s:4:"6cff";s:60:"IDS/vendors/htmlpurifier/HTMLPurifier/Printer/ConfigForm.php";s:4:"8248";s:64:"IDS/vendors/htmlpurifier/HTMLPurifier/Printer/HTMLDefinition.php";s:4:"11fc";s:60:"IDS/vendors/htmlpurifier/HTMLPurifier/Strategy/Composite.php";s:4:"72a2";s:55:"IDS/vendors/htmlpurifier/HTMLPurifier/Strategy/Core.php";s:4:"b321";s:61:"IDS/vendors/htmlpurifier/HTMLPurifier/Strategy/FixNesting.php";s:4:"4a04";s:65:"IDS/vendors/htmlpurifier/HTMLPurifier/Strategy/MakeWellFormed.php";s:4:"b3ca";s:72:"IDS/vendors/htmlpurifier/HTMLPurifier/Strategy/RemoveForeignElements.php";s:4:"84ce";s:69:"IDS/vendors/htmlpurifier/HTMLPurifier/Strategy/ValidateAttributes.php";s:4:"b878";s:59:"IDS/vendors/htmlpurifier/HTMLPurifier/TagTransform/Font.php";s:4:"6398";s:61:"IDS/vendors/htmlpurifier/HTMLPurifier/TagTransform/Simple.php";s:4:"2f33";s:55:"IDS/vendors/htmlpurifier/HTMLPurifier/Token/Comment.php";s:4:"a802";s:53:"IDS/vendors/htmlpurifier/HTMLPurifier/Token/Empty.php";s:4:"cf49";s:51:"IDS/vendors/htmlpurifier/HTMLPurifier/Token/End.php";s:4:"460a";s:53:"IDS/vendors/htmlpurifier/HTMLPurifier/Token/Start.php";s:4:"f87e";s:51:"IDS/vendors/htmlpurifier/HTMLPurifier/Token/Tag.php";s:4:"f641";s:52:"IDS/vendors/htmlpurifier/HTMLPurifier/Token/Text.php";s:4:"0ba3";s:67:"IDS/vendors/htmlpurifier/HTMLPurifier/URIFilter/DisableExternal.php";s:4:"d841";s:76:"IDS/vendors/htmlpurifier/HTMLPurifier/URIFilter/DisableExternalResources.php";s:4:"eb70";s:68:"IDS/vendors/htmlpurifier/HTMLPurifier/URIFilter/DisableResources.php";s:4:"0d50";s:65:"IDS/vendors/htmlpurifier/HTMLPurifier/URIFilter/HostBlacklist.php";s:4:"8436";s:64:"IDS/vendors/htmlpurifier/HTMLPurifier/URIFilter/MakeAbsolute.php";s:4:"8eca";s:57:"IDS/vendors/htmlpurifier/HTMLPurifier/URIFilter/Munge.php";s:4:"b7d0";s:56:"IDS/vendors/htmlpurifier/HTMLPurifier/URIScheme/data.php";s:4:"cb4f";s:56:"IDS/vendors/htmlpurifier/HTMLPurifier/URIScheme/file.php";s:4:"4446";s:55:"IDS/vendors/htmlpurifier/HTMLPurifier/URIScheme/ftp.php";s:4:"f594";s:56:"IDS/vendors/htmlpurifier/HTMLPurifier/URIScheme/http.php";s:4:"b3a6";s:57:"IDS/vendors/htmlpurifier/HTMLPurifier/URIScheme/https.php";s:4:"9e1a";s:58:"IDS/vendors/htmlpurifier/HTMLPurifier/URIScheme/mailto.php";s:4:"ee76";s:56:"IDS/vendors/htmlpurifier/HTMLPurifier/URIScheme/news.php";s:4:"5db9";s:56:"IDS/vendors/htmlpurifier/HTMLPurifier/URIScheme/nntp.php";s:4:"c21d";s:60:"IDS/vendors/htmlpurifier/HTMLPurifier/VarParser/Flexible.php";s:4:"518f";s:58:"IDS/vendors/htmlpurifier/HTMLPurifier/VarParser/Native.php";s:4:"bd2f";s:14:"mod1/clear.gif";s:4:"cc11";s:13:"mod1/conf.php";s:4:"ed99";s:14:"mod1/index.php";s:4:"c46d";s:18:"mod1/locallang.xml";s:4:"a3c2";s:22:"mod1/locallang_mod.xml";s:4:"54fc";s:19:"mod1/moduleicon.gif";s:4:"8408";s:29:"pi1/class.tx_mkphpids_pi1.php";s:4:"e478";}',
	'suggests' => array(
	),
);

?>