<?php

class sfAssetsFolderProvider implements sfAssetsFolderProviderInterface {

	public static function clearInstancePool() {
		return sfAssetFolderPeer::clearInstancePool();
	}
	
	public static function retrieveByPk($id) {
		return sfAssetFolderPeer::retrieveByPk($id);
	}
	/**
	 * Retrieves folder by relative path
	 *
	 * @param string $path
	 * @param string $separator
	 * @return sfAssetFolder
	 */
	public static function retrieveByPath($path = '', $separator = DIRECTORY_SEPARATOR) {
		return sfAssetFolderPeer::retrieveByPath($path, $separator);
	}

	public static function cleanPath($path) {
		return sfAssetFolderPeer::cleanPath($path);
	}

	public static function countFilesSize($files) {
		return sfAssetFolderPeer::countFilesSize($files);
	}

	public static function createFromPath($path) {
		return sfAssetFolderPeer::createFromPath($path);
	}

	public static function getAllNonDescendantsPaths($folder) {
		return sfAssetFolderPeer::getAllNonDescendantsPaths($folder);
	}

//	public static function getAllNonDescendantsPathsCriteria($folder) {
//		return sfAssetFolderPeer::getAllNonDescendantsPaths($folder);
//	}

	public static function getAllPaths($includeRoot = true) {
		return sfAssetFolderPeer::getAllPaths($includeRoot);
	}

//	public static function getAllPathsButOneCriteria($folder) {
//		return sfAssetFolderPeer::getAllPathsButOneCriteria($folder);
//	}

	public static function sortByDate(array $dirs = array()) {
		return sfAssetFolderPeer::sortByDate($dirs);
	}

	public static function sortByName(array $dirs = array()) {
		return sfAssetFolderPeer::sortByName($dirs);
	}

	public static function doDeleteAll() {
		return sfAssetFolderPeer::doDeleteAll();
	}

	public static function createRoot($node) {
		return sfAssetFolderPeer::createRoot($node);
	}
}
