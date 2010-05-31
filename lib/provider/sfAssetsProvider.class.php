<?php

class sfAssetsProvider implements sfAssetsProviderInterface {

	public static function clearInstancePool() {
		return sfAssetPeer::clearInstancePool();
	}

	public static function exists($folderId, $filename) {
		return sfAssetPeer::exists($folderId, $filename);
	}

	public static function getPager(array $params, $sort = 'name', $page = 1, $size = 20) {
		return sfAssetPeer::getPager($params, $sort, $page, $size);
	}

	public static function retrieveFromUrl($url) {
		return sfAssetPeer::retrieveFromUrl($url);
	}

	public static function doDeleteAll() {
		return sfAssetPeer::doDeleteAll();
	}

	public static function retrieveByPk($id) {
		return sfAssetPeer::retrieveByPk($id);
	}


}
?>
