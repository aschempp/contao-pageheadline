<?php

/**
 * pageheadline Extension for Contao Open Source CMS
 *
 * @copyright  Copyright (c) 2009-2013, terminal42 gmbh
 * @author     terminal42 gmbh <info@terminal42.ch>
 * @license    http://opensource.org/licenses/lgpl-3.0.html LGPL
 * @link       http://github.com/aschempp/contao-pageheadline
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'ModulePageHeadline'   => 'system/modules/pageheadline/ModulePageHeadline.php',
	'PageHeadline'         => 'system/modules/pageheadline/PageHeadline.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mod_pageheadline'     => 'system/modules/pageheadline/templates',
));
