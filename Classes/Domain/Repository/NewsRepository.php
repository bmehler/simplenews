<?php
namespace Mehler\Simplenews\Domain\Repository;


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
 * The repository for News
 */
class NewsRepository extends \TYPO3\CMS\Extbase\Persistence\Repository {
	
	/**
	 * Defines descending order for the news items
	 */
	protected $defaultOrderings = array(
		'crdate' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_DESCENDING	
	);
	
	/**
	 * Shows Current News
	 * @return array news
	 */
	public function findCurrentNews() {
		$query = $this->createQuery();		
		$query->setLimit(3);
		return $query->execute();
	}
	
	/**
	 * Shows Archive News
	 * @return array news
	 */
	public function findArchivedNews() {
		$query = $this->createQuery();			
		$query->setOffset(3);
		$query->setLimit(20);
		return $query->execute();
	}	
}