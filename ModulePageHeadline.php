<?php

/**
 * pageheadline Extension for Contao Open Source CMS
 *
 * @copyright  Copyright (c) 2009-2013, terminal42 gmbh
 * @author     terminal42 gmbh <info@terminal42.ch>
 * @license    http://opensource.org/licenses/lgpl-3.0.html LGPL
 * @link       http://github.com/aschempp/contao-pageheadline
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
			$objTemplate->href = 'contao/main.php?do=modules&act=edit&id=' . $this->id;

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

		$this->Template->headline = strlen($objPage->pageTitle) ? $objPage->pageTitle : $objPage->title;

		// Current page has a headline
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
					$this->Template->headline = $objTrail->pageHeadline;

					return;
				}
			}
		}
	}
}
