<?php


/**
 * Base class that represents a query for the 'pack' table.
 *
 * 
 *
 * @method     Oops_Db_PackQuery orderByIdProductPack($order = Criteria::ASC) Order by the id_product_pack column
 * @method     Oops_Db_PackQuery orderByIdProductItem($order = Criteria::ASC) Order by the id_product_item column
 * @method     Oops_Db_PackQuery orderByQuantity($order = Criteria::ASC) Order by the quantity column
 *
 * @method     Oops_Db_PackQuery groupByIdProductPack() Group by the id_product_pack column
 * @method     Oops_Db_PackQuery groupByIdProductItem() Group by the id_product_item column
 * @method     Oops_Db_PackQuery groupByQuantity() Group by the quantity column
 *
 * @method     Oops_Db_PackQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Db_PackQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Db_PackQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Db_Pack findOne(PropelPDO $con = null) Return the first Oops_Db_Pack matching the query
 * @method     Oops_Db_Pack findOneOrCreate(PropelPDO $con = null) Return the first Oops_Db_Pack matching the query, or a new Oops_Db_Pack object populated from the query conditions when no match is found
 *
 * @method     Oops_Db_Pack findOneByIdProductPack(int $id_product_pack) Return the first Oops_Db_Pack filtered by the id_product_pack column
 * @method     Oops_Db_Pack findOneByIdProductItem(int $id_product_item) Return the first Oops_Db_Pack filtered by the id_product_item column
 * @method     Oops_Db_Pack findOneByQuantity(int $quantity) Return the first Oops_Db_Pack filtered by the quantity column
 *
 * @method     array findByIdProductPack(int $id_product_pack) Return Oops_Db_Pack objects filtered by the id_product_pack column
 * @method     array findByIdProductItem(int $id_product_item) Return Oops_Db_Pack objects filtered by the id_product_item column
 * @method     array findByQuantity(int $quantity) Return Oops_Db_Pack objects filtered by the quantity column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Db_Propel_PackQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Db_Propel_PackQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Db_Pack', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Db_PackQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Db_PackQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Db_PackQuery) {
			return $criteria;
		}
		$query = new Oops_Db_PackQuery();
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
	 * @param     array[$id_product_pack, $id_product_item] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Oops_Db_Pack|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Db_PackPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_PackPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Db_Pack A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_PRODUCT_PACK`, `ID_PRODUCT_ITEM`, `QUANTITY` FROM `' . _DB_PREFIX_ . 'pack` WHERE `ID_PRODUCT_PACK` = :p0 AND `ID_PRODUCT_ITEM` = :p1';
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
			$obj = new Oops_Db_Pack();
			$obj->hydrate($row);
			Oops_Db_PackPeer::addInstanceToPool($obj, serialize(array((string) $row[0], (string) $row[1])));
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
	 * @return    Oops_Db_Pack|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Db_PackQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(Oops_Db_PackPeer::ID_PRODUCT_PACK, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(Oops_Db_PackPeer::ID_PRODUCT_ITEM, $key[1], Criteria::EQUAL);

		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Db_PackQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(Oops_Db_PackPeer::ID_PRODUCT_PACK, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(Oops_Db_PackPeer::ID_PRODUCT_ITEM, $key[1], Criteria::EQUAL);
			$cton0->addAnd($cton1);
			$this->addOr($cton0);
		}

		return $this;
	}

	/**
	 * Filter the query on the id_product_pack column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdProductPack(1234); // WHERE id_product_pack = 1234
	 * $query->filterByIdProductPack(array(12, 34)); // WHERE id_product_pack IN (12, 34)
	 * $query->filterByIdProductPack(array('min' => 12)); // WHERE id_product_pack > 12
	 * </code>
	 *
	 * @param     mixed $idProductPack The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_PackQuery The current query, for fluid interface
	 */
	public function filterByIdProductPack($idProductPack = null, $comparison = null)
	{
		if (is_array($idProductPack) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Db_PackPeer::ID_PRODUCT_PACK, $idProductPack, $comparison);
	}

	/**
	 * Filter the query on the id_product_item column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdProductItem(1234); // WHERE id_product_item = 1234
	 * $query->filterByIdProductItem(array(12, 34)); // WHERE id_product_item IN (12, 34)
	 * $query->filterByIdProductItem(array('min' => 12)); // WHERE id_product_item > 12
	 * </code>
	 *
	 * @param     mixed $idProductItem The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_PackQuery The current query, for fluid interface
	 */
	public function filterByIdProductItem($idProductItem = null, $comparison = null)
	{
		if (is_array($idProductItem) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Db_PackPeer::ID_PRODUCT_ITEM, $idProductItem, $comparison);
	}

	/**
	 * Filter the query on the quantity column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByQuantity(1234); // WHERE quantity = 1234
	 * $query->filterByQuantity(array(12, 34)); // WHERE quantity IN (12, 34)
	 * $query->filterByQuantity(array('min' => 12)); // WHERE quantity > 12
	 * </code>
	 *
	 * @param     mixed $quantity The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_PackQuery The current query, for fluid interface
	 */
	public function filterByQuantity($quantity = null, $comparison = null)
	{
		if (is_array($quantity)) {
			$useMinMax = false;
			if (isset($quantity['min'])) {
				$this->addUsingAlias(Oops_Db_PackPeer::QUANTITY, $quantity['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($quantity['max'])) {
				$this->addUsingAlias(Oops_Db_PackPeer::QUANTITY, $quantity['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Oops_Db_PackPeer::QUANTITY, $quantity, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Db_Pack $pack Object to remove from the list of results
	 *
	 * @return    Oops_Db_PackQuery The current query, for fluid interface
	 */
	public function prune($pack = null)
	{
		if ($pack) {
			$this->addCond('pruneCond0', $this->getAliasedColName(Oops_Db_PackPeer::ID_PRODUCT_PACK), $pack->getIdProductPack(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(Oops_Db_PackPeer::ID_PRODUCT_ITEM), $pack->getIdProductItem(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
		}

		return $this;
	}

} // Oops_Db_Propel_PackQuery