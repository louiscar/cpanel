<?php
/**
 * @brief	Módulo de DNS
 * @details	Implementação das operações de DNS da API do cPanel
 * @package com.imasters.php.cpanel.operation.dns
 */

require_once 'com/imasters/php/cpanel/cPanelModule.php';
require_once 'com/imasters/php/cpanel/operation/dns/AddDNSZoneOperation.php';
require_once 'com/imasters/php/cpanel/operation/dns/AddZoneRecordOperation.php';
require_once 'com/imasters/php/cpanel/operation/dns/EditZoneRecordOperation.php';
require_once 'com/imasters/php/cpanel/operation/dns/GetZoneRecordOperation.php';

/**
 * @brief	Módulo de DNS
 * @author	João Batista Neto <neto.joaobatista@imasters.com.br>
 */
class DNSModule extends cPanelModule {
	/**
	 * @param	string $domain
	 * @param	string $ip
	 * @return	AddDNSOperation
	 */
	public function addDNSZone( $domain , $ip ) {
		$addDNSZoneOperation = new AddDNSZoneOperation( $this->cpanel );
		$addDNSZoneOperation->setDomain( $domain );
		$addDNSZoneOperation->setIp( $ip );

		return $addDNSZoneOperation;
	}

	/**
	 * @param	string $zone
	 * @return	AddZoneRecordOperation
	 */
	public function addZoneRecord( $zone ) {
		$addZoneRecordOperation = new AddZoneRecordOperation( $this->cpanel );
		$addZoneRecordOperation->setZone( $zone );

		return $addZoneRecordOperation;
	}

	/**
	 * @param	string $domain
	 * @param	string $Line
	 * @return	EditZoneRecordOperation
	 */
	public function editZoneRecord( $domain , $Line ) {
		$editZoneRecordOperation = new EditZoneRecordOperation( $this->cpanel );
		$editZoneRecordOperation->setDomain( $domain );
		$editZoneRecordOperation->setLine( $Line );

		return $editZoneRecordOperation;
	}

	/**
	 * @param	string $domain
	 * @param	string $Line
	 * @return	GetZoneRecordOperation
	 */
	public function getZoneRecord( $domain , $Line ) {
		$getZoneRecordOperation = new GetZoneRecordOperation( $this->cpanel );
		$getZoneRecordOperation->setDomain( $domain );
		$getZoneRecordOperation->setLine( $Line );

		return $getZoneRecordOperation;
	}
}