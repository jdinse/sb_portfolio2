<?php

namespace StephenBungert\SbPortfolio2\ViewHelpers\Link;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Stephen Bungert <stephenbungert@yahoo.de>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/
use \StephenBungert\SbPortfolio2\Domain\Model;
/**
 * ViewHelper for List classes
 *
 * @package sb_portfolio2
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class RelViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {

	/**
	 * Adds the nofollow rel attribute for a link
	 *
	 * @param \StephenBungert\SbPortfolio2\Domain\Model\Link $link The current link record
	 * @return string The rel attribute, if required by the link
	 */
	public function render(\StephenBungert\SbPortfolio2\Domain\Model\Link $link) {
		$relAttr = '';

		if ($link->isNofollow()) {
			$relAttr = 'nofollow';
		}

		return $relAttr;
	}
}
?>
