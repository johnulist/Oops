<?php


/**
 * Base class that represents a query for the 'module_country' table.
 *
 * 
 *
 * @method     Oops_Db_ModuleCountryQuery orderByIdModule($order = Criteria::ASC) Order by the id_module column
 * @method     Oops_Db_ModuleCountryQuery orderByIdCountry($order = Criteria::ASC) Order by the id_country column
 *
 * @method     Oops_Db_ModuleCountryQuery groupByIdModule() Group by the id_module column
 * @method     Oops_Db_ModuleCountryQuery groupByIdCountry() Group by the id_country column
 *
 * @method     Oops_Db_ModuleCountryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Db_ModuleCountryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Db_ModuleCountryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Db_ModuleCountry findOne(PropelPDO $con = null) Return the first Oops_Db_ModuleCountry matching the query
 * @method     Oops_Db_ModuleCountry findOneOrCreate(PropelPDO $con = null) Return the first Oops_Db_ModuleCountry matching the query, or a new Oops_Db_ModuleCountry object populated from the query conditions when no match is found
 *
 * @method     Oops_Db_ModuleCountry findOneByIdModule(int $id_module) Return the first Oops_Db_ModuleCountry filtered by the id_module column
 * @method     Oops_Db_ModuleCountry findOneByIdCountry(int $id_country) Return the first Oops_Db_ModuleCountry filtered by the id_country column
 *
 * @method     array findByIdModule(int $id_module) Return Oops_Db_ModuleCountry objects filtered by the id_module column
 * @method     array findByIdCountry(int $id_country) Return Oops_Db_ModuleCountry objects filtered by the id_country column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Db_Propel_ModuleCountryQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Db_Propel_ModuleCountryQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Db_ModuleCountry', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Db_ModuleCountryQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Db_ModuleCountryQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Db_ModuleCountryQuery) {
			return $criteria;
		}
		$query = new Oops_Db_ModuleCountryQuery();
		if (null !== $modelAlias) {
			$query->setModelAlias($modelAlias);
		}
		if ($criteria instanceof Criteria) {
			$query->mergeWith($criteria);
		}
		return $query;
	}

	/**
	 * Find object by primary key.
	 * Propel uses the instance pool to skip the database if the object exists.
	 * Go fast if the query is untouched.
	 *
	 * <code>
	 * $obj = $c->findPk(array(12, 34), $con);
	 * </code>
	 *
	 * @param     array[$id_module, $id_country] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Oops_Db_ModuleCountry|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Db_ModuleCountryPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_ModuleCountryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		$this->basePreSelect($con);
		if ($this->formatter || $this->modelAlias || $this->with || $this->select
		 || $this->selectColumns || $this->asColumns || $this->selectModifiers
		 || $this->map || $this->having || $this->joins) {
			return $this->findPkComplex($key, $con);
		} else {
			return $this->findPkSimple($key, $con);
		}
	}

	/**
	 * Find object by primary key using raw SQL to go fast.
	 * Bypass doSelect() and the object formatter by using generated code.
	 *
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con A connection object
	 *
	 * @return    Oops_Db_ModuleCountry A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_MODULE`, `ID_COUNTRY` FROM `' . _DB_PREFIX_ . 'module_country` WHERE `ID_MODULE` = :p0 AND `ID_COUNTRY` = :p1';
		try {
			$stmt = $con->prepare($sql);
			$stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
			$stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
			$stmt->execute();
		} catch (Exception $e) {
			Propel::log($e->getMessage(), Propel::LOG_ERR);
			throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
		}
		$obj = null;
		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$obj = new Oops_Db_ModuleCountry();
			$obj->hydrate($row);
			Oops_Db_ModuleCountryPeer::addInstanceToPool($obj, serialize(array((string) $row[0], (string) $row[1])));
		}
		$stmt->closeCursor();

		return $obj;
	}

	/**
	 * Find object by primary key.
	 *
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con A connection object
	 *
	 * @return    Oops_Db_ModuleCountry|array|mixed the result, formatted by the current formatter
	 */
	protected function findPkComplex($key, $con)
	{
		// As the query uses a PK condition, no limit(1) is necessary.
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		$stmt = $criteria
			->filterByPrimaryKey($key)
			->doSelect($con);
		return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
	}

	/**
	 * Find objects by primary key
	 * <code>
	 * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
	 * </code>
	 * @param     array $keys Primary keys to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
	 */
	public function findPks($keys, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
		}
		$this->basePreSelect($con);
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		$stmt = $criteria
			->filterByPrimaryKeys($keys)
			->doSelect($con);
		return $criteria->getFormatter()->init($criteria)->format($stmt);
	}

	/**
	 * Filter the query by primary key
	 *
	 * @param     mixed $key Primary key to use for the query
	 *
	 * @return    Oops_Db_ModuleCountryQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(Oops_Db_ModuleCountryPeer::ID_MODULE, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(Oops_Db_ModuleCountryPeer::ID_COUNTRY, $key[1], Criteria::EQUAL);

		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Db_ModuleCountryQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(Oops_Db_ModuleCountryPeer::ID_MODULE, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(Oops_Db_ModuleCountryPeer::ID_COUNTRY, $key[1], Criteria::EQUAL);
			$cton0->addAnd($cton1);
			$this->addOr($cton0);
		}

		return $this;
	}

	/**
	 * Filter the query on the id_module column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdModule(1234); // WHERE id_module = 1234
	 * $query->filterByIdModule(array(12, 34)); // WHERE id_module IN (12, 34)
	 * $query->filterByIdModule(array('min' => 12)); // WHERE id_module > 12
	 * </code>
	 *
	 * @param     mixed $idModule The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_ModuleCountryQuery The current query, for fluid interface
	 */
	public function filterByIdModule($idModule = null, $comparison = null)
	{
		if (is_array($idModule) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Db_ModuleCountryPeer::ID_MODULE, $idModule, $comparison);
	}

	/**
	 * Filter the query on the id_country column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdCountry(1234); // WHERE id_country = 1234
	 * $query->filterByIdCountry(array(12, 34)); // WHERE id_country IN (12, 34)
	 * $query->filterByIdCountry(array('min' => 12)); // WHERE id_country > 12
	 * </code>
	 *
	 * @param     mixed $idCountry The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_ModuleCountryQuery The current query, for fluid interface
	 */
	public function filterByIdCountry($idCountry = null, $comparison = null)
	{
		if (is_array($idCountry) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Db_ModuleCountryPeer::ID_COUNTRY, $idCountry, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Db_ModuleCountry $moduleCountry Object to remove from the list of results
	 *
	 * @return    Oops_Db_ModuleCountryQuery The current query, for fluid interface
	 */
	public function prune($moduleCountry = null)
	{
		if ($moduleCountry) {
			$this->addCond('pruneCond0', $this->getAliasedColName(Oops_Db_ModuleCountryPeer::ID_MODULE), $moduleCountry->getIdModule(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(Oops_Db_ModuleCountryPeer::ID_COUNTRY), $moduleCountry->getIdCountry(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
		}

		return $this;
	}

} // Oops_Db_Propel_ModuleCountryQuery