<?php


/**
 * Base class that represents a query for the 'attribute_group_lang' table.
 *
 * 
 *
 * @method     Oops_Db_AttributeGroupLangQuery orderByIdAttributeGroup($order = Criteria::ASC) Order by the id_attribute_group column
 * @method     Oops_Db_AttributeGroupLangQuery orderByIdLang($order = Criteria::ASC) Order by the id_lang column
 * @method     Oops_Db_AttributeGroupLangQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     Oops_Db_AttributeGroupLangQuery orderByPublicName($order = Criteria::ASC) Order by the public_name column
 *
 * @method     Oops_Db_AttributeGroupLangQuery groupByIdAttributeGroup() Group by the id_attribute_group column
 * @method     Oops_Db_AttributeGroupLangQuery groupByIdLang() Group by the id_lang column
 * @method     Oops_Db_AttributeGroupLangQuery groupByName() Group by the name column
 * @method     Oops_Db_AttributeGroupLangQuery groupByPublicName() Group by the public_name column
 *
 * @method     Oops_Db_AttributeGroupLangQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Oops_Db_AttributeGroupLangQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Oops_Db_AttributeGroupLangQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Oops_Db_AttributeGroupLang findOne(PropelPDO $con = null) Return the first Oops_Db_AttributeGroupLang matching the query
 * @method     Oops_Db_AttributeGroupLang findOneOrCreate(PropelPDO $con = null) Return the first Oops_Db_AttributeGroupLang matching the query, or a new Oops_Db_AttributeGroupLang object populated from the query conditions when no match is found
 *
 * @method     Oops_Db_AttributeGroupLang findOneByIdAttributeGroup(int $id_attribute_group) Return the first Oops_Db_AttributeGroupLang filtered by the id_attribute_group column
 * @method     Oops_Db_AttributeGroupLang findOneByIdLang(int $id_lang) Return the first Oops_Db_AttributeGroupLang filtered by the id_lang column
 * @method     Oops_Db_AttributeGroupLang findOneByName(string $name) Return the first Oops_Db_AttributeGroupLang filtered by the name column
 * @method     Oops_Db_AttributeGroupLang findOneByPublicName(string $public_name) Return the first Oops_Db_AttributeGroupLang filtered by the public_name column
 *
 * @method     array findByIdAttributeGroup(int $id_attribute_group) Return Oops_Db_AttributeGroupLang objects filtered by the id_attribute_group column
 * @method     array findByIdLang(int $id_lang) Return Oops_Db_AttributeGroupLang objects filtered by the id_lang column
 * @method     array findByName(string $name) Return Oops_Db_AttributeGroupLang objects filtered by the name column
 * @method     array findByPublicName(string $public_name) Return Oops_Db_AttributeGroupLang objects filtered by the public_name column
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Db_Propel_AttributeGroupLangQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of Oops_Db_Propel_AttributeGroupLangQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'prestashop', $modelName = 'Oops_Db_AttributeGroupLang', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Oops_Db_AttributeGroupLangQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Oops_Db_AttributeGroupLangQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Oops_Db_AttributeGroupLangQuery) {
			return $criteria;
		}
		$query = new Oops_Db_AttributeGroupLangQuery();
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
	 * @param     array[$id_attribute_group, $id_lang] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Oops_Db_AttributeGroupLang|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Oops_Db_AttributeGroupLangPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_AttributeGroupLangPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Oops_Db_AttributeGroupLang A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_ATTRIBUTE_GROUP`, `ID_LANG`, `NAME`, `PUBLIC_NAME` FROM `' . _DB_PREFIX_ . 'attribute_group_lang` WHERE `ID_ATTRIBUTE_GROUP` = :p0 AND `ID_LANG` = :p1';
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
			$obj = new Oops_Db_AttributeGroupLang();
			$obj->hydrate($row);
			Oops_Db_AttributeGroupLangPeer::addInstanceToPool($obj, serialize(array((string) $row[0], (string) $row[1])));
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
	 * @return    Oops_Db_AttributeGroupLang|array|mixed the result, formatted by the current formatter
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
	 * @return    Oops_Db_AttributeGroupLangQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(Oops_Db_AttributeGroupLangPeer::ID_ATTRIBUTE_GROUP, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(Oops_Db_AttributeGroupLangPeer::ID_LANG, $key[1], Criteria::EQUAL);

		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Oops_Db_AttributeGroupLangQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(Oops_Db_AttributeGroupLangPeer::ID_ATTRIBUTE_GROUP, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(Oops_Db_AttributeGroupLangPeer::ID_LANG, $key[1], Criteria::EQUAL);
			$cton0->addAnd($cton1);
			$this->addOr($cton0);
		}

		return $this;
	}

	/**
	 * Filter the query on the id_attribute_group column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdAttributeGroup(1234); // WHERE id_attribute_group = 1234
	 * $query->filterByIdAttributeGroup(array(12, 34)); // WHERE id_attribute_group IN (12, 34)
	 * $query->filterByIdAttributeGroup(array('min' => 12)); // WHERE id_attribute_group > 12
	 * </code>
	 *
	 * @param     mixed $idAttributeGroup The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_AttributeGroupLangQuery The current query, for fluid interface
	 */
	public function filterByIdAttributeGroup($idAttributeGroup = null, $comparison = null)
	{
		if (is_array($idAttributeGroup) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Db_AttributeGroupLangPeer::ID_ATTRIBUTE_GROUP, $idAttributeGroup, $comparison);
	}

	/**
	 * Filter the query on the id_lang column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdLang(1234); // WHERE id_lang = 1234
	 * $query->filterByIdLang(array(12, 34)); // WHERE id_lang IN (12, 34)
	 * $query->filterByIdLang(array('min' => 12)); // WHERE id_lang > 12
	 * </code>
	 *
	 * @param     mixed $idLang The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_AttributeGroupLangQuery The current query, for fluid interface
	 */
	public function filterByIdLang($idLang = null, $comparison = null)
	{
		if (is_array($idLang) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Oops_Db_AttributeGroupLangPeer::ID_LANG, $idLang, $comparison);
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
	 * @return    Oops_Db_AttributeGroupLangQuery The current query, for fluid interface
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
		return $this->addUsingAlias(Oops_Db_AttributeGroupLangPeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the public_name column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByPublicName('fooValue');   // WHERE public_name = 'fooValue'
	 * $query->filterByPublicName('%fooValue%'); // WHERE public_name LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $publicName The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Oops_Db_AttributeGroupLangQuery The current query, for fluid interface
	 */
	public function filterByPublicName($publicName = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($publicName)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $publicName)) {
				$publicName = str_replace('*', '%', $publicName);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Oops_Db_AttributeGroupLangPeer::PUBLIC_NAME, $publicName, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Oops_Db_AttributeGroupLang $attributeGroupLang Object to remove from the list of results
	 *
	 * @return    Oops_Db_AttributeGroupLangQuery The current query, for fluid interface
	 */
	public function prune($attributeGroupLang = null)
	{
		if ($attributeGroupLang) {
			$this->addCond('pruneCond0', $this->getAliasedColName(Oops_Db_AttributeGroupLangPeer::ID_ATTRIBUTE_GROUP), $attributeGroupLang->getIdAttributeGroup(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(Oops_Db_AttributeGroupLangPeer::ID_LANG), $attributeGroupLang->getIdLang(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
		}

		return $this;
	}

} // Oops_Db_Propel_AttributeGroupLangQuery