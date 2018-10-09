<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "mkphpids".
 *
 * Auto generated 11-09-2014 13:32
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
    'title' => 'MK PHPIDS',
    'description' => 'Currently the PHPIDS detects all sorts of XSS, SQL Injection, header injection, directory traversal, RFE/LFI, DoS and LDAP attacks. Through special conversion algorithms the PHPIDS is even able to detect heavily obfuscated attacks.',
    'category' => 'plugin',
    'shy' => 0,
    'version' => '3.0.7',
    'dependencies' => 'cms,core,frontend,rn_base',
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
            'rn_base' => '1.4.0-',
            'typo3' => '6.2.0-8.7.99',
            'scheduler' => '1.0.0-8.7.99',
            'mklib' => '3.0.0-',
        ),
        'conflicts' => array(),
        'suggests' => array(),
    ),
    '_md5_values_when_last_written' => 'a:425:{s:16:"ext_autoload.php";s:4:"40e9";s:12:"ext_icon.gif";s:4:"8408";s:17:"ext_localconf.php";s:4:"fd6d";s:26:"ext_localconf_advanced.php";s:4:"7cfc";s:14:"ext_tables.php";s:4:"5bd1";s:14:"ext_tables.sql";s:4:"0f28";s:28:"ext_typoscript_constants.txt";s:4:"cec7";s:24:"ext_typoscript_setup.txt";s:4:"26c8";s:26:"icon_tx_mkphpids_cache.gif";s:4:"8408";s:24:"icon_tx_mkphpids_log.gif";s:4:"8408";s:16:"locallang_db.xml";s:4:"7c8c";s:10:"README.txt";s:4:"6a21";s:7:"tca.php";s:4:"c2b7";s:24:"Classes/Log/Database.php";s:4:"943a";s:21:"Classes/Log/Email.php";s:4:"c8f6";s:29:"Classes/Log/PrintToScreen.php";s:4:"4966";s:26:"Documentation/Includes.txt";s:4:"ef74";s:23:"Documentation/Index.rst";s:4:"4913";s:26:"Documentation/Settings.yml";s:4:"a4a9";s:38:"Documentation/Administration/Index.rst";s:4:"0747";s:33:"Documentation/ChangeLog/Index.rst";s:4:"a2cd";s:37:"Documentation/Configuration/Index.rst";s:4:"8897";s:38:"Documentation/Images/BackendModule.png";s:4:"cbf2";s:38:"Documentation/Images/ExampleAttack.png";s:4:"ca4a";s:36:"Documentation/Introduction/Index.rst";s:4:"a3bc";s:35:"Documentation/UsersManual/Index.rst";s:4:"8ef2";s:17:"IDS/Converter.php";s:4:"28a5";s:23:"IDS/default_filter.json";s:4:"457f";s:22:"IDS/default_filter.xml";s:4:"ec96";s:13:"IDS/Event.php";s:4:"262a";s:14:"IDS/Filter.php";s:4:"4828";s:12:"IDS/Init.php";s:4:"7619";s:15:"IDS/Monitor.php";s:4:"f595";s:14:"IDS/Report.php";s:4:"d79c";s:15:"IDS/Version.php";s:4:"aca6";s:19:"IDS/Caching/Apc.php";s:4:"c6ba";s:24:"IDS/Caching/Database.php";s:4:"03b9";s:23:"IDS/Caching/Factory.php";s:4:"e271";s:20:"IDS/Caching/File.php";s:4:"b3d6";s:25:"IDS/Caching/Interface.php";s:4:"8ffb";s:25:"IDS/Caching/Memcached.php";s:4:"ac92";s:23:"IDS/Caching/Session.php";s:4:"bcc7";s:25:"IDS/Config/Config.ini.php";s:4:"b0d0";s:22:"IDS/Filter/Storage.php";s:4:"92bb";s:21:"IDS/Log/Composite.php";s:4:"3c88";s:20:"IDS/Log/Database.php";s:4:"837d";s:17:"IDS/Log/Email.php";s:4:"fbee";s:16:"IDS/Log/File.php";s:4:"3d56";s:21:"IDS/Log/Interface.php";s:4:"f1f9";s:28:"IDS/tmp/default_filter.cache";s:4:"786b";s:22:"IDS/tmp/phpids_log.txt";s:4:"7e67";s:61:"IDS/tmp/PHPIDS_Log_Email_150b377b27c1dcd62b583563e38e6d96.tmp";s:4:"5595";s:61:"IDS/tmp/PHPIDS_Log_Email_59992c512e26a29d98ca3a0bb9a2e1dc.tmp";s:4:"c35f";s:61:"IDS/tmp/PHPIDS_Log_Email_777a33cb84638a993ad111465ed6582c.tmp";s:4:"396b";s:61:"IDS/tmp/PHPIDS_Log_Email_f528764d624db129b32c21fbca0cb8d6.tmp";s:4:"9dd6";s:46:"IDS/vendors/htmlpurifier/HTMLPurifier.auto.php";s:4:"0f6d";s:50:"IDS/vendors/htmlpurifier/HTMLPurifier.autoload.php";s:4:"4b47";s:46:"IDS/vendors/htmlpurifier/HTMLPurifier.func.php";s:4:"f095";s:50:"IDS/vendors/htmlpurifier/HTMLPurifier.includes.php";s:4:"3fc5";s:46:"IDS/vendors/htmlpurifier/HTMLPurifier.kses.php";s:4:"2504";s:46:"IDS/vendors/htmlpurifier/HTMLPurifier.path.php";s:4:"5a6e";s:41:"IDS/vendors/htmlpurifier/HTMLPurifier.php";s:4:"535b";s:55:"IDS/vendors/htmlpurifier/HTMLPurifier.safe-includes.php";s:4:"1607";s:57:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrCollections.php";s:4:"5b10";s:49:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef.php";s:4:"b510";s:55:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrTransform.php";s:4:"1887";s:51:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrTypes.php";s:4:"b1ba";s:55:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrValidator.php";s:4:"53ae";s:51:"IDS/vendors/htmlpurifier/HTMLPurifier/Bootstrap.php";s:4:"26ce";s:50:"IDS/vendors/htmlpurifier/HTMLPurifier/ChildDef.php";s:4:"281e";s:48:"IDS/vendors/htmlpurifier/HTMLPurifier/Config.php";s:4:"e0d5";s:51:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigDef.php";s:4:"2c13";s:54:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema.php";s:4:"09c3";s:53:"IDS/vendors/htmlpurifier/HTMLPurifier/ContentSets.php";s:4:"1bd2";s:49:"IDS/vendors/htmlpurifier/HTMLPurifier/Context.php";s:4:"c1ed";s:55:"IDS/vendors/htmlpurifier/HTMLPurifier/CSSDefinition.php";s:4:"91dd";s:52:"IDS/vendors/htmlpurifier/HTMLPurifier/Definition.php";s:4:"fc6c";s:57:"IDS/vendors/htmlpurifier/HTMLPurifier/DefinitionCache.php";s:4:"db24";s:64:"IDS/vendors/htmlpurifier/HTMLPurifier/DefinitionCacheFactory.php";s:4:"1df8";s:49:"IDS/vendors/htmlpurifier/HTMLPurifier/Doctype.php";s:4:"512f";s:57:"IDS/vendors/htmlpurifier/HTMLPurifier/DoctypeRegistry.php";s:4:"0ab0";s:52:"IDS/vendors/htmlpurifier/HTMLPurifier/ElementDef.php";s:4:"ef70";s:49:"IDS/vendors/htmlpurifier/HTMLPurifier/Encoder.php";s:4:"fc3f";s:54:"IDS/vendors/htmlpurifier/HTMLPurifier/EntityLookup.php";s:4:"1ebc";s:54:"IDS/vendors/htmlpurifier/HTMLPurifier/EntityParser.php";s:4:"85a2";s:56:"IDS/vendors/htmlpurifier/HTMLPurifier/ErrorCollector.php";s:4:"5aee";s:53:"IDS/vendors/htmlpurifier/HTMLPurifier/ErrorStruct.php";s:4:"3cc9";s:51:"IDS/vendors/htmlpurifier/HTMLPurifier/Exception.php";s:4:"6549";s:48:"IDS/vendors/htmlpurifier/HTMLPurifier/Filter.php";s:4:"3318";s:51:"IDS/vendors/htmlpurifier/HTMLPurifier/Generator.php";s:4:"8213";s:56:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLDefinition.php";s:4:"15ac";s:52:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule.php";s:4:"9cbb";s:59:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModuleManager.php";s:4:"24ef";s:55:"IDS/vendors/htmlpurifier/HTMLPurifier/IDAccumulator.php";s:4:"41e2";s:50:"IDS/vendors/htmlpurifier/HTMLPurifier/Injector.php";s:4:"9f1d";s:50:"IDS/vendors/htmlpurifier/HTMLPurifier/Language.php";s:4:"34c9";s:57:"IDS/vendors/htmlpurifier/HTMLPurifier/LanguageFactory.php";s:4:"58a2";s:48:"IDS/vendors/htmlpurifier/HTMLPurifier/Length.php";s:4:"3938";s:47:"IDS/vendors/htmlpurifier/HTMLPurifier/Lexer.php";s:4:"0769";s:56:"IDS/vendors/htmlpurifier/HTMLPurifier/PercentEncoder.php";s:4:"4d14";s:49:"IDS/vendors/htmlpurifier/HTMLPurifier/Printer.php";s:4:"530d";s:54:"IDS/vendors/htmlpurifier/HTMLPurifier/PropertyList.php";s:4:"319d";s:62:"IDS/vendors/htmlpurifier/HTMLPurifier/PropertyListIterator.php";s:4:"d17e";s:50:"IDS/vendors/htmlpurifier/HTMLPurifier/Strategy.php";s:4:"0582";s:52:"IDS/vendors/htmlpurifier/HTMLPurifier/StringHash.php";s:4:"934c";s:58:"IDS/vendors/htmlpurifier/HTMLPurifier/StringHashParser.php";s:4:"d204";s:54:"IDS/vendors/htmlpurifier/HTMLPurifier/TagTransform.php";s:4:"3516";s:47:"IDS/vendors/htmlpurifier/HTMLPurifier/Token.php";s:4:"cebd";s:54:"IDS/vendors/htmlpurifier/HTMLPurifier/TokenFactory.php";s:4:"ed32";s:55:"IDS/vendors/htmlpurifier/HTMLPurifier/UnitConverter.php";s:4:"9dcd";s:45:"IDS/vendors/htmlpurifier/HTMLPurifier/URI.php";s:4:"6ce6";s:55:"IDS/vendors/htmlpurifier/HTMLPurifier/URIDefinition.php";s:4:"5499";s:51:"IDS/vendors/htmlpurifier/HTMLPurifier/URIFilter.php";s:4:"6211";s:51:"IDS/vendors/htmlpurifier/HTMLPurifier/URIParser.php";s:4:"d52d";s:51:"IDS/vendors/htmlpurifier/HTMLPurifier/URIScheme.php";s:4:"49ca";s:59:"IDS/vendors/htmlpurifier/HTMLPurifier/URISchemeRegistry.php";s:4:"dbcd";s:51:"IDS/vendors/htmlpurifier/HTMLPurifier/VarParser.php";s:4:"6295";s:60:"IDS/vendors/htmlpurifier/HTMLPurifier/VarParserException.php";s:4:"8b18";s:53:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/CSS.php";s:4:"6caf";s:54:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/Enum.php";s:4:"1a11";s:57:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/Integer.php";s:4:"f57b";s:54:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/Lang.php";s:4:"04a7";s:56:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/Switch.php";s:4:"8fcf";s:54:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/Text.php";s:4:"0ad9";s:53:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/URI.php";s:4:"05af";s:64:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/CSS/AlphaValue.php";s:4:"f023";s:64:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/CSS/Background.php";s:4:"8a16";s:72:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/CSS/BackgroundPosition.php";s:4:"f2f4";s:60:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/CSS/Border.php";s:4:"0301";s:59:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/CSS/Color.php";s:4:"4bd2";s:63:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/CSS/Composite.php";s:4:"ac75";s:74:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/CSS/DenyElementDecorator.php";s:4:"a112";s:60:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/CSS/Filter.php";s:4:"54e4";s:58:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/CSS/Font.php";s:4:"c14c";s:64:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/CSS/FontFamily.php";s:4:"5d79";s:72:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/CSS/ImportantDecorator.php";s:4:"9a9a";s:60:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/CSS/Length.php";s:4:"6774";s:63:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/CSS/ListStyle.php";s:4:"3d88";s:62:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/CSS/Multiple.php";s:4:"2c45";s:60:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/CSS/Number.php";s:4:"0f1f";s:64:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/CSS/Percentage.php";s:4:"10af";s:68:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/CSS/TextDecoration.php";s:4:"54f6";s:57:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/CSS/URI.php";s:4:"5500";s:59:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/HTML/Bool.php";s:4:"c579";s:60:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/HTML/Class.php";s:4:"fa31";s:60:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/HTML/Color.php";s:4:"ed69";s:66:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/HTML/FrameTarget.php";s:4:"9602";s:57:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/HTML/ID.php";s:4:"bd36";s:61:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/HTML/Length.php";s:4:"a389";s:64:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/HTML/LinkTypes.php";s:4:"ed11";s:66:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/HTML/MultiLength.php";s:4:"1224";s:63:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/HTML/Nmtokens.php";s:4:"8fac";s:61:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/HTML/Pixels.php";s:4:"9596";s:59:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/URI/Email.php";s:4:"958e";s:58:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/URI/Host.php";s:4:"49fd";s:58:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/URI/IPv4.php";s:4:"da52";s:58:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/URI/IPv6.php";s:4:"4400";s:71:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrDef/URI/Email/SimpleCheck.php";s:4:"cebe";s:66:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrTransform/Background.php";s:4:"1dec";s:62:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrTransform/BdoDir.php";s:4:"3e6a";s:63:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrTransform/BgColor.php";s:4:"ec7f";s:65:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrTransform/BoolToCSS.php";s:4:"b7d7";s:62:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrTransform/Border.php";s:4:"faca";s:65:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrTransform/EnumToCSS.php";s:4:"f1f2";s:67:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrTransform/ImgRequired.php";s:4:"7d03";s:64:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrTransform/ImgSpace.php";s:4:"1071";s:61:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrTransform/Input.php";s:4:"a0ee";s:60:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrTransform/Lang.php";s:4:"17dd";s:62:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrTransform/Length.php";s:4:"0c9b";s:60:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrTransform/Name.php";s:4:"5630";s:64:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrTransform/NameSync.php";s:4:"03c2";s:64:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrTransform/Nofollow.php";s:4:"3013";s:65:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrTransform/SafeEmbed.php";s:4:"c981";s:66:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrTransform/SafeObject.php";s:4:"6575";s:65:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrTransform/SafeParam.php";s:4:"4a8d";s:70:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrTransform/ScriptRequired.php";s:4:"aeeb";s:64:"IDS/vendors/htmlpurifier/HTMLPurifier/AttrTransform/Textarea.php";s:4:"45c4";s:60:"IDS/vendors/htmlpurifier/HTMLPurifier/ChildDef/Chameleon.php";s:4:"3c55";s:57:"IDS/vendors/htmlpurifier/HTMLPurifier/ChildDef/Custom.php";s:4:"13c4";s:56:"IDS/vendors/htmlpurifier/HTMLPurifier/ChildDef/Empty.php";s:4:"22f2";s:59:"IDS/vendors/htmlpurifier/HTMLPurifier/ChildDef/Optional.php";s:4:"6b32";s:59:"IDS/vendors/htmlpurifier/HTMLPurifier/ChildDef/Required.php";s:4:"682f";s:67:"IDS/vendors/htmlpurifier/HTMLPurifier/ChildDef/StrictBlockquote.php";s:4:"538d";s:56:"IDS/vendors/htmlpurifier/HTMLPurifier/ChildDef/Table.php";s:4:"98c3";s:61:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigDef/Directive.php";s:4:"3412";s:66:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigDef/DirectiveAlias.php";s:4:"5d6d";s:61:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigDef/Namespace.php";s:4:"5b8c";s:64:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/Exception.php";s:4:"31bf";s:66:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/Interchange.php";s:4:"16ec";s:73:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/InterchangeBuilder.php";s:4:"2da4";s:61:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema.ser";s:4:"4b91";s:64:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/Validator.php";s:4:"d932";s:68:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/ValidatorAtom.php";s:4:"9a57";s:75:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/Builder/ConfigSchema.php";s:4:"a9d7";s:66:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/Builder/Xml.php";s:4:"2f3e";s:76:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/Interchange/Directive.php";s:4:"3b11";s:69:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/Interchange/Id.php";s:4:"b67c";s:76:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/Interchange/Namespace.php";s:4:"67a0";s:81:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Attr.AllowedClasses.txt";s:4:"c7e8";s:86:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Attr.AllowedFrameTargets.txt";s:4:"a2a1";s:77:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Attr.AllowedRel.txt";s:4:"e757";s:77:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Attr.AllowedRev.txt";s:4:"cf02";s:80:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Attr.ClassUseCDATA.txt";s:4:"417a";s:82:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Attr.DefaultImageAlt.txt";s:4:"35d9";s:86:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Attr.DefaultInvalidImage.txt";s:4:"f8d1";s:89:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Attr.DefaultInvalidImageAlt.txt";s:4:"a5d0";s:81:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Attr.DefaultTextDir.txt";s:4:"d0bb";s:75:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Attr.EnableID.txt";s:4:"b08d";s:83:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Attr.ForbiddenClasses.txt";s:4:"d96a";s:78:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Attr.IDBlacklist.txt";s:4:"97dd";s:84:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Attr.IDBlacklistRegexp.txt";s:4:"376c";s:75:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Attr.IDPrefix.txt";s:4:"41dd";s:80:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Attr.IDPrefixLocal.txt";s:4:"1b26";s:66:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Attr.txt";s:4:"eb70";s:86:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/AutoFormat.AutoParagraph.txt";s:4:"6271";s:79:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/AutoFormat.Custom.txt";s:4:"12dd";s:87:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/AutoFormat.DisplayLinkURI.txt";s:4:"bea8";s:80:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/AutoFormat.Linkify.txt";s:4:"21ae";s:95:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/AutoFormat.PurifierLinkify.DocURL.txt";s:4:"d5f5";s:88:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/AutoFormat.PurifierLinkify.txt";s:4:"2838";s:106:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/AutoFormat.RemoveEmpty.RemoveNbsp.Exceptions.txt";s:4:"e535";s:95:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/AutoFormat.RemoveEmpty.RemoveNbsp.txt";s:4:"a8a2";s:84:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/AutoFormat.RemoveEmpty.txt";s:4:"3d25";s:101:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/AutoFormat.RemoveSpansWithoutAttributes.txt";s:4:"9c4e";s:72:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/AutoFormat.txt";s:4:"0346";s:99:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/AutoFormatParam.PurifierLinkifyDocURL.txt";s:4:"f385";s:77:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/AutoFormatParam.txt";s:4:"c273";s:82:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Cache.DefinitionImpl.txt";s:4:"ab8b";s:82:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Cache.SerializerPath.txt";s:4:"6ec3";s:89:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Cache.SerializerPermissions.txt";s:4:"4dd6";s:67:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Cache.txt";s:4:"dfe1";s:84:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Core.AggressivelyFixLt.txt";s:4:"abfa";s:80:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Core.CollectErrors.txt";s:4:"8abd";s:80:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Core.ColorKeywords.txt";s:4:"89a3";s:92:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Core.ConvertDocumentToFragment.txt";s:4:"f9a2";s:98:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Core.DirectLexLineNumberSyncInterval.txt";s:4:"10b0";s:75:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Core.Encoding.txt";s:4:"438f";s:88:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Core.EscapeInvalidChildren.txt";s:4:"27a3";s:84:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Core.EscapeInvalidTags.txt";s:4:"e9f1";s:91:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Core.EscapeNonASCIICharacters.txt";s:4:"c79d";s:81:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Core.HiddenElements.txt";s:4:"f6e0";s:75:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Core.Language.txt";s:4:"7d76";s:76:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Core.LexerImpl.txt";s:4:"6c67";s:86:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Core.MaintainLineNumbers.txt";s:4:"b199";s:84:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Core.NormalizeNewlines.txt";s:4:"e381";s:83:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Core.RemoveInvalidImg.txt";s:4:"6d9e";s:95:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Core.RemoveProcessingInstructions.txt";s:4:"c312";s:87:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Core.RemoveScriptContents.txt";s:4:"eb24";s:66:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Core.txt";s:4:"e27f";s:78:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/CSS.AllowedFonts.txt";s:4:"5f83";s:83:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/CSS.AllowedProperties.txt";s:4:"5766";s:80:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/CSS.AllowImportant.txt";s:4:"4cdc";s:77:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/CSS.AllowTricky.txt";s:4:"a610";s:79:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/CSS.DefinitionRev.txt";s:4:"1c27";s:85:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/CSS.ForbiddenProperties.txt";s:4:"5eb8";s:78:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/CSS.MaxImgLength.txt";s:4:"6363";s:77:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/CSS.Proprietary.txt";s:4:"973b";s:73:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/CSS.Trusted.txt";s:4:"a5ba";s:65:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/CSS.txt";s:4:"07d9";s:75:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Filter.Custom.txt";s:4:"e39e";s:96:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Filter.ExtractStyleBlocks.Escaping.txt";s:4:"6e09";s:93:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Filter.ExtractStyleBlocks.Scope.txt";s:4:"9df7";s:96:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Filter.ExtractStyleBlocks.TidyImpl.txt";s:4:"afff";s:87:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Filter.ExtractStyleBlocks.txt";s:4:"962d";s:68:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Filter.txt";s:4:"74ff";s:76:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Filter.YouTube.txt";s:4:"b861";s:100:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/FilterParam.ExtractStyleBlocksEscaping.txt";s:4:"0033";s:97:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/FilterParam.ExtractStyleBlocksScope.txt";s:4:"278c";s:100:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/FilterParam.ExtractStyleBlocksTidyImpl.txt";s:4:"be32";s:73:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/FilterParam.txt";s:4:"2a0f";s:74:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.Allowed.txt";s:4:"0ff4";s:84:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.AllowedAttributes.txt";s:4:"7462";s:82:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.AllowedElements.txt";s:4:"5d57";s:81:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.AllowedModules.txt";s:4:"8bfa";s:85:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.Attr.Name.UseCDATA.txt";s:4:"0f39";s:79:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.BlockWrapper.txt";s:4:"f7d9";s:78:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.CoreModules.txt";s:4:"27a1";s:80:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.CustomDoctype.txt";s:4:"9a9c";s:79:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.DefinitionID.txt";s:4:"1797";s:80:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.DefinitionRev.txt";s:4:"4236";s:74:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.Doctype.txt";s:4:"239a";s:87:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.FlashAllowFullScreen.txt";s:4:"2334";s:86:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.ForbiddenAttributes.txt";s:4:"44bc";s:84:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.ForbiddenElements.txt";s:4:"aaa9";s:79:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.MaxImgLength.txt";s:4:"bf71";s:75:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.Nofollow.txt";s:4:"aef7";s:73:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.Parent.txt";s:4:"8270";s:78:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.Proprietary.txt";s:4:"0f3e";s:76:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.SafeEmbed.txt";s:4:"21d3";s:77:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.SafeObject.txt";s:4:"f9cf";s:73:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.Strict.txt";s:4:"2627";s:74:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.TidyAdd.txt";s:4:"98c2";s:76:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.TidyLevel.txt";s:4:"602b";s:77:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.TidyRemove.txt";s:4:"580f";s:74:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.Trusted.txt";s:4:"67b1";s:66:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.txt";s:4:"4824";s:72:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/HTML.XHTML.txt";s:4:"bdd5";s:66:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/info.ini";s:4:"d885";s:90:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Output.CommentScriptContents.txt";s:4:"703a";s:81:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Output.FixInnerHTML.txt";s:4:"59ca";s:80:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Output.FlashCompat.txt";s:4:"323d";s:76:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Output.Newline.txt";s:4:"2060";s:77:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Output.SortAttr.txt";s:4:"782d";s:79:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Output.TidyFormat.txt";s:4:"1812";s:68:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Output.txt";s:4:"6734";s:79:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Test.ForceNoIconv.txt";s:4:"db04";s:66:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/Test.txt";s:4:"fdc8";s:80:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/URI.AllowedSchemes.txt";s:4:"5a22";s:70:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/URI.Base.txt";s:4:"91a4";s:79:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/URI.DefaultScheme.txt";s:4:"3e8b";s:78:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/URI.DefinitionID.txt";s:4:"6ae2";s:79:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/URI.DefinitionRev.txt";s:4:"19c2";s:73:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/URI.Disable.txt";s:4:"bdac";s:81:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/URI.DisableExternal.txt";s:4:"379b";s:90:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/URI.DisableExternalResources.txt";s:4:"ec8e";s:82:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/URI.DisableResources.txt";s:4:"51d2";s:70:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/URI.Host.txt";s:4:"e986";s:79:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/URI.HostBlacklist.txt";s:4:"1c3c";s:78:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/URI.MakeAbsolute.txt";s:4:"b59e";s:71:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/URI.Munge.txt";s:4:"63a8";s:80:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/URI.MungeResources.txt";s:4:"35af";s:80:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/URI.MungeSecretKey.txt";s:4:"0b46";s:88:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/URI.OverrideAllowedSchemes.txt";s:4:"5f3d";s:65:"IDS/vendors/htmlpurifier/HTMLPurifier/ConfigSchema/schema/URI.txt";s:4:"f7e5";s:67:"IDS/vendors/htmlpurifier/HTMLPurifier/DefinitionCache/Decorator.php";s:4:"f185";s:62:"IDS/vendors/htmlpurifier/HTMLPurifier/DefinitionCache/Null.php";s:4:"e27d";s:68:"IDS/vendors/htmlpurifier/HTMLPurifier/DefinitionCache/Serializer.php";s:4:"8d94";s:75:"IDS/vendors/htmlpurifier/HTMLPurifier/DefinitionCache/Decorator/Cleanup.php";s:4:"31e3";s:74:"IDS/vendors/htmlpurifier/HTMLPurifier/DefinitionCache/Decorator/Memory.php";s:4:"8acd";s:79:"IDS/vendors/htmlpurifier/HTMLPurifier/DefinitionCache/Decorator/Template.php.in";s:4:"9e8b";s:71:"IDS/vendors/htmlpurifier/HTMLPurifier/DefinitionCache/Serializer/README";s:4:"1e94";s:113:"IDS/vendors/htmlpurifier/HTMLPurifier/DefinitionCache/Serializer/CSS/4.1.0,801ad73acbcf9d3127e1d01768d26453,1.ser";s:4:"2293";s:114:"IDS/vendors/htmlpurifier/HTMLPurifier/DefinitionCache/Serializer/HTML/4.1.0,ddc9b993d7fc8d4a185e8dbf5b9a0996,1.ser";s:4:"1474";s:113:"IDS/vendors/htmlpurifier/HTMLPurifier/DefinitionCache/Serializer/URI/4.0.0,05c766101e813c246917b022f97b5e6e,1.ser";s:4:"16d8";s:63:"IDS/vendors/htmlpurifier/HTMLPurifier/EntityLookup/entities.ser";s:4:"0eff";s:67:"IDS/vendors/htmlpurifier/HTMLPurifier/Filter/ExtractStyleBlocks.php";s:4:"7392";s:56:"IDS/vendors/htmlpurifier/HTMLPurifier/Filter/YouTube.php";s:4:"9232";s:56:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/Bdo.php";s:4:"e129";s:69:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/CommonAttributes.php";s:4:"381c";s:57:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/Edit.php";s:4:"5475";s:58:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/Forms.php";s:4:"7315";s:62:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/Hypertext.php";s:4:"bb47";s:58:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/Image.php";s:4:"911d";s:59:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/Legacy.php";s:4:"e36d";s:57:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/List.php";s:4:"2730";s:57:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/Name.php";s:4:"9765";s:61:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/Nofollow.php";s:4:"de95";s:75:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/NonXMLCommonAttributes.php";s:4:"24b1";s:59:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/Object.php";s:4:"a7cc";s:65:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/Presentation.php";s:4:"e503";s:64:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/Proprietary.php";s:4:"aae0";s:57:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/Ruby.php";s:4:"c87f";s:62:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/SafeEmbed.php";s:4:"162a";s:63:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/SafeObject.php";s:4:"fe74";s:62:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/Scripting.php";s:4:"074b";s:67:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/StyleAttribute.php";s:4:"4770";s:59:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/Tables.php";s:4:"7d6e";s:59:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/Target.php";s:4:"ad4c";s:57:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/Text.php";s:4:"65b5";s:57:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/Tidy.php";s:4:"4837";s:72:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/XMLCommonAttributes.php";s:4:"4927";s:62:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/Tidy/Name.php";s:4:"f6be";s:69:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/Tidy/Proprietary.php";s:4:"9c41";s:64:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/Tidy/Strict.php";s:4:"5215";s:70:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/Tidy/Transitional.php";s:4:"a00c";s:63:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/Tidy/XHTML.php";s:4:"7f51";s:71:"IDS/vendors/htmlpurifier/HTMLPurifier/HTMLModule/Tidy/XHTMLAndHTML4.php";s:4:"cbdf";s:64:"IDS/vendors/htmlpurifier/HTMLPurifier/Injector/AutoParagraph.php";s:4:"8e0e";s:65:"IDS/vendors/htmlpurifier/HTMLPurifier/Injector/DisplayLinkURI.php";s:4:"e0ba";s:58:"IDS/vendors/htmlpurifier/HTMLPurifier/Injector/Linkify.php";s:4:"a205";s:66:"IDS/vendors/htmlpurifier/HTMLPurifier/Injector/PurifierLinkify.php";s:4:"dbfe";s:62:"IDS/vendors/htmlpurifier/HTMLPurifier/Injector/RemoveEmpty.php";s:4:"f621";s:79:"IDS/vendors/htmlpurifier/HTMLPurifier/Injector/RemoveSpansWithoutAttributes.php";s:4:"29da";s:61:"IDS/vendors/htmlpurifier/HTMLPurifier/Injector/SafeObject.php";s:4:"f341";s:68:"IDS/vendors/htmlpurifier/HTMLPurifier/Language/classes/en-x-test.php";s:4:"f645";s:69:"IDS/vendors/htmlpurifier/HTMLPurifier/Language/messages/en-x-test.php";s:4:"c1ea";s:73:"IDS/vendors/htmlpurifier/HTMLPurifier/Language/messages/en-x-testmini.php";s:4:"146f";s:62:"IDS/vendors/htmlpurifier/HTMLPurifier/Language/messages/en.php";s:4:"b9df";s:57:"IDS/vendors/htmlpurifier/HTMLPurifier/Lexer/DirectLex.php";s:4:"a293";s:54:"IDS/vendors/htmlpurifier/HTMLPurifier/Lexer/DOMLex.php";s:4:"6fab";s:56:"IDS/vendors/htmlpurifier/HTMLPurifier/Lexer/PEARSax3.php";s:4:"9522";s:52:"IDS/vendors/htmlpurifier/HTMLPurifier/Lexer/PH5P.php";s:4:"fe01";s:60:"IDS/vendors/htmlpurifier/HTMLPurifier/Printer/ConfigForm.css";s:4:"c02f";s:59:"IDS/vendors/htmlpurifier/HTMLPurifier/Printer/ConfigForm.js";s:4:"ee59";s:60:"IDS/vendors/htmlpurifier/HTMLPurifier/Printer/ConfigForm.php";s:4:"512c";s:63:"IDS/vendors/htmlpurifier/HTMLPurifier/Printer/CSSDefinition.php";s:4:"d1d0";s:64:"IDS/vendors/htmlpurifier/HTMLPurifier/Printer/HTMLDefinition.php";s:4:"a46e";s:60:"IDS/vendors/htmlpurifier/HTMLPurifier/Strategy/Composite.php";s:4:"55d2";s:55:"IDS/vendors/htmlpurifier/HTMLPurifier/Strategy/Core.php";s:4:"0324";s:61:"IDS/vendors/htmlpurifier/HTMLPurifier/Strategy/FixNesting.php";s:4:"4827";s:65:"IDS/vendors/htmlpurifier/HTMLPurifier/Strategy/MakeWellFormed.php";s:4:"a700";s:72:"IDS/vendors/htmlpurifier/HTMLPurifier/Strategy/RemoveForeignElements.php";s:4:"6c6d";s:69:"IDS/vendors/htmlpurifier/HTMLPurifier/Strategy/ValidateAttributes.php";s:4:"3e08";s:59:"IDS/vendors/htmlpurifier/HTMLPurifier/TagTransform/Font.php";s:4:"89de";s:61:"IDS/vendors/htmlpurifier/HTMLPurifier/TagTransform/Simple.php";s:4:"5e45";s:55:"IDS/vendors/htmlpurifier/HTMLPurifier/Token/Comment.php";s:4:"0a93";s:53:"IDS/vendors/htmlpurifier/HTMLPurifier/Token/Empty.php";s:4:"b380";s:51:"IDS/vendors/htmlpurifier/HTMLPurifier/Token/End.php";s:4:"6dc6";s:53:"IDS/vendors/htmlpurifier/HTMLPurifier/Token/Start.php";s:4:"abb8";s:51:"IDS/vendors/htmlpurifier/HTMLPurifier/Token/Tag.php";s:4:"3399";s:52:"IDS/vendors/htmlpurifier/HTMLPurifier/Token/Text.php";s:4:"a1ee";s:67:"IDS/vendors/htmlpurifier/HTMLPurifier/URIFilter/DisableExternal.php";s:4:"9df1";s:76:"IDS/vendors/htmlpurifier/HTMLPurifier/URIFilter/DisableExternalResources.php";s:4:"f75e";s:68:"IDS/vendors/htmlpurifier/HTMLPurifier/URIFilter/DisableResources.php";s:4:"d00b";s:65:"IDS/vendors/htmlpurifier/HTMLPurifier/URIFilter/HostBlacklist.php";s:4:"a520";s:64:"IDS/vendors/htmlpurifier/HTMLPurifier/URIFilter/MakeAbsolute.php";s:4:"f60d";s:57:"IDS/vendors/htmlpurifier/HTMLPurifier/URIFilter/Munge.php";s:4:"af92";s:56:"IDS/vendors/htmlpurifier/HTMLPurifier/URIScheme/data.php";s:4:"5095";s:56:"IDS/vendors/htmlpurifier/HTMLPurifier/URIScheme/file.php";s:4:"ca48";s:55:"IDS/vendors/htmlpurifier/HTMLPurifier/URIScheme/ftp.php";s:4:"a34f";s:56:"IDS/vendors/htmlpurifier/HTMLPurifier/URIScheme/http.php";s:4:"2e2c";s:57:"IDS/vendors/htmlpurifier/HTMLPurifier/URIScheme/https.php";s:4:"add8";s:58:"IDS/vendors/htmlpurifier/HTMLPurifier/URIScheme/mailto.php";s:4:"6f80";s:56:"IDS/vendors/htmlpurifier/HTMLPurifier/URIScheme/news.php";s:4:"c32c";s:56:"IDS/vendors/htmlpurifier/HTMLPurifier/URIScheme/nntp.php";s:4:"3580";s:60:"IDS/vendors/htmlpurifier/HTMLPurifier/VarParser/Flexible.php";s:4:"9ba5";s:58:"IDS/vendors/htmlpurifier/HTMLPurifier/VarParser/Native.php";s:4:"faa9";s:29:"cli/class.tx_mkphpids_cli.php";s:4:"2bb5";s:14:"mod1/clear.gif";s:4:"cc11";s:13:"mod1/conf.php";s:4:"8fc7";s:14:"mod1/index.php";s:4:"3947";s:18:"mod1/locallang.xml";s:4:"a3c2";s:22:"mod1/locallang_mod.xml";s:4:"54fc";s:19:"mod1/moduleicon.gif";s:4:"8408";s:29:"pi1/class.tx_mkphpids_pi1.php";s:4:"149a";}',
    'suggests' => array(),
);
