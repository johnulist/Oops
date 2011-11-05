<?php


/**
 * Base class that represents a query for the 'djland_tax' table.
 *
 * 
 *
 * @method     Oops_Model_TaxQuery orderByIdTax($order = Criteria::ASC) Order by the id_tax column
 * @method     Oops_Model_TaxQuery orderByRate($order = Criteria::ASC) Order by the rate column
 * @method     Oops_Model_TaxQuery orderByActive($order = Criteria::ASC) Order by the active column
 *
 * @method     Oops_Model_TaxQuery groupByIdTax() Group by the id_tax column
 * @method     Oops_Model_TaxQuery groupByRate() Group by the rate column
 * @method     Oops_Model_TaxQuery groupByActive() Group by the active column
 *
 * @method     Oops_Model_TaxQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Model_TaxQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Model_TaxQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Model_Tax findOne(PropelPDO $con = null) Return the first Oops_Model_Tax matching the query
 * @method     Oops_Model_Tax findOneOrCreate(PropelPDO $con = null) Return the first Oops_Model_Tax matching the query, or a new Oops_Model_Tax object populated from the query conditions when no match is found
 *
 * @method     Oops_Model_Tax findOneByIdTax(int $id_tax) Return the first Oops_Model_Tax filtered by the id_tax column
 * @method     Oops_Model_Tax findOneByRate(string $rate) Return the first Oops_Model_Tax filtered by the rate column
 * @method     Oops_Model_Tax findOneByActive(boolean $active) Return the first Oops_Model_Tax filtered by the active column
 *
 * @method     array findByIdTax(int $id_tax) Return Oops_Model_Tax objects filtered by the id_tax column
 * @method     array findByRate(string $rate) Return Oops_Model_Tax objects filtered by the rate column
 * @method     array findByActive(boolean $active) Return Oops_Model_Tax objects filtered by the active column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Model_Base_TaxQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Model_Base_TaxQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Model_Tax', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Model_TaxQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Model_TaxQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Model_TaxQuery) {
			return $criteria;
		}
		$query = new Oops_Model_TaxQuery();
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
	 * $obj  = $c->findPk(12, $con);
	 * </code>
	 *
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Oops_Model_Tax|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Model_TaxPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Model_TaxPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Model_Tax A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_TAX`, `RATE`, `ACTIVE` FROM `djland_tax` WHERE `ID_TAX` = :p0';
		try {
			$stmt = $con->prepare($sql);
			$stmt->bindValue(':p0', $key, PDO::PARAM_INT);
			$stmt->execute();
		} catch (Exception $e) {
			Propel::log($e->getMessage(), Propel::LOG_ERR);
			throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
		}
		$obj = null;
		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$obj = new Oops_Model_Tax();
			$obj->hydrate($row);
			Oops_Model_TaxPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Model_Tax|array|mixed the result, formatted by the current formatter
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
	 * $objs = $c->findPks(array(12, 56, 832), $con);
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
	 * @return    Oops_Model_TaxQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Model_TaxPeer::ID_TAX, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Model_TaxQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Model_TaxPeer::ID_TAX, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_tax column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdTax(1234); // WHERE id_tax = 1234
	 * $query->filterByIdTax(array(12, 34)); // WHERE id_tax IN (12, 34)
	 * $query->filterByIdTax(array('min' => 12)); // WHERE id_tax > 12
	 * </code>
	 *
	 * @param     mixed $idTax The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_TaxQuery The current query, for fluid interface
	 */
	public function filterByIdTax($idTax = null, $comparison = null)
	{
		if (is_array($idTax) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Model_TaxPeer::ID_TAX, $idTax, $comparison);
	}

	/**
	 * Filter the query on the rate column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByRate(1234); // WHERE rate = 1234
	 * $query->filterByRate(array(12, 34)); // WHERE rate IN (12, 34)
	 * $query->filterByRate(array('min' => 12)); // WHERE rate > 12
	 * </code>
	 *
	 * @param     mixed $rate The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_TaxQuery The current query, for fluid interface
	 */
	public function filterByRate($rate = null, $comparison = null)
	{
		if (is_array($rate)) {
			$useMinMax = false;
			if (isset($rate['min'])) {
				$this->addUsingAlias(Oops_Model_TaxPeer::RATE, $rate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($rate['max'])) {
				$this->addUsingAlias(Oops_Model_TaxPeer::RATE, $rate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Model_TaxPeer::RATE, $rate, $comparison);
	}

	/**
	 * Filter the query on the active column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByActive(true); // WHERE active = true
	 * $query->filterByActive('yes'); // WHERE active = true
	 * </code>
	 *
	 * @param     boolean|string $active The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Model_TaxQuery The current query, for fluid interface
	 */
	public function filterByActive($active = null, $comparison = null)
	{
		if (is_string($active)) {
			$active = in_array(strtolower($active), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Model_TaxPeer::ACTIVE, $active, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Model_Tax $tax Object to remove from the list of results
	 *
	 * @return    Oops_Model_TaxQuery The current query, for fluid interface
	 */
	public function prune($tax = null)
	{
		if ($tax) {
			$this->addUsingAlias(Oops_Model_TaxPeer::ID_TAX, $tax->getIdTax(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Model_Base_TaxQuery