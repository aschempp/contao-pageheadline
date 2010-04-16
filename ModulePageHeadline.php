<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Andreas Schempp 2009-2010
 * @author     Andreas Schempp <andreas@schempp.ch>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 * @version    $Id$
 */


class ModulePageHeadline extends Module
{
	protected $strTemplate = 'mod_pageheadline';
	
	
	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$objTemplate = new BackendTemplate('be_wildcard');

			$objTemplate->wildcard = '### PAGE HEADLINE ###';
			$objTemplate->title = $this->headline;
			$objTemplate->id = $this->id;
			$objTemplate->link = $this->name;
			$objTemplate->href = 'typolight/main.php?do=modules&act=edit&id=' . $this->id;

			return $objTemplate->parse();
		}

		$strBuffer = parent::generate();
		
		if (!strlen($this->Template->headline))
			return '';
			
		return $strBuffer;
	}
	
	
	protected function compile()
	{
		global $objPage;
		
		// Current page has an image
		if (strlen($objPage->pageHeadline))
		{
			$this->Template->headline = $objPage->pageHeadline;
		}
		// Walk the trail
		elseif ($this->inheritPageHeadline && count($objPage->trail))
		{
			$objTrail = $this->Database->execute("SELECT * FROM tl_page WHERE id IN (" . implode(',', $objPage->trail) . ") ORDER BY id=" . implode(' DESC, id=', array_reverse($objPage->trail)) . " DESC");
			
			while( $objTrail->next() )
			{
				if (strlen($objTrail->pageHeadline))
				{
					$this->Template->headline = $objPage->pageHeadline;
					
					return;
				}
			}
		}
	}
}

