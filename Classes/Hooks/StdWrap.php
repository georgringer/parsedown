<?php

namespace GeorgRinger\Parsedown\Hooks;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 Georg Ringer <typo3@ringerge.org>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *  A copy is found in the textfile GPL.txt and important notices to the license
 *  from the author is found in LICENSE.txt distributed with these scripts.
 *
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

class StdWrap implements \TYPO3\CMS\Frontend\ContentObject\ContentObjectStdWrapHookInterface {


	/**
	 * @param string $content
	 * @param array $configuration
	 * @param \TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer $parentObject
	 * @return string
	 */
	public function stdWrapProcess($content, array $configuration, \TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer &$parentObject) {
		if ($configuration['markdown'] == 1) {

			/** @var \GeorgRinger\Parsedown\Parser\Parser $parser */
			$parser = GeneralUtility::makeInstance('GeorgRinger\\Parsedown\\Parser\\Parser');
			$content = $parser->run($content);
		}


		return $content;
	}


	/**
	 * @param string $content
	 * @param array $configuration
	 * @param tslib_cObj $parentObject
	 * @return string
	 */
	public function stdWrapPreProcess($content, array $configuration, \TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer &$parentObject) {
		return $content;
	}

	/**
	 * @param string $content
	 * @param array $configuration
	 * @param tslib_cObj $parentObject
	 * @return string
	 */
	public function stdWrapOverride($content, array $configuration, \TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer &$parentObject) {
		return $content;
	}


	/**
	 * @param string $content
	 * @param array $configuration
	 * @param \TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer $parentObject
	 * @return string
	 */
	public function stdWrapPostProcess($content, array $configuration, \TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer &$parentObject) {
		if ($configuration['markdown'] == 1) {
		}


		return $content;
	}

}

?>