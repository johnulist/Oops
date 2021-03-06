<?php


/**
 * Base class that represents a query for the 'county_zip_code' table.
 *
 * 
 *
 * @method     Oops_Db_CountyZipCodeQuery orderByIdCounty($order = Criteria::ASC) Order by the id_county column
 * @method     Oops_Db_CountyZipCodeQuery orderByFromZipCode($order = Criteria::ASC) Order by the from_zip_code column
 * @method     Oops_Db_CountyZipCodeQuery orderByToZipCode($order = Criteria::ASC) Order by the to_zip_code column
 *
 * @method     Oops_Db_CountyZipCodeQuery groupByIdCounty() Group by the id_county column
 * @method     Oops_Db_CountyZipCodeQuery groupByFromZipCode() Group by the from_zip_code column
 * @method     Oops_Db_CountyZipCodeQuery groupByToZipCode() Group by the to_zip_code column
 *
 * @method     Oops_Db_CountyZipCodeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Db_CountyZipCodeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Db_CountyZipCodeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Db_CountyZipCode findOne(PropelPDO $con = null) Return the first Oops_Db_CountyZipCode matching the query
 * @method     Oops_Db_CountyZipCode findOneOrCreate(PropelPDO $con = null) Return the first Oops_Db_CountyZipCode matching the query, or a new Oops_Db_CountyZipCode object populated from the query conditions when no match is found
 *
 * @method     Oops_Db_CountyZipCode findOneByIdCounty(int $id_county) Return the first Oops_Db_CountyZipCode filtered by the id_county column
 * @method     Oops_Db_CountyZipCode findOneByFromZipCode(int $from_zip_code) Return the first Oops_Db_CountyZipCode filtered by the from_zip_code column
 * @method     Oops_Db_CountyZipCode findOneByToZipCode(int $to_zip_code) Return the first Oops_Db_CountyZipCode filtered by the to_zip_code column
 *
 * @method     array findByIdCounty(int $id_county) Return Oops_Db_CountyZipCode objects filtered by the id_county column
 * @method     array findByFromZipCode(int $from_zip_code) Return Oops_Db_CountyZipCode objects filtered by the from_zip_code column
 * @method     array findByToZipCode(int $to_zip_code) Return Oops_Db_CountyZipCode objects filtered by the to_zip_code column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Db_Propel_CountyZipCodeQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Db_Propel_CountyZipCodeQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Db_CountyZipCode', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Db_CountyZipCodeQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Db_CountyZipCodeQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Db_CountyZipCodeQuery) {
			return $criteria;
		}
		$query = new Oops_Db_CountyZipCodeQuery();
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
	 * $obj = $c->findPk(array(12, 34, 56), $con);
	 * </code>
	 *
	 * @param     array[$id_county, $from_zip_code, $to_zip_code] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Oops_Db_CountyZipCode|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Db_CountyZipCodePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_CountyZipCodePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Db_CountyZipCode A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_COUNTY`, `FROM_ZIP_CODE`, `TO_ZIP_CODE` FROM `' . _DB_PREFIX_ . 'county_zip_code` WHERE `ID_COUNTY` = :p0 AND `FROM_ZIP_CODE` = :p1 AND `TO_ZIP_CODE` = :p2';
		try {
			$stmt = $con->prepare($sql);
			$stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
			$stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
			$stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
			$stmt->execute();
		} catch (Exception $e) {
			Propel::log($e->getMessage(), Propel::LOG_ERR);
			throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
		}
		$obj = null;
		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$obj = new Oops_Db_CountyZipCode();
			$obj->hydrate($row);
			Oops_Db_CountyZipCodePeer::addInstanceToPool($obj, serialize(array((string) $row[0], (string) $row[1], (string) $row[2])));
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
	 * @return    Oops_Db_CountyZipCode|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Db_CountyZipCodeQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(Oops_Db_CountyZipCodePeer::ID_COUNTY, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(Oops_Db_CountyZipCodePeer::FROM_ZIP_CODE, $key[1], Criteria::EQUAL);
		$this->addUsingAlias(Oops_Db_CountyZipCodePeer::TO_ZIP_CODE, $key[2], Criteria::EQUAL);

		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Db_CountyZipCodeQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(Oops_Db_CountyZipCodePeer::ID_COUNTY, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(Oops_Db_CountyZipCodePeer::FROM_ZIP_CODE, $key[1], Criteria::EQUAL);
			$cton0->addAnd($cton1);
			$cton2 = $this->getNewCriterion(Oops_Db_CountyZipCodePeer::TO_ZIP_CODE, $key[2], Criteria::EQUAL);
			$cton0->addAnd($cton2);
			$this->addOr($cton0);
		}

		return $this;
	}

	/**
	 * Filter the query on the id_county column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdCounty(1234); // WHERE id_county = 1234
	 * $query->filterByIdCounty(array(12, 34)); // WHERE id_county IN (12, 34)
	 * $query->filterByIdCounty(array('min' => 12)); // WHERE id_county > 12
	 * </code>
	 *
	 * @param     mixed $idCounty The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_CountyZipCodeQuery The current query, for fluid interface
	 */
	public function filterByIdCounty($idCounty = null, $comparison = null)
	{
		if (is_array($idCounty) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Db_CountyZipCodePeer::ID_COUNTY, $idCounty, $comparison);
	}

	/**
	 * Filter the query on the from_zip_code column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByFromZipCode(1234); // WHERE from_zip_code = 1234
	 * $query->filterByFromZipCode(array(12, 34)); // WHERE from_zip_code IN (12, 34)
	 * $query->filterByFromZipCode(array('min' => 12)); // WHERE from_zip_code > 12
	 * </code>
	 *
	 * @param     mixed $fromZipCode The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_CountyZipCodeQuery The current query, for fluid interface
	 */
	public function filterByFromZipCode($fromZipCode = null, $comparison = null)
	{
		if (is_array($fromZipCode) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Db_CountyZipCodePeer::FROM_ZIP_CODE, $fromZipCode, $comparison);
	}

	/**
	 * Filter the query on the to_zip_code column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByToZipCode(1234); // WHERE to_zip_code = 1234
	 * $query->filterByToZipCode(array(12, 34)); // WHERE to_zip_code IN (12, 34)
	 * $query->filterByToZipCode(array('min' => 12)); // WHERE to_zip_code > 12
	 * </code>
	 *
	 * @param     mixed $toZipCode The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_CountyZipCodeQuery The current query, for fluid interface
	 */
	public function filterByToZipCode($toZipCode = null, $comparison = null)
	{
		if (is_array($toZipCode) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Db_CountyZipCodePeer::TO_ZIP_CODE, $toZipCode, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Db_CountyZipCode $countyZipCode Object to remove from the list of results
	 *
	 * @return    Oops_Db_CountyZipCodeQuery The current query, for fluid interface
	 */
	public function prune($countyZipCode = null)
	{
		if ($countyZipCode) {
			$this->addCond('pruneCond0', $this->getAliasedColName(Oops_Db_CountyZipCodePeer::ID_COUNTY), $countyZipCode->getIdCounty(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(Oops_Db_CountyZipCodePeer::FROM_ZIP_CODE), $countyZipCode->getFromZipCode(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond2', $this->getAliasedColName(Oops_Db_CountyZipCodePeer::TO_ZIP_CODE), $countyZipCode->getToZipCode(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
		}

		return $this;
	}

} // Oops_Db_Propel_CountyZipCodeQuery