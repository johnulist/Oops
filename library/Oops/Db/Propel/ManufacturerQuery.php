<?php


/**
 * Base class that represents a query for the 'manufacturer' table.
 *
 * 
 *
 * @method     Oops_Db_ManufacturerQuery orderByIdManufacturer($order = Criteria::ASC) Order by the id_manufacturer column
 * @method     Oops_Db_ManufacturerQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     Oops_Db_ManufacturerQuery orderByDateAdd($order = Criteria::ASC) Order by the date_add column
 * @method     Oops_Db_ManufacturerQuery orderByDateUpd($order = Criteria::ASC) Order by the date_upd column
 * @method     Oops_Db_ManufacturerQuery orderByActive($order = Criteria::ASC) Order by the active column
 *
 * @method     Oops_Db_ManufacturerQuery groupByIdManufacturer() Group by the id_manufacturer column
 * @method     Oops_Db_ManufacturerQuery groupByName() Group by the name column
 * @method     Oops_Db_ManufacturerQuery groupByDateAdd() Group by the date_add column
 * @method     Oops_Db_ManufacturerQuery groupByDateUpd() Group by the date_upd column
 * @method     Oops_Db_ManufacturerQuery groupByActive() Group by the active column
 *
 * @method     Oops_Db_ManufacturerQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Db_ManufacturerQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Db_ManufacturerQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Db_ManufacturerQuery leftJoinProduct($relationAlias = null) Adds a LEFT JOIN clause to the query using the Product relation
 * @method     Oops_Db_ManufacturerQuery rightJoinProduct($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Product relation
 * @method     Oops_Db_ManufacturerQuery innerJoinProduct($relationAlias = null) Adds a INNER JOIN clause to the query using the Product relation
 *
 * @method     Oops_Db_Manufacturer findOne(PropelPDO $con = null) Return the first Oops_Db_Manufacturer matching the query
 * @method     Oops_Db_Manufacturer findOneOrCreate(PropelPDO $con = null) Return the first Oops_Db_Manufacturer matching the query, or a new Oops_Db_Manufacturer object populated from the query conditions when no match is found
 *
 * @method     Oops_Db_Manufacturer findOneByIdManufacturer(int $id_manufacturer) Return the first Oops_Db_Manufacturer filtered by the id_manufacturer column
 * @method     Oops_Db_Manufacturer findOneByName(string $name) Return the first Oops_Db_Manufacturer filtered by the name column
 * @method     Oops_Db_Manufacturer findOneByDateAdd(string $date_add) Return the first Oops_Db_Manufacturer filtered by the date_add column
 * @method     Oops_Db_Manufacturer findOneByDateUpd(string $date_upd) Return the first Oops_Db_Manufacturer filtered by the date_upd column
 * @method     Oops_Db_Manufacturer findOneByActive(boolean $active) Return the first Oops_Db_Manufacturer filtered by the active column
 *
 * @method     array findByIdManufacturer(int $id_manufacturer) Return Oops_Db_Manufacturer objects filtered by the id_manufacturer column
 * @method     array findByName(string $name) Return Oops_Db_Manufacturer objects filtered by the name column
 * @method     array findByDateAdd(string $date_add) Return Oops_Db_Manufacturer objects filtered by the date_add column
 * @method     array findByDateUpd(string $date_upd) Return Oops_Db_Manufacturer objects filtered by the date_upd column
 * @method     array findByActive(boolean $active) Return Oops_Db_Manufacturer objects filtered by the active column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Db_Propel_ManufacturerQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Db_Propel_ManufacturerQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Db_Manufacturer', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Db_ManufacturerQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Db_ManufacturerQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Db_ManufacturerQuery) {
			return $criteria;
		}
		$query = new Oops_Db_ManufacturerQuery();
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
	 * @return    Oops_Db_Manufacturer|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Db_ManufacturerPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_ManufacturerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Db_Manufacturer A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_MANUFACTURER`, `NAME`, `DATE_ADD`, `DATE_UPD`, `ACTIVE` FROM `' . _DB_PREFIX_ . 'manufacturer` WHERE `ID_MANUFACTURER` = :p0';
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
			$obj = new Oops_Db_Manufacturer();
			$obj->hydrate($row);
			Oops_Db_ManufacturerPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Oops_Db_Manufacturer|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Db_ManufacturerQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Oops_Db_ManufacturerPeer::ID_MANUFACTURER, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Db_ManufacturerQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Oops_Db_ManufacturerPeer::ID_MANUFACTURER, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_manufacturer column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdManufacturer(1234); // WHERE id_manufacturer = 1234
	 * $query->filterByIdManufacturer(array(12, 34)); // WHERE id_manufacturer IN (12, 34)
	 * $query->filterByIdManufacturer(array('min' => 12)); // WHERE id_manufacturer > 12
	 * </code>
	 *
	 * @param     mixed $idManufacturer The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_ManufacturerQuery The current query, for fluid interface
	 */
	public function filterByIdManufacturer($idManufacturer = null, $comparison = null)
	{
		if (is_array($idManufacturer) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Db_ManufacturerPeer::ID_MANUFACTURER, $idManufacturer, $comparison);
	}

	/**
	 * Filter the query on the name column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
	 * $query->filterByName('%fooValue%'); // WHERE name LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $name The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_ManufacturerQuery The current query, for fluid interface
	 */
	public function filterByName($name = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($name)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $name)) {
				$name = str_replace('*', '%', $name);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Db_ManufacturerPeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the date_add column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDateAdd('2011-03-14'); // WHERE date_add = '2011-03-14'
	 * $query->filterByDateAdd('now'); // WHERE date_add = '2011-03-14'
	 * $query->filterByDateAdd(array('max' => 'yesterday')); // WHERE date_add > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $dateAdd The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_ManufacturerQuery The current query, for fluid interface
	 */
	public function filterByDateAdd($dateAdd = null, $comparison = null)
	{
		if (is_array($dateAdd)) {
			$useMinMax = false;
			if (isset($dateAdd['min'])) {
				$this->addUsingAlias(Oops_Db_ManufacturerPeer::DATE_ADD, $dateAdd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateAdd['max'])) {
				$this->addUsingAlias(Oops_Db_ManufacturerPeer::DATE_ADD, $dateAdd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_ManufacturerPeer::DATE_ADD, $dateAdd, $comparison);
	}

	/**
	 * Filter the query on the date_upd column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDateUpd('2011-03-14'); // WHERE date_upd = '2011-03-14'
	 * $query->filterByDateUpd('now'); // WHERE date_upd = '2011-03-14'
	 * $query->filterByDateUpd(array('max' => 'yesterday')); // WHERE date_upd > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $dateUpd The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_ManufacturerQuery The current query, for fluid interface
	 */
	public function filterByDateUpd($dateUpd = null, $comparison = null)
	{
		if (is_array($dateUpd)) {
			$useMinMax = false;
			if (isset($dateUpd['min'])) {
				$this->addUsingAlias(Oops_Db_ManufacturerPeer::DATE_UPD, $dateUpd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateUpd['max'])) {
				$this->addUsingAlias(Oops_Db_ManufacturerPeer::DATE_UPD, $dateUpd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_ManufacturerPeer::DATE_UPD, $dateUpd, $comparison);
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
	 * @return    Oops_Db_ManufacturerQuery The current query, for fluid interface
	 */
	public function filterByActive($active = null, $comparison = null)
	{
		if (is_string($active)) {
			$active = in_array(strtolower($active), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(Oops_Db_ManufacturerPeer::ACTIVE, $active, $comparison);
	}

	/**
	 * Filter the query by a related Oops_Db_Product object
	 *
	 * @param     Oops_Db_Product $product  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_ManufacturerQuery The current query, for fluid interface
	 */
	public function filterByProduct($product, $comparison = null)
	{
		if ($product instanceof Oops_Db_Product) {
			return $this
				->addUsingAlias(Oops_Db_ManufacturerPeer::ID_MANUFACTURER, $product->getIdManufacturer(), $comparison);
		} elseif ($product instanceof PropelCollection) {
			return $this
				->useProductQuery()
				->filterByPrimaryKeys($product->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByProduct() only accepts arguments of type Oops_Db_Product or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Product relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    Oops_Db_ManufacturerQuery The current query, for fluid interface
	 */
	public function joinProduct($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Product');

		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}

		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'Product');
		}

		return $this;
	}

	/**
	 * Use the Product relation Product object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    Oops_Db_ProductQuery A secondary query class using the current class as primary query
	 */
	public function useProductQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinProduct($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Product', 'Oops_Db_ProductQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Db_Manufacturer $manufacturer Object to remove from the list of results
	 *
	 * @return    Oops_Db_ManufacturerQuery The current query, for fluid interface
	 */
	public function prune($manufacturer = null)
	{
		if ($manufacturer) {
			$this->addUsingAlias(Oops_Db_ManufacturerPeer::ID_MANUFACTURER, $manufacturer->getIdManufacturer(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // Oops_Db_Propel_ManufacturerQuery