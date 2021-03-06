<?php



/**
 * This class defines the structure of the 'webservice_account' table.
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
class Oops_Db_WebserviceAccountTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Db_WebserviceAccountTableMap';

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
		$this->setName(_DB_PREFIX_ . 'webservice_account');
		$this->setPhpName('WebserviceAccount');
		$this->setClassname('Oops_Db_WebserviceAccount');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_WEBSERVICE_ACCOUNT', 'IdWebserviceAccount', 'INTEGER', true, null, null);
		$this->addColumn('KEY', 'Key', 'VARCHAR', true, 32, null);
		$this->addColumn('DESCRIPTION', 'Description', 'LONGVARCHAR', false, null, null);
		$this->addColumn('CLASS_NAME', 'ClassName', 'VARCHAR', true, 50, 'WebserviceRequest');
		$this->addColumn('IS_MODULE', 'IsModule', 'TINYINT', true, 2, 0);
		$this->addColumn('MODULE_NAME', 'ModuleName', 'VARCHAR', false, 50, null);
		$this->addColumn('ACTIVE', 'Active', 'TINYINT', true, 2, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // Oops_Db_WebserviceAccountTableMap
