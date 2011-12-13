<?php



/**
 * This class defines the structure of the 'product_tag' table.
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
class Oops_Db_ProductTagTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Db_ProductTagTableMap';

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
		$this->setName(_DB_PREFIX_ . 'product_tag');
		$this->setPhpName('ProductTag');
		$this->setClassname('Oops_Db_ProductTag');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('ID_PRODUCT', 'IdProduct', 'INTEGER', true, 10, null);
		$this->addPrimaryKey('ID_TAG', 'IdTag', 'INTEGER', true, 10, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // Oops_Db_ProductTagTableMap