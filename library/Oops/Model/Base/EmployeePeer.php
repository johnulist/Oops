<?php


/**
 * Base static class for performing query and update operations on the 'djland_employee' table.
 *
 * 
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_EmployeePeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'prestashop';

	/** the table name for this class */
	const TABLE_NAME = 'djland_employee';

	/** the related Propel class for this table */
	const OM_CLASS = 'Oops_Model_Employee';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'prestashop.Oops_Model_Employee';

	/** the related TableMap class for this table */
	const TM_CLASS = 'Oops_Model_EmployeeTableMap';

	/** The total number of columns. */
	const NUM_COLUMNS = 14;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
	const NUM_HYDRATE_COLUMNS = 14;

	/** the column name for the ID_EMPLOYEE field */
	const ID_EMPLOYEE = 'djland_employee.ID_EMPLOYEE';

	/** the column name for the ID_PROFILE field */
	const ID_PROFILE = 'djland_employee.ID_PROFILE';

	/** the column name for the ID_LANG field */
	const ID_LANG = 'djland_employee.ID_LANG';

	/** the column name for the LASTNAME field */
	const LASTNAME = 'djland_employee.LASTNAME';

	/** the column name for the FIRSTNAME field */
	const FIRSTNAME = 'djland_employee.FIRSTNAME';

	/** the column name for the EMAIL field */
	const EMAIL = 'djland_employee.EMAIL';

	/** the column name for the PASSWD field */
	const PASSWD = 'djland_employee.PASSWD';

	/** the column name for the LAST_PASSWD_GEN field */
	const LAST_PASSWD_GEN = 'djland_employee.LAST_PASSWD_GEN';

	/** the column name for the STATS_DATE_FROM field */
	const STATS_DATE_FROM = 'djland_employee.STATS_DATE_FROM';

	/** the column name for the STATS_DATE_TO field */
	const STATS_DATE_TO = 'djland_employee.STATS_DATE_TO';

	/** the column name for the BO_COLOR field */
	const BO_COLOR = 'djland_employee.BO_COLOR';

	/** the column name for the BO_THEME field */
	const BO_THEME = 'djland_employee.BO_THEME';

	/** the column name for the BO_UIMODE field */
	const BO_UIMODE = 'djland_employee.BO_UIMODE';

	/** the column name for the ACTIVE field */
	const ACTIVE = 'djland_employee.ACTIVE';

	/** The default string format for model objects of the related table **/
	const DEFAULT_STRING_FORMAT = 'YAML';

	/**
	 * An identiy map to hold any loaded instances of Oops_Model_Employee objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array Oops_Model_Employee[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	protected static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('IdEmployee', 'IdProfile', 'IdLang', 'Lastname', 'Firstname', 'Email', 'Passwd', 'LastPasswdGen', 'StatsDateFrom', 'StatsDateTo', 'BoColor', 'BoTheme', 'BoUimode', 'Active', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('idEmployee', 'idProfile', 'idLang', 'lastname', 'firstname', 'email', 'passwd', 'lastPasswdGen', 'statsDateFrom', 'statsDateTo', 'boColor', 'boTheme', 'boUimode', 'active', ),
		BasePeer::TYPE_COLNAME => array (self::ID_EMPLOYEE, self::ID_PROFILE, self::ID_LANG, self::LASTNAME, self::FIRSTNAME, self::EMAIL, self::PASSWD, self::LAST_PASSWD_GEN, self::STATS_DATE_FROM, self::STATS_DATE_TO, self::BO_COLOR, self::BO_THEME, self::BO_UIMODE, self::ACTIVE, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID_EMPLOYEE', 'ID_PROFILE', 'ID_LANG', 'LASTNAME', 'FIRSTNAME', 'EMAIL', 'PASSWD', 'LAST_PASSWD_GEN', 'STATS_DATE_FROM', 'STATS_DATE_TO', 'BO_COLOR', 'BO_THEME', 'BO_UIMODE', 'ACTIVE', ),
		BasePeer::TYPE_FIELDNAME => array ('id_employee', 'id_profile', 'id_lang', 'lastname', 'firstname', 'email', 'passwd', 'last_passwd_gen', 'stats_date_from', 'stats_date_to', 'bo_color', 'bo_theme', 'bo_uimode', 'active', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	protected static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('IdEmployee' => 0, 'IdProfile' => 1, 'IdLang' => 2, 'Lastname' => 3, 'Firstname' => 4, 'Email' => 5, 'Passwd' => 6, 'LastPasswdGen' => 7, 'StatsDateFrom' => 8, 'StatsDateTo' => 9, 'BoColor' => 10, 'BoTheme' => 11, 'BoUimode' => 12, 'Active' => 13, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('idEmployee' => 0, 'idProfile' => 1, 'idLang' => 2, 'lastname' => 3, 'firstname' => 4, 'email' => 5, 'passwd' => 6, 'lastPasswdGen' => 7, 'statsDateFrom' => 8, 'statsDateTo' => 9, 'boColor' => 10, 'boTheme' => 11, 'boUimode' => 12, 'active' => 13, ),
		BasePeer::TYPE_COLNAME => array (self::ID_EMPLOYEE => 0, self::ID_PROFILE => 1, self::ID_LANG => 2, self::LASTNAME => 3, self::FIRSTNAME => 4, self::EMAIL => 5, self::PASSWD => 6, self::LAST_PASSWD_GEN => 7, self::STATS_DATE_FROM => 8, self::STATS_DATE_TO => 9, self::BO_COLOR => 10, self::BO_THEME => 11, self::BO_UIMODE => 12, self::ACTIVE => 13, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID_EMPLOYEE' => 0, 'ID_PROFILE' => 1, 'ID_LANG' => 2, 'LASTNAME' => 3, 'FIRSTNAME' => 4, 'EMAIL' => 5, 'PASSWD' => 6, 'LAST_PASSWD_GEN' => 7, 'STATS_DATE_FROM' => 8, 'STATS_DATE_TO' => 9, 'BO_COLOR' => 10, 'BO_THEME' => 11, 'BO_UIMODE' => 12, 'ACTIVE' => 13, ),
		BasePeer::TYPE_FIELDNAME => array ('id_employee' => 0, 'id_profile' => 1, 'id_lang' => 2, 'lastname' => 3, 'firstname' => 4, 'email' => 5, 'passwd' => 6, 'last_passwd_gen' => 7, 'stats_date_from' => 8, 'stats_date_to' => 9, 'bo_color' => 10, 'bo_theme' => 11, 'bo_uimode' => 12, 'active' => 13, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
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
	 * @param      string $column The column name for current table. (i.e. Oops_Model_EmployeePeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(Oops_Model_EmployeePeer::TABLE_NAME.'.', $alias.'.', $column);
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
			$criteria->addSelectColumn(Oops_Model_EmployeePeer::ID_EMPLOYEE);
			$criteria->addSelectColumn(Oops_Model_EmployeePeer::ID_PROFILE);
			$criteria->addSelectColumn(Oops_Model_EmployeePeer::ID_LANG);
			$criteria->addSelectColumn(Oops_Model_EmployeePeer::LASTNAME);
			$criteria->addSelectColumn(Oops_Model_EmployeePeer::FIRSTNAME);
			$criteria->addSelectColumn(Oops_Model_EmployeePeer::EMAIL);
			$criteria->addSelectColumn(Oops_Model_EmployeePeer::PASSWD);
			$criteria->addSelectColumn(Oops_Model_EmployeePeer::LAST_PASSWD_GEN);
			$criteria->addSelectColumn(Oops_Model_EmployeePeer::STATS_DATE_FROM);
			$criteria->addSelectColumn(Oops_Model_EmployeePeer::STATS_DATE_TO);
			$criteria->addSelectColumn(Oops_Model_EmployeePeer::BO_COLOR);
			$criteria->addSelectColumn(Oops_Model_EmployeePeer::BO_THEME);
			$criteria->addSelectColumn(Oops_Model_EmployeePeer::BO_UIMODE);
			$criteria->addSelectColumn(Oops_Model_EmployeePeer::ACTIVE);
		} else {
			$criteria->addSelectColumn($alias . '.ID_EMPLOYEE');
			$criteria->addSelectColumn($alias . '.ID_PROFILE');
			$criteria->addSelectColumn($alias . '.ID_LANG');
			$criteria->addSelectColumn($alias . '.LASTNAME');
			$criteria->addSelectColumn($alias . '.FIRSTNAME');
			$criteria->addSelectColumn($alias . '.EMAIL');
			$criteria->addSelectColumn($alias . '.PASSWD');
			$criteria->addSelectColumn($alias . '.LAST_PASSWD_GEN');
			$criteria->addSelectColumn($alias . '.STATS_DATE_FROM');
			$criteria->addSelectColumn($alias . '.STATS_DATE_TO');
			$criteria->addSelectColumn($alias . '.BO_COLOR');
			$criteria->addSelectColumn($alias . '.BO_THEME');
			$criteria->addSelectColumn($alias . '.BO_UIMODE');
			$criteria->addSelectColumn($alias . '.ACTIVE');
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
		$criteria->setPrimaryTableName(Oops_Model_EmployeePeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			Oops_Model_EmployeePeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_EmployeePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return     Oops_Model_Employee
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = Oops_Model_EmployeePeer::doSelect($critcopy, $con);
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
		return Oops_Model_EmployeePeer::populateObjects(Oops_Model_EmployeePeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(Oops_Model_EmployeePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			Oops_Model_EmployeePeer::addSelectColumns($criteria);
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
	 * @param      Oops_Model_Employee $value A Oops_Model_Employee object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool($obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getIdEmployee();
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
	 * @param      mixed $value A Oops_Model_Employee object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof Oops_Model_Employee) {
				$key = (string) $value->getIdEmployee();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Oops_Model_Employee object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     Oops_Model_Employee Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
	 * Method to invalidate the instance pool of all tables related to djland_employee
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
		if ($row[$startcol] === null) {
			return null;
		}
		return (string) $row[$startcol];
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
		return (int) $row[$startcol];
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
		$cls = Oops_Model_EmployeePeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = Oops_Model_EmployeePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = Oops_Model_EmployeePeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				Oops_Model_EmployeePeer::addInstanceToPool($obj, $key);
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
	 * @return     array (Oops_Model_Employee object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = Oops_Model_EmployeePeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = Oops_Model_EmployeePeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + Oops_Model_EmployeePeer::NUM_HYDRATE_COLUMNS;
		} else {
			$cls = Oops_Model_EmployeePeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			Oops_Model_EmployeePeer::addInstanceToPool($obj, $key);
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
	  $dbMap = Propel::getDatabaseMap(Oops_Model_Base_EmployeePeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(Oops_Model_Base_EmployeePeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new Oops_Model_EmployeeTableMap());
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
		return $withPrefix ? Oops_Model_EmployeePeer::CLASS_DEFAULT : Oops_Model_EmployeePeer::OM_CLASS;
	}

	/**
	 * Performs an INSERT on the database, given a Oops_Model_Employee or Criteria object.
	 *
	 * @param      mixed $values Criteria or Oops_Model_Employee object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_EmployeePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from Oops_Model_Employee object
		}

		if ($criteria->containsKey(Oops_Model_EmployeePeer::ID_EMPLOYEE) && $criteria->keyContainsValue(Oops_Model_EmployeePeer::ID_EMPLOYEE) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.Oops_Model_EmployeePeer::ID_EMPLOYEE.')');
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
	 * Performs an UPDATE on the database, given a Oops_Model_Employee or Criteria object.
	 *
	 * @param      mixed $values Criteria or Oops_Model_Employee object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_EmployeePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(Oops_Model_EmployeePeer::ID_EMPLOYEE);
			$value = $criteria->remove(Oops_Model_EmployeePeer::ID_EMPLOYEE);
			if ($value) {
				$selectCriteria->add(Oops_Model_EmployeePeer::ID_EMPLOYEE, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(Oops_Model_EmployeePeer::TABLE_NAME);
			}

		} else { // $values is Oops_Model_Employee object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Deletes all rows from the djland_employee table.
	 *
	 * @param      PropelPDO $con the connection to use
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll(PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_EmployeePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(Oops_Model_EmployeePeer::TABLE_NAME, $con, Oops_Model_EmployeePeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			Oops_Model_EmployeePeer::clearInstancePool();
			Oops_Model_EmployeePeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs a DELETE on the database, given a Oops_Model_Employee or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or Oops_Model_Employee object or primary key or array of primary keys
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
			$con = Propel::getConnection(Oops_Model_EmployeePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			Oops_Model_EmployeePeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof Oops_Model_Employee) { // it's a model object
			// invalidate the cache for this single object
			Oops_Model_EmployeePeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(Oops_Model_EmployeePeer::ID_EMPLOYEE, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				Oops_Model_EmployeePeer::removeInstanceFromPool($singleval);
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
			Oops_Model_EmployeePeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given Oops_Model_Employee object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      Oops_Model_Employee $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate($obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(Oops_Model_EmployeePeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(Oops_Model_EmployeePeer::TABLE_NAME);

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

		return BasePeer::doValidate(Oops_Model_EmployeePeer::DATABASE_NAME, Oops_Model_EmployeePeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     Oops_Model_Employee
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = Oops_Model_EmployeePeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_EmployeePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(Oops_Model_EmployeePeer::DATABASE_NAME);
		$criteria->add(Oops_Model_EmployeePeer::ID_EMPLOYEE, $pk);

		$v = Oops_Model_EmployeePeer::doSelect($criteria, $con);

		return !empty($v) > 0 ? $v[0] : null;
	}

	/**
	 * Retrieve multiple objects by pkey.
	 *
	 * @param      array $pks List of primary keys
	 * @param      PropelPDO $con the connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function retrieveByPKs($pks, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_EmployeePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(Oops_Model_EmployeePeer::DATABASE_NAME);
			$criteria->add(Oops_Model_EmployeePeer::ID_EMPLOYEE, $pks, Criteria::IN);
			$objs = Oops_Model_EmployeePeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // Oops_Model_Base_EmployeePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
Oops_Model_Base_EmployeePeer::buildTableMap();

