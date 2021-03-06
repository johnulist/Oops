<?php


define('OOPS_DB_CUSTOMIZATION_ID_CUSTOMIZATION', _DB_PREFIX_ . 'customization.ID_CUSTOMIZATION');
define('OOPS_DB_CUSTOMIZATION_ID_PRODUCT_ATTRIBUTE', _DB_PREFIX_ . 'customization.ID_PRODUCT_ATTRIBUTE');
define('OOPS_DB_CUSTOMIZATION_ID_CART', _DB_PREFIX_ . 'customization.ID_CART');
define('OOPS_DB_CUSTOMIZATION_ID_PRODUCT', _DB_PREFIX_ . 'customization.ID_PRODUCT');
define('OOPS_DB_CUSTOMIZATION_QUANTITY', _DB_PREFIX_ . 'customization.QUANTITY');
define('OOPS_DB_CUSTOMIZATION_QUANTITY_REFUNDED', _DB_PREFIX_ . 'customization.QUANTITY_REFUNDED');
define('OOPS_DB_CUSTOMIZATION_QUANTITY_RETURNED', _DB_PREFIX_ . 'customization.QUANTITY_RETURNED');
define('OOPS_DB_CUSTOMIZATION_TABLE_NAME', _DB_PREFIX_ . 'customization');

