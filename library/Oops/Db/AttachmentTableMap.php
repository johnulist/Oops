<?php



/**
 * This class defines the structure of the 'attachment' table.
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
class Oops_Db_AttachmentTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'prestashop.map.Oops_Db_AttachmentTableMap';

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
		$this->setName(_DB_PREFIX_ . 'attachment');
		$this->setPhpName('Attachment');
		$this->setClassname('Oops_Db_Attachment');
		$this->setPackage('prestashop');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_ATTACHMENT', 'IdAttachment', 'INTEGER', true, 10, null);
		$this->addColumn('FILE', 'File', 'VARCHAR', true, 40, null);
		$this->addColumn('FILE_NAME', 'FileName', 'VARCHAR', true, 128, null);
		$this->addColumn('MIME', 'Mime', 'VARCHAR', true, 128, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('ProductAttachment', 'Oops_Db_ProductAttachment', RelationMap::ONE_TO_MANY, array('id_attachment' => 'id_attachment', ), null, null, 'ProductAttachments');
		$this->addRelation('AttachmentLang', 'Oops_Db_AttachmentLang', RelationMap::ONE_TO_MANY, array('id_attachment' => 'id_attachment', ), 'CASCADE', null, 'AttachmentLangs');
		$this->addRelation('Product', 'Oops_Db_Product', RelationMap::MANY_TO_MANY, array(), 'CASCADE', null, 'Products');
	} // buildRelations()

	/**
	 *
	 * Gets the list of behaviors registered for this table
	 *
	 * @return array Associative array (name => parameters) of behaviors
	 */
	public function getBehaviors()
	{
		return array(
			'i18n' => array('i18n_table' => 'attachment_lang', 'i18n_phpname' => 'AttachmentLang', 'i18n_columns' => 'name,description', 'locale_column' => 'id_lang', 'default_locale' => '1', 'locale_alias' => '', ),
		);
	} // getBehaviors()

} // Oops_Db_AttachmentTableMap
