<?php
/**
 * File for class QualitativoStructRetornoMedidaInstitucionalNormativaDTO
 * @package Qualitativo
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20131207-01
 * @date 2014-01-04
 */
/**
 * This class stands for QualitativoStructRetornoMedidaInstitucionalNormativaDTO originally named retornoMedidaInstitucionalNormativaDTO
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://testews.siop.gov.br:443/services/WSQualitativo?wsdl}
 * @package Qualitativo
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20131207-01
 * @date 2014-01-04
 */
class QualitativoStructRetornoMedidaInstitucionalNormativaDTO extends QualitativoStructRetornoDTO
{
	/**
	 * The registros
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * - nillable : true
	 * @var QualitativoStructMedidaInstitucionalNormativaDTO
	 */
	public $registros;
	/**
	 * Constructor method for retornoMedidaInstitucionalNormativaDTO
	 * @see parent::__construct()
	 * @param QualitativoStructMedidaInstitucionalNormativaDTO $_registros
	 * @return QualitativoStructRetornoMedidaInstitucionalNormativaDTO
	 */
	public function __construct($_registros = NULL)
	{
		QualitativoWsdlClass::__construct(array('registros'=>$_registros));
	}
	/**
	 * Get registros value
	 * @return QualitativoStructMedidaInstitucionalNormativaDTO|null
	 */
	public function getRegistros()
	{
		return $this->registros;
	}
	/**
	 * Set registros value
	 * @param QualitativoStructMedidaInstitucionalNormativaDTO $_registros the registros
	 * @return QualitativoStructMedidaInstitucionalNormativaDTO
	 */
	public function setRegistros($_registros)
	{
		return ($this->registros = $_registros);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see QualitativoWsdlClass::__set_state()
	 * @uses QualitativoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return QualitativoStructRetornoMedidaInstitucionalNormativaDTO
	 */
	public static function __set_state(array $_array,$_className = __CLASS__)
	{
		return parent::__set_state($_array,$_className);
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>