/**
 * Base static class for performing query and update operations on the 'customization' table.
 *
 * 
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Db_Propel_CustomizationPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'prestashop';

	/** the table name for this class */
	const TABLE_NAME = OOPS_DB_CUSTOMIZATION_TABLE_NAME;

	/** the related Propel class for this table */
	const OM_CLASS = 'Oops_Db_Customization';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'prestashop.Oops_Db_Customization';

	/** the related TableMap class for this table */
	const TM_CLASS = 'Oops_Db_CustomizationTableMap';

	/** The total number of columns. */
	const NUM_COLUMNS = 7;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
	const NUM_HYDRATE_COLUMNS = 7;

	/** the column name for the ID_CUSTOMIZATION field */
	const ID_CUSTOMIZATION = OOPS_DB_CUSTOMIZATION_ID_CUSTOMIZATION;

	/** the column name for the ID_PRODUCT_ATTRIBUTE field */
	const ID_PRODUCT_ATTRIBUTE = OOPS_DB_CUSTOMIZATION_ID_PRODUCT_ATTRIBUTE;

	/** the column name for the ID_CART field */
	const ID_CART = OOPS_DB_CUSTOMIZATION_ID_CART;

	/** the column name for the ID_PRODUCT field */
	const ID_PRODUCT = OOPS_DB_CUSTOMIZATION_ID_PRODUCT;

	/** the column name for the QUANTITY field */
	const QUANTITY = OOPS_DB_CUSTOMIZATION_QUANTITY;

	/** the column name for the QUANTITY_REFUNDED field */
	const QUANTITY_REFUNDED = OOPS_DB_CUSTOMIZATION_QUANTITY_REFUNDED;

	/** the column name for the QUANTITY_RETURNED field */
	const QUANTITY_RETURNED = OOPS_DB_CUSTOMIZATION_QUANTITY_RETURNED;

	/** The default string format for model objects of the related table **/
	const DEFAULT_STRING_FORMAT = 'YAML';

	/**
	 * An identiy map to hold any loaded instances of Oops_Db_Customization objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array Oops_Db_Customization[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	protected static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('IdCustomization', 'IdProductAttribute', 'IdCart', 'IdProduct', 'Quantity', 'QuantityRefunded', 'QuantityReturned', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('idCustomization', 'idProductAttribute', 'idCart', 'idProduct', 'quantity', 'quantityRefunded', 'quantityReturned', ),
		BasePeer::TYPE_COLNAME => array (self::ID_CUSTOMIZATION, self::ID_PRODUCT_ATTRIBUTE, self::ID_CART, self::ID_PRODUCT, self::QUANTITY, self::QUANTITY_REFUNDED, self::QUANTITY_RETURNED, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID_CUSTOMIZATION', 'ID_PRODUCT_ATTRIBUTE', 'ID_CART', 'ID_PRODUCT', 'QUANTITY', 'QUANTITY_REFUNDED', 'QUANTITY_RETURNED', ),
		BasePeer::TYPE_FIELDNAME => array ('id_customization', 'id_product_attribute', 'id_cart', 'id_product', 'quantity', 'quantity_refunded', 'quantity_returned', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	protected static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('IdCustomization' => 0, 'IdProductAttribute' => 1, 'IdCart' => 2, 'IdProduct' => 3, 'Quantity' => 4, 'QuantityRefunded' => 5, 'QuantityReturned' => 6, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('idCustomization' => 0, 'idProductAttribute' => 1, 'idCart' => 2, 'idProduct' => 3, 'quantity' => 4, 'quantityRefunded' => 5, 'quantityReturned' => 6, ),
		BasePeer::TYPE_COLNAME => array (self::ID_CUSTOMIZATION => 0, self::ID_PRODUCT_ATTRIBUTE => 1, self::ID_CART => 2, self::ID_PRODUCT => 3, self::QUANTITY => 4, self::QUANTITY_REFUNDED => 5, self::QUANTITY_RETURNED => 6, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID_CUSTOMIZATION' => 0, 'ID_PRODUCT_ATTRIBUTE' => 1, 'ID_CART' => 2, 'ID_PRODUCT' => 3, 'QUANTITY' => 4, 'QUANTITY_REFUNDED' => 5, 'QUANTITY_RETURNED' => 6, ),
		BasePeer::TYPE_FIELDNAME => array ('id_customization' => 0, 'id_product_attribute' => 1, 'id_cart' => 2, 'id_product' => 3, 'quantity' => 4, 'quantity_refunded' => 5, 'quantity_returned' => 6, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
	);

	/**
	 * Translates a fieldname to another type
	 *
	 * @param      string $name field name
	 * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @param      string $toType   One of the class type constants
	 * @return     string translated name of the field.
	 * @throws     PropelException - if the specified name could not be found in the fieldname mappings.
	 */
	static public function translateFieldName($name, $fromType, $toType)
	{
		$toNames = self::getFieldNames($toType);
		$key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
		if ($key === null) {
			throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
		}
		return $toNames[$key];
	}

	/**
	 * Returns an array of field names.
	 *
	 * @param      string $type The type of fieldnames to return:
	 *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     array A list of field names
	 */

	static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
	{
		if (!array_key_exists($type, self::$fieldNames)) {
			throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
		}
		return self::$fieldNames[$type];
	}

	/**
	 * Convenience method which changes table.column to alias.column.
	 *
	 * Using this method you can maintain SQL abstraction while using column aliases.
	 * <code>
	 *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
	 *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
	 * </code>
	 * @param      string $alias The alias for the current table.
	 * @param      string $column The column name for current table. (i.e. Oops_Db_CustomizationPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(Oops_Db_CustomizationPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	/**
	 * Add all the columns needed to create a new object.
	 *
	 * Note: any columns that were marked with lazyLoad="true" in the
	 * XML schema will not be added to the select list and only loaded
	 * on demand.
	 *
	 * @param      Criteria $criteria object containing the columns to add.
	 * @param      string   $alias    optional table alias
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function addSelectColumns(Criteria $criteria, $alias = null)
	{
		if (null === $alias) {
			$criteria->addSelectColumn(Oops_Db_CustomizationPeer::ID_CUSTOMIZATION);
			$criteria->addSelectColumn(Oops_Db_CustomizationPeer::ID_PRODUCT_ATTRIBUTE);
			$criteria->addSelectColumn(Oops_Db_CustomizationPeer::ID_CART);
			$criteria->addSelectColumn(Oops_Db_CustomizationPeer::ID_PRODUCT);
			$criteria->addSelectColumn(Oops_Db_CustomizationPeer::QUANTITY);
			$criteria->addSelectColumn(Oops_Db_CustomizationPeer::QUANTITY_REFUNDED);
			$criteria->addSelectColumn(Oops_Db_CustomizationPeer::QUANTITY_RETURNED);
		} else {
			$criteria->addSelectColumn($alias . '.ID_CUSTOMIZATION');
			$criteria->addSelectColumn($alias . '.ID_PRODUCT_ATTRIBUTE');
			$criteria->addSelectColumn($alias . '.ID_CART');
			$criteria->addSelectColumn($alias . '.ID_PRODUCT');
			$criteria->addSelectColumn($alias . '.QUANTITY');
			$criteria->addSelectColumn($alias . '.QUANTITY_REFUNDED');
			$criteria->addSelectColumn($alias . '.QUANTITY_RETURNED');
		}
	}

	/**
	 * Returns the number of rows matching criteria.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @return     int Number of matching rows.
	 */
	public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
	{
		// we may modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(Oops_Db_CustomizationPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			Oops_Db_CustomizationPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_CustomizationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		// BasePeer returns a PDOStatement
		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}
	/**
	 * Selects one object from the DB.
	 *
	 * @param      Criteria $criteria object used to create the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     Oops_Db_Customization
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = Oops_Db_CustomizationPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	/**
	 * Selects several row from the DB.
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     array Array of selected Objects
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelect(Criteria $criteria, PropelPDO $con = null)
	{
		return Oops_Db_CustomizationPeer::populateObjects(Oops_Db_CustomizationPeer::doSelectStmt($criteria, $con));
	}
	/**
	 * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
	 *
	 * Use this method directly if you want to work with an executed statement durirectly (for example
	 * to perform your own object hydration).
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con The connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     PDOStatement The executed PDOStatement object.
	 * @see        BasePeer::doSelect()
	 */
	public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_CustomizationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			Oops_Db_CustomizationPeer::addSelectColumns($criteria);
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		// BasePeer returns a PDOStatement
		return BasePeer::doSelect($criteria, $con);
	}
	/**
	 * Adds an object to the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doSelect*()
	 * methods in your stub classes -- you may need to explicitly add objects
	 * to the cache in order to ensure that the same objects are always returned by doSelect*()
	 * and retrieveByPK*() calls.
	 *
	 * @param      Oops_Db_Customization $value A Oops_Db_Customization object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool($obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = serialize(array((string) $obj->getIdCustomization(), (string) $obj->getIdCart(), (string) $obj->getIdProduct()));
			} // if key === null
			self::$instances[$key] = $obj;
		}
	}

	/**
	 * Removes an object from the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doDelete
	 * methods in your stub classes -- you may need to explicitly remove objects
	 * from the cache in order to prevent returning objects that no longer exist.
	 *
	 * @param      mixed $value A Oops_Db_Customization object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof Oops_Db_Customization) {
				$key = serialize(array((string) $value->getIdCustomization(), (string) $value->getIdCart(), (string) $value->getIdProduct()));
			} elseif (is_array($value) && count($value) === 3) {
				// assume we've been passed a primary key
				$key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2]));
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Oops_Db_Customization object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
				throw $e;
			}

			unset(self::$instances[$key]);
		}
	} // removeInstanceFromPool()

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
	 * @return     Oops_Db_Customization Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
	 * @see        getPrimaryKeyHash()
	 */
	public static function getInstanceFromPool($key)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if (isset(self::$instances[$key])) {
				return self::$instances[$key];
			}
		}
		return null; // just to be explicit
	}
	
	/**
	 * Clear the instance pool.
	 *
	 * @return     void
	 */
	public static function clearInstancePool()
	{
		self::$instances = array();
	}
	
	/**
	 * Method to invalidate the instance pool of all tables related to customization
	 * by a foreign key with ON DELETE CASCADE
	 */
	public static function clearRelatedInstancePool()
	{
	}

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @return     string A string version of PK or NULL if the components of primary key in result array are all null.
	 */
	public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
	{
		// If the PK cannot be derived from the row, return NULL.
		if ($row[$startcol] === null && $row[$startcol + 2] === null && $row[$startcol + 3] === null) {
			return null;
		}
		return serialize(array((string) $row[$startcol], (string) $row[$startcol + 2], (string) $row[$startcol + 3]));
	}

	/**
	 * Retrieves the primary key from the DB resultset row
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, an array of the primary key columns will be returned.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @return     mixed The primary key of the row
	 */
	public static function getPrimaryKeyFromRow($row, $startcol = 0)
	{
		return array((int) $row[$startcol], (int) $row[$startcol + 2], (int) $row[$startcol + 3]);
	}
	
	/**
	 * The returned array will contain objects of the default type or
	 * objects that inherit from the default.
	 *
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function populateObjects(PDOStatement $stmt)
	{
		$results = array();
	
		// set the class once to avoid overhead in the loop
		$cls = Oops_Db_CustomizationPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = Oops_Db_CustomizationPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = Oops_Db_CustomizationPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				Oops_Db_CustomizationPeer::addInstanceToPool($obj, $key);
			} // if key exists
		}
		$stmt->closeCursor();
		return $results;
	}
	/**
	 * Populates an object of the default type or an object that inherit from the default.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     array (Oops_Db_Customization object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = Oops_Db_CustomizationPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = Oops_Db_CustomizationPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + Oops_Db_CustomizationPeer::NUM_HYDRATE_COLUMNS;
		} else {
			$cls = Oops_Db_CustomizationPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			Oops_Db_CustomizationPeer::addInstanceToPool($obj, $key);
		}
		return array($obj, $col);
	}

	/**
	 * Returns the TableMap related to this peer.
	 * This method is not needed for general use but a specific application could have a need.
	 * @return     TableMap
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	/**
	 * Add a TableMap instance to the database for this peer class.
	 */
	public static function buildTableMap()
	{
	  $dbMap = Propel::getDatabaseMap(Oops_Db_Propel_CustomizationPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(Oops_Db_Propel_CustomizationPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new Oops_Db_CustomizationTableMap());
	  }
	}

	/**
	 * The class that the Peer will make instances of.
	 *
	 * If $withPrefix is true, the returned path
	 * uses a dot-path notation which is tranalted into a path
	 * relative to a location on the PHP include_path.
	 * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
	 *
	 * @param      boolean $withPrefix Whether or not to return the path with the class name
	 * @return     string path.to.ClassName
	 */
	public static function getOMClass($withPrefix = true)
	{
		return $withPrefix ? Oops_Db_CustomizationPeer::CLASS_DEFAULT : Oops_Db_CustomizationPeer::OM_CLASS;
	}

	/**
	 * Performs an INSERT on the database, given a Oops_Db_Customization or Criteria object.
	 *
	 * @param      mixed $values Criteria or Oops_Db_Customization object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_CustomizationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from Oops_Db_Customization object
		}

		if ($criteria->containsKey(Oops_Db_CustomizationPeer::ID_CUSTOMIZATION) && $criteria->keyContainsValue(Oops_Db_CustomizationPeer::ID_CUSTOMIZATION) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.Oops_Db_CustomizationPeer::ID_CUSTOMIZATION.')');
		}


		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		try {
			// use transaction because $criteria could contain info
			// for more than one table (I guess, conceivably)
			$con->beginTransaction();
			$pk = BasePeer::doInsert($criteria, $con);
			$con->commit();
		} catch(PropelException $e) {
			$con->rollBack();
			throw $e;
		}

		return $pk;
	}

	/**
	 * Performs an UPDATE on the database, given a Oops_Db_Customization or Criteria object.
	 *
	 * @param      mixed $values Criteria or Oops_Db_Customization object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_CustomizationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(Oops_Db_CustomizationPeer::ID_CUSTOMIZATION);
			$value = $criteria->remove(Oops_Db_CustomizationPeer::ID_CUSTOMIZATION);
			if ($value) {
				$selectCriteria->add(Oops_Db_CustomizationPeer::ID_CUSTOMIZATION, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(Oops_Db_CustomizationPeer::TABLE_NAME);
			}

			$comparison = $criteria->getComparison(Oops_Db_CustomizationPeer::ID_CART);
			$value = $criteria->remove(Oops_Db_CustomizationPeer::ID_CART);
			if ($value) {
				$selectCriteria->add(Oops_Db_CustomizationPeer::ID_CART, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(Oops_Db_CustomizationPeer::TABLE_NAME);
			}

			$comparison = $criteria->getComparison(Oops_Db_CustomizationPeer::ID_PRODUCT);
			$value = $criteria->remove(Oops_Db_CustomizationPeer::ID_PRODUCT);
			if ($value) {
				$selectCriteria->add(Oops_Db_CustomizationPeer::ID_PRODUCT, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(Oops_Db_CustomizationPeer::TABLE_NAME);
			}

		} else { // $values is Oops_Db_Customization object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Deletes all rows from the customization table.
	 *
	 * @param      PropelPDO $con the connection to use
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll(PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_CustomizationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(Oops_Db_CustomizationPeer::TABLE_NAME, $con, Oops_Db_CustomizationPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			Oops_Db_CustomizationPeer::clearInstancePool();
			Oops_Db_CustomizationPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs a DELETE on the database, given a Oops_Db_Customization or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or Oops_Db_Customization object or primary key or array of primary keys
	 *              which is used to create the DELETE statement
	 * @param      PropelPDO $con the connection to use
	 * @return     int 	The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
	 *				if supported by native driver or if emulated using Propel.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	 public static function doDelete($values, PropelPDO $con = null)
	 {
		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_CustomizationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			Oops_Db_CustomizationPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof Oops_Db_Customization) { // it's a model object
			// invalidate the cache for this single object
			Oops_Db_CustomizationPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			// primary key is composite; we therefore, expect
			// the primary key passed to be an array of pkey values
			if (count($values) == count($values, COUNT_RECURSIVE)) {
				// array is not multi-dimensional
				$values = array($values);
			}
			foreach ($values as $value) {
				$criterion = $criteria->getNewCriterion(Oops_Db_CustomizationPeer::ID_CUSTOMIZATION, $value[0]);
				$criterion->addAnd($criteria->getNewCriterion(Oops_Db_CustomizationPeer::ID_CART, $value[1]));
				$criterion->addAnd($criteria->getNewCriterion(Oops_Db_CustomizationPeer::ID_PRODUCT, $value[2]));
				$criteria->addOr($criterion);
				// we can invalidate the cache for this single PK
				Oops_Db_CustomizationPeer::removeInstanceFromPool($value);
			}
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; // initialize var to track total num of affected rows

		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			
			$affectedRows += BasePeer::doDelete($criteria, $con);
			Oops_Db_CustomizationPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given Oops_Db_Customization object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      Oops_Db_Customization $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate($obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(Oops_Db_CustomizationPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(Oops_Db_CustomizationPeer::TABLE_NAME);

			if (! is_array($cols)) {
				$cols = array($cols);
			}

			foreach ($cols as $colName) {
				if ($tableMap->containsColumn($colName)) {
					$get = 'get' . $tableMap->getColumn($colName)->getPhpName();
					$columns[$colName] = $obj->$get();
				}
			}
		} else {

		}

		return BasePeer::doValidate(Oops_Db_CustomizationPeer::DATABASE_NAME, Oops_Db_CustomizationPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve object using using composite pkey values.
	 * @param      int $id_customization
	 * @param      int $id_cart
	 * @param      int $id_product
	 * @param      PropelPDO $con
	 * @return     Oops_Db_Customization
	 */
	public static function retrieveByPK($id_customization, $id_cart, $id_product, PropelPDO $con = null) {
		$_instancePoolKey = serialize(array((string) $id_customization, (string) $id_cart, (string) $id_product));
 		if (null !== ($obj = Oops_Db_CustomizationPeer::getInstanceFromPool($_instancePoolKey))) {
 			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_CustomizationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		$criteria = new Criteria(Oops_Db_CustomizationPeer::DATABASE_NAME);
		$criteria->add(Oops_Db_CustomizationPeer::ID_CUSTOMIZATION, $id_customization);
		$criteria->add(Oops_Db_CustomizationPeer::ID_CART, $id_cart);
		$criteria->add(Oops_Db_CustomizationPeer::ID_PRODUCT, $id_product);
		$v = Oops_Db_CustomizationPeer::doSelect($criteria, $con);

		return !empty($v) ? $v[0] : null;
	}
} // Oops_Db_Propel_CustomizationPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
Oops_Db_Propel_CustomizationPeer::buildTableMap();

