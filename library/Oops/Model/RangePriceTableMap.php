<?php



/**
 * This class defines the structure of the 'djland_range_price' table.
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
class Oops_Model_RangePriceTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Model_RangePriceTableMap';

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
		$this->setName('djland_range_price');
		$this->setPhpName('RangePrice');
		$this->setClassname('Oops_Model_RangePrice');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_RANGE_PRICE', 'IdRangePrice', 'INTEGER', true, 10, null);
		$this->addColumn('ID_CARRIER', 'IdCarrier', 'INTEGER', true, 10, null);
		$this->addColumn('DELIMITER1', 'Delimiter1', 'DECIMAL', true, 20, null);
		$this->addColumn('DELIMITER2', 'Delimiter2', 'DECIMAL', true, 20, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // Oops_Model_RangePriceTableMap
