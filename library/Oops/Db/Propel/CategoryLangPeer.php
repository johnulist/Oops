<?php


define('OOPS_DB_CATEGORYLANG_ID_CATEGORY', _DB_PREFIX_ . 'category_lang.ID_CATEGORY');
define('OOPS_DB_CATEGORYLANG_ID_LANG', _DB_PREFIX_ . 'category_lang.ID_LANG');
define('OOPS_DB_CATEGORYLANG_NAME', _DB_PREFIX_ . 'category_lang.NAME');
define('OOPS_DB_CATEGORYLANG_DESCRIPTION', _DB_PREFIX_ . 'category_lang.DESCRIPTION');
define('OOPS_DB_CATEGORYLANG_LINK_REWRITE', _DB_PREFIX_ . 'category_lang.LINK_REWRITE');
define('OOPS_DB_CATEGORYLANG_META_TITLE', _DB_PREFIX_ . 'category_lang.META_TITLE');
define('OOPS_DB_CATEGORYLANG_META_KEYWORDS', _DB_PREFIX_ . 'category_lang.META_KEYWORDS');
define('OOPS_DB_CATEGORYLANG_META_DESCRIPTION', _DB_PREFIX_ . 'category_lang.META_DESCRIPTION');
define('OOPS_DB_CATEGORYLANG_TABLE_NAME', _DB_PREFIX_ . 'category_lang');

