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
$GLOBALS['TL_DCA']['tl_module']['palettes']['pageheadline'] = '{title_legend},name,headline,type;{config_legend},inheritPageHeadline;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';

/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['inheritPageHeadline'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_module']['inheritPageHeadline'],
	'inputType'		=> 'checkbox',
	'eval'			=> array('tl_class'=>'w50'),
);
