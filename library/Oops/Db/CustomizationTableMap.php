<?php



/**
 * This class defines the structure of the 'customization' table.
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
class Oops_Db_CustomizationTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Db_CustomizationTableMap';

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
		$this->setName(_DB_PREFIX_ . 'customization');
		$this->setPhpName('Customization');
		$this->setClassname('Oops_Db_Customization');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_CUSTOMIZATION', 'IdCustomization', 'INTEGER', true, 10, null);
		$this->addColumn('ID_PRODUCT_ATTRIBUTE', 'IdProductAttribute', 'INTEGER', true, 10, 0);
		$this->addPrimaryKey('ID_CART', 'IdCart', 'INTEGER', true, 10, null);
		$this->addPrimaryKey('ID_PRODUCT', 'IdProduct', 'INTEGER', true, 10, null);
		$this->addColumn('QUANTITY', 'Quantity', 'INTEGER', true, 10, null);
		$this->addColumn('QUANTITY_REFUNDED', 'QuantityRefunded', 'INTEGER', true, null, 0);
		$this->addColumn('QUANTITY_RETURNED', 'QuantityReturned', 'INTEGER', true, null, 0);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // Oops_Db_CustomizationTableMap