/**
 * Base static class for performing query and update operations on the 'category_lang' table.
 *
 * 
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Db_Propel_CategoryLangPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'prestashop';

	/** the table name for this class */
	const TABLE_NAME = OOPS_DB_CATEGORYLANG_TABLE_NAME;

	/** the related Propel class for this table */
	const OM_CLASS = 'Oops_Db_CategoryLang';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'prestashop.Oops_Db_CategoryLang';

	/** the related TableMap class for this table */
	const TM_CLASS = 'Oops_Db_CategoryLangTableMap';

	/** The total number of columns. */
	const NUM_COLUMNS = 8;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
	const NUM_HYDRATE_COLUMNS = 8;

	/** the column name for the ID_CATEGORY field */
	const ID_CATEGORY = OOPS_DB_CATEGORYLANG_ID_CATEGORY;

	/** the column name for the ID_LANG field */
	const ID_LANG = OOPS_DB_CATEGORYLANG_ID_LANG;

	/** the column name for the NAME field */
	const NAME = OOPS_DB_CATEGORYLANG_NAME;

	/** the column name for the DESCRIPTION field */
	const DESCRIPTION = OOPS_DB_CATEGORYLANG_DESCRIPTION;

	/** the column name for the LINK_REWRITE field */
	const LINK_REWRITE = OOPS_DB_CATEGORYLANG_LINK_REWRITE;

	/** the column name for the META_TITLE field */
	const META_TITLE = OOPS_DB_CATEGORYLANG_META_TITLE;

	/** the column name for the META_KEYWORDS field */
	const META_KEYWORDS = OOPS_DB_CATEGORYLANG_META_KEYWORDS;

	/** the column name for the META_DESCRIPTION field */
	const META_DESCRIPTION = OOPS_DB_CATEGORYLANG_META_DESCRIPTION;

	/** The default string format for model objects of the related table **/
	const DEFAULT_STRING_FORMAT = 'YAML';

	/**
	 * An identiy map to hold any loaded instances of Oops_Db_CategoryLang objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array Oops_Db_CategoryLang[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	protected static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('IdCategory', 'IdLang', 'Name', 'Description', 'LinkRewrite', 'MetaTitle', 'MetaKeywords', 'MetaDescription', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('idCategory', 'idLang', 'name', 'description', 'linkRewrite', 'metaTitle', 'metaKeywords', 'metaDescription', ),
		BasePeer::TYPE_COLNAME => array (self::ID_CATEGORY, self::ID_LANG, self::NAME, self::DESCRIPTION, self::LINK_REWRITE, self::META_TITLE, self::META_KEYWORDS, self::META_DESCRIPTION, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID_CATEGORY', 'ID_LANG', 'NAME', 'DESCRIPTION', 'LINK_REWRITE', 'META_TITLE', 'META_KEYWORDS', 'META_DESCRIPTION', ),
		BasePeer::TYPE_FIELDNAME => array ('id_category', 'id_lang', 'name', 'description', 'link_rewrite', 'meta_title', 'meta_keywords', 'meta_description', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	protected static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('IdCategory' => 0, 'IdLang' => 1, 'Name' => 2, 'Description' => 3, 'LinkRewrite' => 4, 'MetaTitle' => 5, 'MetaKeywords' => 6, 'MetaDescription' => 7, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('idCategory' => 0, 'idLang' => 1, 'name' => 2, 'description' => 3, 'linkRewrite' => 4, 'metaTitle' => 5, 'metaKeywords' => 6, 'metaDescription' => 7, ),
		BasePeer::TYPE_COLNAME => array (self::ID_CATEGORY => 0, self::ID_LANG => 1, self::NAME => 2, self::DESCRIPTION => 3, self::LINK_REWRITE => 4, self::META_TITLE => 5, self::META_KEYWORDS => 6, self::META_DESCRIPTION => 7, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID_CATEGORY' => 0, 'ID_LANG' => 1, 'NAME' => 2, 'DESCRIPTION' => 3, 'LINK_REWRITE' => 4, 'META_TITLE' => 5, 'META_KEYWORDS' => 6, 'META_DESCRIPTION' => 7, ),
		BasePeer::TYPE_FIELDNAME => array ('id_category' => 0, 'id_lang' => 1, 'name' => 2, 'description' => 3, 'link_rewrite' => 4, 'meta_title' => 5, 'meta_keywords' => 6, 'meta_description' => 7, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
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
	 * @param      string $column The column name for current table. (i.e. Oops_Db_CategoryLangPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(Oops_Db_CategoryLangPeer::TABLE_NAME.'.', $alias.'.', $column);
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
			$criteria->addSelectColumn(Oops_Db_CategoryLangPeer::ID_CATEGORY);
			$criteria->addSelectColumn(Oops_Db_CategoryLangPeer::ID_LANG);
			$criteria->addSelectColumn(Oops_Db_CategoryLangPeer::NAME);
			$criteria->addSelectColumn(Oops_Db_CategoryLangPeer::DESCRIPTION);
			$criteria->addSelectColumn(Oops_Db_CategoryLangPeer::LINK_REWRITE);
			$criteria->addSelectColumn(Oops_Db_CategoryLangPeer::META_TITLE);
			$criteria->addSelectColumn(Oops_Db_CategoryLangPeer::META_KEYWORDS);
			$criteria->addSelectColumn(Oops_Db_CategoryLangPeer::META_DESCRIPTION);
		} else {
			$criteria->addSelectColumn($alias . '.ID_CATEGORY');
			$criteria->addSelectColumn($alias . '.ID_LANG');
			$criteria->addSelectColumn($alias . '.NAME');
			$criteria->addSelectColumn($alias . '.DESCRIPTION');
			$criteria->addSelectColumn($alias . '.LINK_REWRITE');
			$criteria->addSelectColumn($alias . '.META_TITLE');
			$criteria->addSelectColumn($alias . '.META_KEYWORDS');
			$criteria->addSelectColumn($alias . '.META_DESCRIPTION');
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
		$criteria->setPrimaryTableName(Oops_Db_CategoryLangPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			Oops_Db_CategoryLangPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_CategoryLangPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return     Oops_Db_CategoryLang
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = Oops_Db_CategoryLangPeer::doSelect($critcopy, $con);
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
		return Oops_Db_CategoryLangPeer::populateObjects(Oops_Db_CategoryLangPeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(Oops_Db_CategoryLangPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			Oops_Db_CategoryLangPeer::addSelectColumns($criteria);
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
	 * @param      Oops_Db_CategoryLang $value A Oops_Db_CategoryLang object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool($obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = serialize(array((string) $obj->getIdCategory(), (string) $obj->getIdLang()));
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
	 * @param      mixed $value A Oops_Db_CategoryLang object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof Oops_Db_CategoryLang) {
				$key = serialize(array((string) $value->getIdCategory(), (string) $value->getIdLang()));
			} elseif (is_array($value) && count($value) === 2) {
				// assume we've been passed a primary key
				$key = serialize(array((string) $value[0], (string) $value[1]));
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Oops_Db_CategoryLang object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     Oops_Db_CategoryLang Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
	 * Method to invalidate the instance pool of all tables related to category_lang
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
		if ($row[$startcol] === null && $row[$startcol + 1] === null) {
			return null;
		}
		return serialize(array((string) $row[$startcol], (string) $row[$startcol + 1]));
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
		return array((int) $row[$startcol], (int) $row[$startcol + 1]);
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
		$cls = Oops_Db_CategoryLangPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = Oops_Db_CategoryLangPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = Oops_Db_CategoryLangPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				Oops_Db_CategoryLangPeer::addInstanceToPool($obj, $key);
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
	 * @return     array (Oops_Db_CategoryLang object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = Oops_Db_CategoryLangPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = Oops_Db_CategoryLangPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + Oops_Db_CategoryLangPeer::NUM_HYDRATE_COLUMNS;
		} else {
			$cls = Oops_Db_CategoryLangPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			Oops_Db_CategoryLangPeer::addInstanceToPool($obj, $key);
		}
		return array($obj, $col);
	}


	/**
	 * Returns the number of rows matching criteria, joining the related Category table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinCategory(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(Oops_Db_CategoryLangPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			Oops_Db_CategoryLangPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_CategoryLangPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(Oops_Db_CategoryLangPeer::ID_CATEGORY, Oops_Db_CategoryPeer::ID_CATEGORY, $join_behavior);

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
	 * Returns the number of rows matching criteria, joining the related Lang table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinLang(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(Oops_Db_CategoryLangPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			Oops_Db_CategoryLangPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_CategoryLangPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(Oops_Db_CategoryLangPeer::ID_LANG, Oops_Db_LangPeer::ID_LANG, $join_behavior);

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
	 * Selects a collection of Oops_Db_CategoryLang objects pre-filled with their Oops_Db_Category objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of Oops_Db_CategoryLang objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinCategory(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		Oops_Db_CategoryLangPeer::addSelectColumns($criteria);
		$startcol = Oops_Db_CategoryLangPeer::NUM_HYDRATE_COLUMNS;
		Oops_Db_CategoryPeer::addSelectColumns($criteria);

		$criteria->addJoin(Oops_Db_CategoryLangPeer::ID_CATEGORY, Oops_Db_CategoryPeer::ID_CATEGORY, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = Oops_Db_CategoryLangPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = Oops_Db_CategoryLangPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = Oops_Db_CategoryLangPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				Oops_Db_CategoryLangPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = Oops_Db_CategoryPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = Oops_Db_CategoryPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = Oops_Db_CategoryPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					Oops_Db_CategoryPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (Oops_Db_CategoryLang) to $obj2 (Oops_Db_Category)
				$obj2->addCategoryLang($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of Oops_Db_CategoryLang objects pre-filled with their Oops_Db_Lang objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of Oops_Db_CategoryLang objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinLang(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		Oops_Db_CategoryLangPeer::addSelectColumns($criteria);
		$startcol = Oops_Db_CategoryLangPeer::NUM_HYDRATE_COLUMNS;
		Oops_Db_LangPeer::addSelectColumns($criteria);

		$criteria->addJoin(Oops_Db_CategoryLangPeer::ID_LANG, Oops_Db_LangPeer::ID_LANG, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = Oops_Db_CategoryLangPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = Oops_Db_CategoryLangPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = Oops_Db_CategoryLangPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				Oops_Db_CategoryLangPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = Oops_Db_LangPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = Oops_Db_LangPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = Oops_Db_LangPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					Oops_Db_LangPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (Oops_Db_CategoryLang) to $obj2 (Oops_Db_Lang)
				$obj2->addCategoryLang($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Returns the number of rows matching criteria, joining all related tables
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(Oops_Db_CategoryLangPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			Oops_Db_CategoryLangPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_CategoryLangPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(Oops_Db_CategoryLangPeer::ID_CATEGORY, Oops_Db_CategoryPeer::ID_CATEGORY, $join_behavior);

		$criteria->addJoin(Oops_Db_CategoryLangPeer::ID_LANG, Oops_Db_LangPeer::ID_LANG, $join_behavior);

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
	 * Selects a collection of Oops_Db_CategoryLang objects pre-filled with all related objects.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of Oops_Db_CategoryLang objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		Oops_Db_CategoryLangPeer::addSelectColumns($criteria);
		$startcol2 = Oops_Db_CategoryLangPeer::NUM_HYDRATE_COLUMNS;

		Oops_Db_CategoryPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + Oops_Db_CategoryPeer::NUM_HYDRATE_COLUMNS;

		Oops_Db_LangPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + Oops_Db_LangPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(Oops_Db_CategoryLangPeer::ID_CATEGORY, Oops_Db_CategoryPeer::ID_CATEGORY, $join_behavior);

		$criteria->addJoin(Oops_Db_CategoryLangPeer::ID_LANG, Oops_Db_LangPeer::ID_LANG, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = Oops_Db_CategoryLangPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = Oops_Db_CategoryLangPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = Oops_Db_CategoryLangPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				Oops_Db_CategoryLangPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

			// Add objects for joined Oops_Db_Category rows

			$key2 = Oops_Db_CategoryPeer::getPrimaryKeyHashFromRow($row, $startcol2);
			if ($key2 !== null) {
				$obj2 = Oops_Db_CategoryPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = Oops_Db_CategoryPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					Oops_Db_CategoryPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 loaded

				// Add the $obj1 (Oops_Db_CategoryLang) to the collection in $obj2 (Oops_Db_Category)
				$obj2->addCategoryLang($obj1);
			} // if joined row not null

			// Add objects for joined Oops_Db_Lang rows

			$key3 = Oops_Db_LangPeer::getPrimaryKeyHashFromRow($row, $startcol3);
			if ($key3 !== null) {
				$obj3 = Oops_Db_LangPeer::getInstanceFromPool($key3);
				if (!$obj3) {

					$cls = Oops_Db_LangPeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					Oops_Db_LangPeer::addInstanceToPool($obj3, $key3);
				} // if obj3 loaded

				// Add the $obj1 (Oops_Db_CategoryLang) to the collection in $obj3 (Oops_Db_Lang)
				$obj3->addCategoryLang($obj1);
			} // if joined row not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related Category table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptCategory(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(Oops_Db_CategoryLangPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			Oops_Db_CategoryLangPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY should not affect count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_CategoryLangPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(Oops_Db_CategoryLangPeer::ID_LANG, Oops_Db_LangPeer::ID_LANG, $join_behavior);

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
	 * Returns the number of rows matching criteria, joining the related Lang table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptLang(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(Oops_Db_CategoryLangPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			Oops_Db_CategoryLangPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY should not affect count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_CategoryLangPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(Oops_Db_CategoryLangPeer::ID_CATEGORY, Oops_Db_CategoryPeer::ID_CATEGORY, $join_behavior);

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
	 * Selects a collection of Oops_Db_CategoryLang objects pre-filled with all related objects except Category.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of Oops_Db_CategoryLang objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptCategory(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		Oops_Db_CategoryLangPeer::addSelectColumns($criteria);
		$startcol2 = Oops_Db_CategoryLangPeer::NUM_HYDRATE_COLUMNS;

		Oops_Db_LangPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + Oops_Db_LangPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(Oops_Db_CategoryLangPeer::ID_LANG, Oops_Db_LangPeer::ID_LANG, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = Oops_Db_CategoryLangPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = Oops_Db_CategoryLangPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = Oops_Db_CategoryLangPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				Oops_Db_CategoryLangPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined Oops_Db_Lang rows

				$key2 = Oops_Db_LangPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = Oops_Db_LangPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = Oops_Db_LangPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					Oops_Db_LangPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (Oops_Db_CategoryLang) to the collection in $obj2 (Oops_Db_Lang)
				$obj2->addCategoryLang($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of Oops_Db_CategoryLang objects pre-filled with all related objects except Lang.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of Oops_Db_CategoryLang objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptLang(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		Oops_Db_CategoryLangPeer::addSelectColumns($criteria);
		$startcol2 = Oops_Db_CategoryLangPeer::NUM_HYDRATE_COLUMNS;

		Oops_Db_CategoryPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + Oops_Db_CategoryPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(Oops_Db_CategoryLangPeer::ID_CATEGORY, Oops_Db_CategoryPeer::ID_CATEGORY, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = Oops_Db_CategoryLangPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = Oops_Db_CategoryLangPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = Oops_Db_CategoryLangPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				Oops_Db_CategoryLangPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined Oops_Db_Category rows

				$key2 = Oops_Db_CategoryPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = Oops_Db_CategoryPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = Oops_Db_CategoryPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					Oops_Db_CategoryPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (Oops_Db_CategoryLang) to the collection in $obj2 (Oops_Db_Category)
				$obj2->addCategoryLang($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
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
	  $dbMap = Propel::getDatabaseMap(Oops_Db_Propel_CategoryLangPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(Oops_Db_Propel_CategoryLangPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new Oops_Db_CategoryLangTableMap());
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
		return $withPrefix ? Oops_Db_CategoryLangPeer::CLASS_DEFAULT : Oops_Db_CategoryLangPeer::OM_CLASS;
	}

	/**
	 * Performs an INSERT on the database, given a Oops_Db_CategoryLang or Criteria object.
	 *
	 * @param      mixed $values Criteria or Oops_Db_CategoryLang object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_CategoryLangPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from Oops_Db_CategoryLang object
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
	 * Performs an UPDATE on the database, given a Oops_Db_CategoryLang or Criteria object.
	 *
	 * @param      mixed $values Criteria or Oops_Db_CategoryLang object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_CategoryLangPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(Oops_Db_CategoryLangPeer::ID_CATEGORY);
			$value = $criteria->remove(Oops_Db_CategoryLangPeer::ID_CATEGORY);
			if ($value) {
				$selectCriteria->add(Oops_Db_CategoryLangPeer::ID_CATEGORY, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(Oops_Db_CategoryLangPeer::TABLE_NAME);
			}

			$comparison = $criteria->getComparison(Oops_Db_CategoryLangPeer::ID_LANG);
			$value = $criteria->remove(Oops_Db_CategoryLangPeer::ID_LANG);
			if ($value) {
				$selectCriteria->add(Oops_Db_CategoryLangPeer::ID_LANG, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(Oops_Db_CategoryLangPeer::TABLE_NAME);
			}

		} else { // $values is Oops_Db_CategoryLang object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Deletes all rows from the category_lang table.
	 *
	 * @param      PropelPDO $con the connection to use
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll(PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_CategoryLangPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(Oops_Db_CategoryLangPeer::TABLE_NAME, $con, Oops_Db_CategoryLangPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			Oops_Db_CategoryLangPeer::clearInstancePool();
			Oops_Db_CategoryLangPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs a DELETE on the database, given a Oops_Db_CategoryLang or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or Oops_Db_CategoryLang object or primary key or array of primary keys
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
			$con = Propel::getConnection(Oops_Db_CategoryLangPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			Oops_Db_CategoryLangPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof Oops_Db_CategoryLang) { // it's a model object
			// invalidate the cache for this single object
			Oops_Db_CategoryLangPeer::removeInstanceFromPool($values);
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
				$criterion = $criteria->getNewCriterion(Oops_Db_CategoryLangPeer::ID_CATEGORY, $value[0]);
				$criterion->addAnd($criteria->getNewCriterion(Oops_Db_CategoryLangPeer::ID_LANG, $value[1]));
				$criteria->addOr($criterion);
				// we can invalidate the cache for this single PK
				Oops_Db_CategoryLangPeer::removeInstanceFromPool($value);
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
			Oops_Db_CategoryLangPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given Oops_Db_CategoryLang object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      Oops_Db_CategoryLang $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate($obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(Oops_Db_CategoryLangPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(Oops_Db_CategoryLangPeer::TABLE_NAME);

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

		return BasePeer::doValidate(Oops_Db_CategoryLangPeer::DATABASE_NAME, Oops_Db_CategoryLangPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve object using using composite pkey values.
	 * @param      int $id_category
	 * @param      int $id_lang
	 * @param      PropelPDO $con
	 * @return     Oops_Db_CategoryLang
	 */
	public static function retrieveByPK($id_category, $id_lang, PropelPDO $con = null) {
		$_instancePoolKey = serialize(array((string) $id_category, (string) $id_lang));
 		if (null !== ($obj = Oops_Db_CategoryLangPeer::getInstanceFromPool($_instancePoolKey))) {
 			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_CategoryLangPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		$criteria = new Criteria(Oops_Db_CategoryLangPeer::DATABASE_NAME);
		$criteria->add(Oops_Db_CategoryLangPeer::ID_CATEGORY, $id_category);
		$criteria->add(Oops_Db_CategoryLangPeer::ID_LANG, $id_lang);
		$v = Oops_Db_CategoryLangPeer::doSelect($criteria, $con);

		return !empty($v) ? $v[0] : null;
	}
} // Oops_Db_Propel_CategoryLangPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
Oops_Db_Propel_CategoryLangPeer::buildTableMap();

