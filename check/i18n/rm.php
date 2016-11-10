<?php

/*
 * Contao check
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @license LGPL-3.0+
 */

return array(
	'Composer package manager' => 'Administratur da pachets Composer',
	'PHP %s or greater' => 'PHP %s u pli aut',
	'You have PHP version %s.' => 'Ti has la versiun %s da PHP.',
	'Composer requires at least PHP version %s.' => 'Composer basegna almain la versiun da PHP %s.',
	'PHP Phar extension' => 'Extensiun Phar da PHP',
	'The PHP Phar extension is enabled.' => 'L\'extensiun Phar da PHP è activada.',
	'The PHP Phar extension is not enabled.' => 'L\'extensiun Phar da PHP n\'è betg activada.',
	'The PHP Phar extension is part of the PHP core since PHP 5.3 and has to be explicitly disabled using the --disable-phar flag. Recompile PHP without the flag.' => 'L\'extensiun Phar da PHP fa part dal core da PHP davent da PHP 5.3 e sto vegnir deactivà explicitamain cun utilisar il flag --disable-phar. Recompliescha PHP senza quest flag.',
	'PHP cURL extension' => 'Extensiun cURL da PHP',
	'The PHP cURL extension is available.' => 'L\'extensiun cURL da PHP è disponibla.',
	'The PHP cURL extension is not available.' => 'L\'extensiun cURL da PHP n\'è betg disponibla.',
	'The PHP cURL extension is required to communicate with the package server. You can enable it by compiling PHP with the --enable-curl flag.' => 'L\'extensiun cURL da PHP è necessaria da communitgar cun il server da pachets. Ti pos activar ella entras compilar PHP cun il flag --enable-curl.',
	'PHP APC extension' => 'Extensiun APC da PHP',
	'The PHP APC extension is not installed.' => 'L\'extensiun APC da PHP n\'è betg installada.',
	'The PHP APC extension is installed.' => 'L\'extensiun APC da PHP è installada.',
	'Using the PHP APC extension with Composer can lead to unexpected "cannot redeclare class" errors.' => 'Utilisar l\'extensiun APC da PHP ensemen cun Composer po manar ad errurs dal tip "cannot redeclare class".',
	'Suhosin extension' => 'Extensiun Suhosin',
	'The Suhosin extension is not installed or correctly configured for .phar files.' => 'L\'extensiun Suhosin n\'è betg installada u configurada correctamain per datotecas .phar.',
	'The Suhosin extension does not allow to run .phar files.' => 'L\'extensiun Suhosin na lubescha betg l\'exequziun da datotecas .phar.',
	'You have to add "phar" to the list of allowed streams in your php.ini: <code>suhosin.executor.include.whitelist = phar</code>' => 'Ti stos agiuntar "phar" a la glista dals streams lubids en tia php.ini: <code>suhosin.executor.include.whitelist = phar</code>',
	'allow_url_fopen' => 'allow_url_fopen',
	'The PHP flag "allow_url_fopen" is set.' => 'Il flag da PHP "allow_url_fopen" è definì.',
	'The PHP flag "allow_url_fopen" is not set.' => 'Il flag da PHP "allow_url_fopen" n\'è betg definì.',
	'To download the installation files, Composer requires the "allow_url_fopen" flag to be set in the php.ini.' => 'Per telechargiar las datotecas d\'installaziun basegna Composer ch\'il flag "allow_url_fopen" è definì en la php.ini.',
	'File permissions' => 'Autorisaziuns da datotecas',
	'The "posix_getpwuid" function is not available.' => 'The "posix_getpwuid" function is not available.',
	'File permissions cannot be tested, because the <code>posix_getpwuid</code> function has been disabled. Please contact your server administrator.' => 'File permissions cannot be tested, because the <code>posix_getpwuid</code> function has been disabled. Please contact your server administrator.',
	'The PHP process is allowed to create files.' => 'Il process da PHP è autorisà da crear datotecas.',
	'The PHP process is not allowed to create files.' => 'Il process da PHP n\'è betg autorisà da crear datotecas.',
	'The PHP process is not allowed to create or manipulate files. Please adjust your server configuration accordingly.' => 'Il process da PHP n\'è betg autorisà da crear u manipular datotecas. Mida quai p. pl. en la configuraziun dal server.',
	'shell_exec (optional)' => 'shell_exec (opziunal)',
	'The PHP function "shell_exec" is available.' => 'La funcziun da PHP "shell_exec" stat a disposiziun.',
	'The PHP function "shell_exec" is not available.' => 'La funcziun da PHP "shell_exec" na stat betg a disposiziun.',
	'The "shell_exec" function is optionally required to run the Composer process in the background.' => 'La funcziun "shell_exec" vegn duvrada opziunalmain per far il il process da Composer en il fund davos.',
	'proc_open (optional)' => 'proc_open (opziunal)',
	'The PHP function "proc_open" is available.' => 'La funcziun da PHP "proc_open" stat a disposiziun.',
	'The PHP function "proc_open" is not available.' => 'La funcziun da PHP "proc_open" na stat betg a disposiziun.',
	'The "proc_open" function is optionally required to run the package manager in dev mode.' => 'La funcziun "proc_open" è necessaria opziunalmain per exequir l\'administraziun da pachets en il modus da sviluppader.',
	'You can use the Composer package manager on this server.' => 'Ti pos utilisar l\'administratur da pachets Composer sin quest server.',
	'You cannot use the Composer package manager on this server.' => 'Ti na pos betg utilisar l\'administratur da pachets Composer sin quest server.',
	'Go back' => 'Turnar',
	'php.ini settings' => 'configuraziun da php.ini',
	'The PHP safe_mode is not enabled.' => 'Il safe_mode da PHP n\'è betg activà.',
	'The PHP safe_mode is enabled.' => 'Il safe_mode da PHP è activà.',
	'It is recommended to disable the safe_mode in your php.ini or server control panel, otherwise the PHP process it not allowed to create or manipulate files and Contao cannot work properly.' => 'Igl è recummandà da deactivar il safe_mode en tia php.ini u en la panela da controlla da tes server. Uschiglio n\'è il process da PHP betg autorisà da crear u manipular datotecas e Contao na funcziunescha betg correctamain.',
	'Creating a test folder' => 'Crear in ordinatur da test',
	'The test folder could be created (owner: %s, chmod: %s).' => 'L\'ordinatur da test ha pudì vengir creà (possessur: %s, chmod: %s).',
	'The test folder could not be created.' => 'L\'ordinatur da test na pudeva betg vegnir creà.',
	'It seems that the PHP process does not have enough permissions to create folders on your server.' => 'I para ch\'il process da PHP n\'ha betg avunda dretgs per crear ordinaturs sin tes server.',
	'The test folder does not have the correct owner or chmod settings.' => 'Las infurmaziuns davart il possessur u chmod da l\'ordinatur da test n\'èn betg correctas.',
	'The test folder is owned by %s (should be %s) and has the chmod settings %s (should be %s).' => 'Il possessur da l\'ordinatur da test è %s (duess esser %s) e ha la configuraziun da chmod %s (duess esser %s).',
	'775, 755, 770, 750 or 705' => '775, 755, 770, 750 u 705',
	'Creating a test file' => 'Crear ina datoteca da test',
	'The test file could be created (owner: %s, chmod: %s).' => 'La datoteca da test è vegnida creada (possessur: %s, chmod: %s).',
	'The test file could not be created.' => 'La dadoteca da test na pudeva betg vegir creada.',
	'It seems that the PHP process does not have enough permissions to create files on your server.' => 'I para che quest process da PHP n\'ha betg avunda dretgs per crear datotecas sin tes server.',
	'The test file does not have the correct owner or chmod settings.' => 'La datoteca da test n\'ha betg il correct possessur u la configuraziun da chmod correcta.',
	'The test file is owned by %s (should be %s) and has the chmod settings %s (should be %s).' => 'La datoteca da test ha il possessur %s (duess esser %s) ed ha la configuraziun da chmod %s (duess esser %s).',
	'664, 644, 660, 640 or 604' => '664, 644, 660, 640 u 604',
	'The PHP process is allowed to create files on this server.' => 'Il process da PHP è autorisà da crear datotecas sin quest server.',
	'The PHP process is not allowed to create files on this server.' => 'Il process da PHP n\'è betg autorisà da crear datotecas sin quest server.',
	'Overview' => 'Survista',
	'You can install Contao 2.x' => 'Ti pos installar Contao 2.x',
	'You cannot install Contao 2.x (requires PHP %s+)' => 'Ti na pos betg installar Contao 2.x (basegna PHP %s+)',
	'You can install Contao 3.x' => 'Ti pos installar Contao 3.x',
	'You cannot install Contao 3.x (requires PHP %s+)' => 'Ti na pos betg installar Contao 3.x (basegna PHP %s+)',
	'You can install Contao 4.x' => 'Ti pos installar Contao 4.x',
	'You cannot install Contao 4.x (requires PHP %s+)' => 'Ti na pos betg installar Contao 4.x (basegnà PHP %s+)',
	'The file permissions cannot be checked.' => 'The file permissions cannot be checked.',
	'More information …' => 'Ulteriuras infurmaziuns…',
	'Additional services' => 'Servetschs supplementars',
	'You can use the Live Update.' => 'Ti pos utilisar l\'actualisaziun directa.',
	'You cannot use the Live Update.' => 'Ti na pos betg utilisar l\'actualisaziun directa.',
	'The Composer package manager requirements cannot be checked.' => 'The Composer package manager requirements cannot be checked.',
	'You can use the Composer package manager.' => 'Ti pos utilisar l\'administraziun da pachets Composer.',
	'You cannot use the Composer package manager.' => 'Ti na pos betg utilisar l\'administraziun da pachets Composer.',
	'You can use the Extension Repository.' => 'Ti pos utilisar il repository d\'extensiuns',
	'You cannot use the Extension Repository.' => 'Ti na pos betg utilisar il repository d\'extensiuns.',
	'Install Contao' => 'Installar Contao',
	'Validate an existing installation' => 'Validar ina installaziun existenta',
	'Installation' => 'Utensil d\'installaziun',
	'Web installer' => 'Program d\'installaziun sur web',
	'There is a Contao installation already. Are you looking for the %s?' => 'I exista gia ina installaziun da Contao. Tschertgas ti %s?',
	'The automatic installation is not possible on your server due to safe_mode or file permission restrictions.' => 'L\'installaziun automatica n\'è betg pussaivla sin tes server pervia dal safe_mode u restricziuns dals dretgs da datotecas.',
	'The automatic installation is possible on your server.' => 'L\'installaziun automatica è pussaivla sin tes server.',
	'The automatic installation is not possible on your server.' => 'L\'installaziun automatica n\'è betg pussaivla sin tes server.',
	'Your PHP installation either cannot connect to download.contao.org or is missing the PHP extension cURL or Zip.' => 'Tia installaziun da PHP n\'è betg abla da connectar a download.contao.org u che las extensiuns cURL u Zip mancan.',
	'Manual installation' => 'Installaziun manuala',
	'Go to %s and download the latest Contao version.' => 'Va sin %s e telechargia l\'ultima versiun da Contao.',
	'Extract the download archive and upload the files to your server using an (S)FTP client.' => 'Extrahescha las datotecas telechargiadas ed las chargia sin tes server cun in program dad (S)FTP.',
	'Open the Contao install tool by adding "/contao/install.php" to the URL of your installation.' => 'Avra l\'utensil d\'installaziun da Contao entras agiuntar "/contao/install.php" a l\'URL da tia installaziun.',
	'Target version' => 'Versiun da destinaziun',
	'Start the installation' => 'Cumenzar l\'installaziun',
	'Installation failed' => 'Errur durant l\'installaziun',
	'Installation complete' => 'Installaziun cumpletta',
	'Contao %s has been installed in %s.' => 'Contao %s è vegnì installà en %s.',
	'Open the Contao install tool' => 'Avrir l\'utensil d\'installaziun da Contao',
	'Live Update' => 'Actualisaziun directa (Live Update)',
	'Phar has been added to the PHP core in version 5.3, so you require at least PHP version %s to use .phar files. If you have PHP 5.2, you might be able to use .phar files by installing the PECL phar extension (see %s).' => 'Phar è vegnì agiuntà al core da PHP en la versiun 5.3, ti dovras pia almain la versiun %s da PHP per utilisar datotecas da .phar. Sche ti has PHP 5.2 es ti forsa abel dad utilisar datotecas .phar entras installar l\'externsiun PECL da phar (guarda %s)',
	'PHP OpenSSL extension' => 'Extensiun OpenSSL da PHP',
	'The PHP OpenSSL extension is enabled.' => 'L\'extensiun OpenSSL da PHP è activada.',
	'The PHP OpenSSL extension is not enabled.' => 'L\'extensiun OpenSSL da PHP n\'è betg activada.',
	'The PHP OpenSSL extension is required to set up a secure connection to the Live Update server. Enable it in your php.ini.' => 'L\'extensiun OpenSSL da PHP è necessaria per stabilir ina connexiun segira cun il server per l\'actualisaziun directa. Activescha quai en tia php.ini.',
	'The ionCube Loader is not enabled or at least at version 4.0.9.' => 'Il ionCube Loader n\'è betg activà u almain a versiun 4.0.9.',
	'An old version of the ionCube Loader prior to version 4.0.9 is installed.' => 'Ina versiun dal ionCube Loader pli veglia che la versiun 4.0.9 è installada.',
	'Before version 4.0.9, the ionCube Loader was incompatible with Phar archives. Either upgrade to the latest version or disable the module. More information is available here: %s' => 'Avant la versiun 4.0.9 era il ionCube Loader incumpatibel cun archivs da Phar. Actualisescha u a la pli nova versiun e deactivescha il modul. Dapli infurmaziuns chattas ti qua: %s',
	'Detect Unicode' => 'Detectar Unicode',
	'The --enable-zend-multibyte flag is not set or detect_unicode is disabled.' => 'Il flag --enable-zend-multibyte n\'è betg definì u detect_unicode è deactivà.',
	'The detect_unicode settings on your server are not correct.' => 'La configuraziun da detect_unicode da tes server n\'è betg correcta.',
	'If PHP is compiled with the --enable-zend-multibyte flag, you have to explicitly disable detect_unicode in your php.ini: <code>detect_unicode = Off</code>. This is a PHP bug which might be fixed in the future. More information is available here: %s' => 'Sche PHP è compilà cun il flag --enable-zend-multibyte stos ti explicitamain deactivar detect_unicode en tia php.ini: <code>detect_unicode = Off</code>. Quai è in sbagl da PHP che pudess vegnir schlià en futur. Ulteriuras infurmaziuns chattas qua: %s',
	'You are not using FastCGI and eAccelerator.' => 'Ti n\'utiliseschas betg FastCGI ed eAccelerator.',
	'You are using FastCGI and eAccelerator.' => 'Ti utiliseschas FastCGI ed eAccelerator.',
	'It seems that FastCGI in combination with the eAccelerator extension is buggy when it comes to Phar archives. You can either disable the eAccelerator extension or use a different PHP cache instead (e.g. FastCGI+APC).' => 'I para che la cumbinaziun da las extensiuns FastCGI ed eAccelerator po chaschunar sbagls en connex cun archivs da phar. Ti pos u deactivar l\'extensiun eAccelerator u utilisar in auter cache da PHP (p. ex. FastCGI+APC).',
	'Connection test' => 'Test da la connexiun',
	'A connection to update.contao.org could be established.' => 'Igl è reussì da connectar ad update.contao.org.',
	'A connection to update.contao.org could not be established.' => 'I n\'è betg reussì da connectar ad update.contao.org.',
	'Maybe the request has been blocked by a firewall. Please contact your server administrator.' => 'Eventualmain è la dumonda vegnida bloccada d\'ina firewall. Contactescha tes administratur dal server.',
	'You can use the Live Update on this server.' => 'Ti pos utilisar l\'actualisaziun directa (Live Update) sin quest server.',
	'You cannot use the Live Update on this server.' => 'Ti na pos betg utilisar l\'actualisaziun directa (Live Update) sin quest server.',
	'Extension Repository' => 'Repository d\'extensiuns',
	'PHP SOAP extension' => 'Extensiun SOAP da PHP',
	'The PHP SOAP extension is available.' => 'L\'extensiun SOAP da PHP è disponibla',
	'The PHP SOAP extension is not available.' => 'L\'extensiun SOAP da PHP n\'è betg disponibla',
	'The PHP SOAP extension is required to communicate with the Extension Repository server. You can enable it by compiling PHP with the --enable-soap flag. Depending on your Contao version, you might also be able to use the %s extension.' => 'L\'extensiun SOAP da PHP è necessari per communitgar cun il server dal repository d\'extensiuns. Ti pos l\'activar entras compilar PHP cun il flag --enable-soap. Dependent da tia versiun da Contao pos ti era esser abel dad utilisar l\'extensiun %s.',
	'A connection to contao.org could be established.' => 'Ina connexiun a contao.org è vegnida stabilida.',
	'A connection to contao.org could not be established.' => 'I na pudeva betg vegnir stabilì ina connexiun a contao.org.',
	'You can use the Extension Repository on this server.' => 'Ti pos utilisar il repository d\'extensiuns sin quest server.',
	'You cannot use the Extension Repository on this server.' => 'Ti na pos betg utilisar il repository d\'extensiuns sin quest server.',
	'Validate an installation' => 'Validar ina installaziun',
	'Could not find a Contao installation.' => 'Impussibel da chattar ina installaziun da Contao.',
	'To validate an existing installation, please upload the "check" folder to your installation directory.' => 'Per validar ina installaziun existento stos ti chargiar l\'ordinatur check en tes ordinatur da l\'installaziun.',
	'Unknown version' => 'Versiun nunenconuschenta',
	'The installed version %s is not (yet) supported.' => 'La versiun installada (%s) na vegn anc betg sustegnida.',
	'There is no version file for your Contao installation. Are you using a stable Contao version and do you have the latest version of the Contao Check?' => 'I n\'exista nagina datoteca da versiun per tia installaziun da Contao. Utiliseschas ti ina versiun stabla da Contao ed has ti l\'ultima versiun dal check da Contao?',
	'Version' => 'Versiun',
	'Found a Contao %s installation.' => 'Chattà ina sintallaziun da Contao %s.',
	'Missing files' => 'Datotecas mancantas',
	'Corrupt files' => 'Datotecas corruptas',
	'Missing optional files' => 'Datotecas opziunalas mancantas',
	'Your installation is up to date.' => 'Tia installaziun è actuala.',
	'Your installation is not up to date.' => 'Tia installaziun n\'è betg actuala.',
);