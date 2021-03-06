<?php
namespace Mehler\Simplenews\Domain\Model;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2014 Bernhard Mehler <bernhard.mehler@gmail.com>
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

/**
 * News
 */
class News extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {
	
	/**
	 * The news crdate
	 *
	 * @var DateTime	 
	 */
	protected $crdate;
	
	
	/**
	 * The news title
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $title = '';

	/**
	 * The news text
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $text = '';

	/**
	 * Returns the title
	 *
	 * @return string $title
	 */
	public function getTitle() {
		return $this->title;
	}	
	
	/**
	 * Sets the title
	 *
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Returns the text
	 *
	 * @return string $text
	 */
	public function getText() {
		return $this->text;
	}

	/**
	 * Sets the text
	 *
	 * @param string $text
	 * @return void
	 */
	public function setText($text) {
		$this->text = $text;
	}
	
	/** 
	* Returns crdate 
	* 
	* @return $crdate 
	*/
	public function getCrdate() {
		return $this->crdate;
	}


	/**
	* Sets crdate 
	* 
	* @param DateTime $crdate
	* @return void 
	*/
	public function setCrdate(DateTime $crdate) {    
		$this->crdate = $crdate;
	}
}