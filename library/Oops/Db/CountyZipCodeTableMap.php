<?php



/**
 * This class defines the structure of the 'county_zip_code' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.prestashop.map
 */
class Oops_Db_CountyZipCodeTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Db_CountyZipCodeTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
		// attributes
		$this->setName(_DB_PREFIX_ . 'county_zip_code');
		$this->setPhpName('CountyZipCode');
		$this->setClassname('Oops_Db_CountyZipCode');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('ID_COUNTY', 'IdCounty', 'INTEGER', true, null, null);
		$this->addPrimaryKey('FROM_ZIP_CODE', 'FromZipCode', 'INTEGER', true, null, null);
		$this->addPrimaryKey('TO_ZIP_CODE', 'ToZipCode', 'INTEGER', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // Oops_Db_CountyZipCodeTableMap
