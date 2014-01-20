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
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_page']['palettes']['regular'] = str_replace('description', 'pageHeadline,description', $GLOBALS['TL_DCA']['tl_page']['palettes']['regular']);

/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_page']['fields']['pageHeadline'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_page']['pageHeadline'],
	'inputType'		=> 'text',
	'eval'			=> array('maxlenght'=>255, 'allowHtml'=>true, 'tl_class'=>'clr long'),
);
