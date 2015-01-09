<?php
namespace Mehler\Simplenews\Controller;


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
 * NewsController
 */
class NewsController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * newsRepository
	 *
	 * @var \Mehler\Simplenews\Domain\Repository\NewsRepository
	 * @inject
	 */
	protected $newsRepository = NULL;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$news = $this->newsRepository->findCurrentNews();
		$this->view->assign('newss', $news);
	}
	
	/**
	 * action rss
	 *
	 * @return void
	 */
	public function rssAction() {
		$news = $this->newsRepository->findAll();
		$this->view->assign('newss', $news);
	}
	
	/**
	 * action archive list
	 *
	 * @return void
	 */
	public function archiveListAction() {
		$news = $this->newsRepository->findArchivedNews();
		$this->view->assign('newss', $news);	
	}
	
	/**
	 * action show
	 *
	 *@param \Mehler\Simplenews\Domain\Model\News $news
	 */
	public function showAction(\Mehler\Simplenews\Domain\Model\News $news) {
		$this->view->assign('news', $news);
	}
	
	/**
	 * action archiveshow
	 *
	 *@param \Mehler\Simplenews\Domain\Model\News $news
	 */
	public function archiveShowAction(\Mehler\Simplenews\Domain\Model\News $news) {
		$this->view->assign('news', $news);
	}
	
	

}