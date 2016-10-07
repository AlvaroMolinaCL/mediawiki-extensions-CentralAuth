<?php

class CentralAuthSpoofUser extends SpoofUser {
	/**
	 * @return Database
	 */
	protected function getDBSlave() {
		return CentralAuthUtils::getCentralSlaveDB();
	}

	/**
	 * @return Database
	 */
	protected function getDBMaster() {
		return CentralAuthUtils::getCentralDB();
	}

	/**
	 * @return string
	 */
	protected function getTableName() {
		return 'globaluser';
	}

	/**
	 * @return string
	 */
	protected function getUserColumn() {
		return 'gu_name';
	}
}
