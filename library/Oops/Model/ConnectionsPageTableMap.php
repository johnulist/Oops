<?php



/**
 * This class defines the structure of the 'djland_connections_page' table.
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
class Oops_Model_ConnectionsPageTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Model_ConnectionsPageTableMap';

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
		$this->setName('djland_connections_page');
		$this->setPhpName('ConnectionsPage');
		$this->setClassname('Oops_Model_ConnectionsPage');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('ID_CONNECTIONS', 'IdConnections', 'INTEGER', true, 10, null);
		$this->addPrimaryKey('ID_PAGE', 'IdPage', 'INTEGER', true, 10, null);
		$this->addPrimaryKey('TIME_START', 'TimeStart', 'TIMESTAMP', true, null, null);
		$this->addColumn('TIME_END', 'TimeEnd', 'TIMESTAMP', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // Oops_Model_ConnectionsPageTableMap
