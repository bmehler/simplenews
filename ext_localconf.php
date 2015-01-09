<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Mehler.' . $_EXTKEY,
	'Newslisting',
	array(
		'News' => 'list, show,archiveList,archiveShow,rss',
		
	),
	// non-cacheable actions
	array(
		'News' => 'list, show,archiveList,archiveShow,rss',
		
	)
);
