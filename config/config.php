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
 * Frontend modules
 */
$GLOBALS['FE_MOD']['miscellaneous']['pageheadline'] = 'ModulePageHeadline';

/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['replaceInsertTags'][]			= array('PageHeadline', 'replaceHeadlineTag');
