<?php


/**
 * Base class that represents a row from the 'state' table.
 *
 * 
 *
 * @package    propel.generator.prestashop.om
 */
abstract class Oops_Db_Propel_State extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'Oops_Db_StatePeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        Oops_Db_StatePeer
	 */
	protected static $peer;

	/**
	 * The value for the id_state field.
	 * @var        int
	 */
	protected $id_state;

	/**
	 * The value for the id_country field.
	 * @var        int
	 */
	protected $id_country;

	/**
	 * The value for the id_zone field.
	 * @var        int
	 */
	protected $id_zone;

	/**
	 * The value for the name field.
	 * @var        string
	 */
	protected $name;

	/**
	 * The value for the iso_code field.
	 * @var        string
	 */
	protected $iso_code;

	/**
	 * The value for the tax_behavior field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $tax_behavior;

	/**
	 * The value for the active field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $active;

	/**
	 * Flag to prevent endless save loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInSave = false;

	/**
	 * Flag to prevent endless validation loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInValidation = false;

	/**
	 * Applies default values to this object.
	 * This method should be called from the object's constructor (or
	 * equivalent initialization method).
	 * @see        __construct()
	 */
	public function applyDefaultValues()
	{
		$this->tax_behavior = 0;
		$this->active = false;
	}

	/**
	 * Initializes internal state of Oops_Db_Propel_State object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [id_state] column value.
	 * 
	 * @return     int
	 */
	public function getIdState()
	{
		return $this->id_state;
	}

	/**
	 * Get the [id_country] column value.
	 * 
	 * @return     int
	 */
	public function getIdCountry()
	{
		return $this->id_country;
	}

	/**
	 * Get the [id_zone] column value.
	 * 
	 * @return     int
	 */
	public function getIdZone()
	{
		return $this->id_zone;
	}

	/**
	 * Get the [name] column value.
	 * 
	 * @return     string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Get the [iso_code] column value.
	 * 
	 * @return     string
	 */
	public function getIsoCode()
	{
		return $this->iso_code;
	}

	/**
	 * Get the [tax_behavior] column value.
	 * 
	 * @return     int
	 */
	public function getTaxBehavior()
	{
		return $this->tax_behavior;
	}

	/**
	 * Get the [active] column value.
	 * 
	 * @return     boolean
	 */
	public function getActive()
	{
		return $this->active;
	}

	/**
	 * Set the value of [id_state] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Db_State The current object (for fluent API support)
	 */
	public function setIdState($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_state !== $v) {
			$this->id_state = $v;
			$this->modifiedColumns[] = Oops_Db_StatePeer::ID_STATE;
		}

		return $this;
	} // setIdState()

	/**
	 * Set the value of [id_country] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Db_State The current object (for fluent API support)
	 */
	public function setIdCountry($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_country !== $v) {
			$this->id_country = $v;
			$this->modifiedColumns[] = Oops_Db_StatePeer::ID_COUNTRY;
		}

		return $this;
	} // setIdCountry()

	/**
	 * Set the value of [id_zone] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Db_State The current object (for fluent API support)
	 */
	public function setIdZone($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_zone !== $v) {
			$this->id_zone = $v;
			$this->modifiedColumns[] = Oops_Db_StatePeer::ID_ZONE;
		}

		return $this;
	} // setIdZone()

	/**
	 * Set the value of [name] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Db_State The current object (for fluent API support)
	 */
	public function setName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = Oops_Db_StatePeer::NAME;
		}

		return $this;
	} // setName()

	/**
	 * Set the value of [iso_code] column.
	 * 
	 * @param      string $v new value
	 * @return     Oops_Db_State The current object (for fluent API support)
	 */
	public function setIsoCode($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->iso_code !== $v) {
			$this->iso_code = $v;
			$this->modifiedColumns[] = Oops_Db_StatePeer::ISO_CODE;
		}

		return $this;
	} // setIsoCode()

	/**
	 * Set the value of [tax_behavior] column.
	 * 
	 * @param      int $v new value
	 * @return     Oops_Db_State The current object (for fluent API support)
	 */
	public function setTaxBehavior($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->tax_behavior !== $v) {
			$this->tax_behavior = $v;
			$this->modifiedColumns[] = Oops_Db_StatePeer::TAX_BEHAVIOR;
		}

		return $this;
	} // setTaxBehavior()

	/**
	 * Sets the value of the [active] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     Oops_Db_State The current object (for fluent API support)
	 */
	public function setActive($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->active !== $v) {
			$this->active = $v;
			$this->modifiedColumns[] = Oops_Db_StatePeer::ACTIVE;
		}

		return $this;
	} // setActive()

	/**
	 * Indicates whether the columns in this object are only set to default values.
	 *
	 * This method can be used in conjunction with isModified() to indicate whether an object is both
	 * modified _and_ has some values set which are non-default.
	 *
	 * @return     boolean Whether the columns in this object are only been set with default values.
	 */
	public function hasOnlyDefaultValues()
	{
			if ($this->tax_behavior !== 0) {
				return false;
			}

			if ($this->active !== false) {
				return false;
			}

		// otherwise, everything was equal, so return TRUE
		return true;
	} // hasOnlyDefaultValues()

	/**
	 * Hydrates (populates) the object variables with values from the database resultset.
	 *
	 * An offset (0-based "start column") is specified so that objects can be hydrated
	 * with a subset of the columns in the resultset rows.  This is needed, for example,
	 * for results of JOIN queries where the resultset row includes columns from two or
	 * more tables.
	 *
	 * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
	 * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
	 * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate($row, $startcol = 0, $rehydrate = false)
	{
		try {

			$this->id_state = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->id_country = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->id_zone = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->name = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->iso_code = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->tax_behavior = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->active = ($row[$startcol + 6] !== null) ? (boolean) $row[$startcol + 6] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 7; // 7 = Oops_Db_StatePeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Oops_Db_State object", $e);
		}
	}

	/**
	 * Checks and repairs the internal consistency of the object.
	 *
	 * This method is executed after an already-instantiated object is re-hydrated
	 * from the database.  It exists to check any foreign keys to make sure that
	 * the objects related to the current object are correct based on foreign key.
	 *
	 * You can override this method in the stub class, but you should always invoke
	 * the base method from the overridden method (i.e. parent::ensureConsistency()),
	 * in case your model changes.
	 *
	 * @throws     PropelException
	 */
	public function ensureConsistency()
	{

	} // ensureConsistency

	/**
	 * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
	 *
	 * This will only work if the object has been saved and has a valid primary key set.
	 *
	 * @param      boolean $deep (optional) Whether to also de-associated any related objects.
	 * @param      PropelPDO $con (optional) The PropelPDO connection to use.
	 * @return     void
	 * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
	 */
	public function reload($deep = false, PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("Cannot reload a deleted object.");
		}

		if ($this->isNew()) {
			throw new PropelException("Cannot reload an unsaved object.");
		}

		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_StatePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = Oops_Db_StatePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

		} // if (deep)
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      PropelPDO $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_StatePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = Oops_Db_StateQuery::create()
				->filterByPrimaryKey($this->getPrimaryKey());
			$ret = $this->preDelete($con);
			if ($ret) {
				$deleteQuery->delete($con);
				$this->postDelete($con);
				$con->commit();
				$this->setDeleted(true);
			} else {
				$con->commit();
			}
		} catch (Exception $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Persists this object to the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All modified related objects will also be persisted in the doSave()
	 * method.  This method wraps all precipitate database operations in a
	 * single transaction.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(Oops_Db_StatePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
			} else {
				$ret = $ret && $this->preUpdate($con);
			}
			if ($ret) {
				$affectedRows = $this->doSave($con);
				if ($isInsert) {
					$this->postInsert($con);
				} else {
					$this->postUpdate($con);
				}
				$this->postSave($con);
				Oops_Db_StatePeer::addInstanceToPool($this);
			} else {
				$affectedRows = 0;
			}
			$con->commit();
			return $affectedRows;
		} catch (Exception $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs the work of inserting or updating the row in the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All related objects are also updated in this method.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave(PropelPDO $con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;

			if ($this->isNew() || $this->isModified()) {
				// persist changes
				if ($this->isNew()) {
					$this->doInsert($con);
				} else {
					$this->doUpdate($con);
				}
				$affectedRows += 1;
				$this->resetModified();
			}

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} // doSave()

	/**
	 * Insert the row in the database.
	 *
	 * @param      PropelPDO $con
	 *
	 * @throws     PropelException
	 * @see        doSave()
	 */
	protected function doInsert(PropelPDO $con)
	{
		$modifiedColumns = array();
		$index = 0;

		$this->modifiedColumns[] = Oops_Db_StatePeer::ID_STATE;
		if (null !== $this->id_state) {
			throw new PropelException('Cannot insert a value for auto-increment primary key (' . Oops_Db_StatePeer::ID_STATE . ')');
		}

		 // check the columns in natural order for more readable SQL queries
		if ($this->isColumnModified(Oops_Db_StatePeer::ID_STATE)) {
			$modifiedColumns[':p' . $index++]  = '`ID_STATE`';
		}
		if ($this->isColumnModified(Oops_Db_StatePeer::ID_COUNTRY)) {
			$modifiedColumns[':p' . $index++]  = '`ID_COUNTRY`';
		}
		if ($this->isColumnModified(Oops_Db_StatePeer::ID_ZONE)) {
			$modifiedColumns[':p' . $index++]  = '`ID_ZONE`';
		}
		if ($this->isColumnModified(Oops_Db_StatePeer::NAME)) {
			$modifiedColumns[':p' . $index++]  = '`NAME`';
		}
		if ($this->isColumnModified(Oops_Db_StatePeer::ISO_CODE)) {
			$modifiedColumns[':p' . $index++]  = '`ISO_CODE`';
		}
		if ($this->isColumnModified(Oops_Db_StatePeer::TAX_BEHAVIOR)) {
			$modifiedColumns[':p' . $index++]  = '`TAX_BEHAVIOR`';
		}
		if ($this->isColumnModified(Oops_Db_StatePeer::ACTIVE)) {
			$modifiedColumns[':p' . $index++]  = '`ACTIVE`';
		}

		$sql = sprintf(
			'INSERT INTO `' .  _DB_PREFIX_ . 'state` (%s) VALUES (%s)',
			implode(', ', $modifiedColumns),
			implode(', ', array_keys($modifiedColumns))
		);

		try {
			$stmt = $con->prepare($sql);
			foreach ($modifiedColumns as $identifier => $columnName) {
				switch ($columnName) {
					case '`ID_STATE`':
						$stmt->bindValue($identifier, $this->id_state, PDO::PARAM_INT);
						break;
					case '`ID_COUNTRY`':
						$stmt->bindValue($identifier, $this->id_country, PDO::PARAM_INT);
						break;
					case '`ID_ZONE`':
						$stmt->bindValue($identifier, $this->id_zone, PDO::PARAM_INT);
						break;
					case '`NAME`':
						$stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
						break;
					case '`ISO_CODE`':
						$stmt->bindValue($identifier, $this->iso_code, PDO::PARAM_STR);
						break;
					case '`TAX_BEHAVIOR`':
						$stmt->bindValue($identifier, $this->tax_behavior, PDO::PARAM_INT);
						break;
					case '`ACTIVE`':
						$stmt->bindValue($identifier, (int) $this->active, PDO::PARAM_INT);
						break;
				}
			}
			$stmt->execute();
		} catch (Exception $e) {
			Propel::log($e->getMessage(), Propel::LOG_ERR);
			throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
		}

		try {
			$pk = $con->lastInsertId();
		} catch (Exception $e) {
			throw new PropelException('Unable to get autoincrement id.', $e);
		}
		$this->setIdState($pk);

		$this->setNew(false);
	}

	/**
	 * Update the row in the database.
	 *
	 * @param      PropelPDO $con
	 *
	 * @see        doSave()
	 */
	protected function doUpdate(PropelPDO $con)
	{
		$selectCriteria = $this->buildPkeyCriteria();
		$valuesCriteria = $this->buildCriteria();
		BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
	}

	/**
	 * Array of ValidationFailed objects.
	 * @var        array ValidationFailed[]
	 */
	protected $validationFailures = array();

	/**
	 * Gets any ValidationFailed objects that resulted from last call to validate().
	 *
	 *
	 * @return     array ValidationFailed[]
	 * @see        validate()
	 */
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	/**
	 * Validates the objects modified field values and all objects related to this table.
	 *
	 * If $columns is either a column name or an array of column names
	 * only those columns are validated.
	 *
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			if (($retval = Oops_Db_StatePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Retrieves a field from the object by name passed in as a string.
	 *
	 * @param      string $name name
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     mixed Value of field.
	 */
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = Oops_Db_StatePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		$field = $this->getByPosition($pos);
		return $field;
	}

	/**
	 * Retrieves a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @return     mixed Value of field at $pos
	 */
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getIdState();
				break;
			case 1:
				return $this->getIdCountry();
				break;
			case 2:
				return $this->getIdZone();
				break;
			case 3:
				return $this->getName();
				break;
			case 4:
				return $this->getIsoCode();
				break;
			case 5:
				return $this->getTaxBehavior();
				break;
			case 6:
				return $this->getActive();
				break;
			default:
				return null;
				break;
		} // switch()
	}

	/**
	 * Exports the object as an array.
	 *
	 * You can specify the key type of the array by passing one of the class
	 * type constants.
	 *
	 * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 *                    Defaults to BasePeer::TYPE_PHPNAME.
	 * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
	 * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
	 *
	 * @return    array an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
	{
		if (isset($alreadyDumpedObjects['Oops_Db_State'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Oops_Db_State'][$this->getPrimaryKey()] = true;
		$keys = Oops_Db_StatePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getIdState(),
			$keys[1] => $this->getIdCountry(),
			$keys[2] => $this->getIdZone(),
			$keys[3] => $this->getName(),
			$keys[4] => $this->getIsoCode(),
			$keys[5] => $this->getTaxBehavior(),
			$keys[6] => $this->getActive(),
		);
		return $result;
	}

	/**
	 * Sets a field from the object by name passed in as a string.
	 *
	 * @param      string $name peer name
	 * @param      mixed $value field value
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     void
	 */
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = Oops_Db_StatePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	/**
	 * Sets a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @param      mixed $value field value
	 * @return     void
	 */
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setIdState($value);
				break;
			case 1:
				$this->setIdCountry($value);
				break;
			case 2:
				$this->setIdZone($value);
				break;
			case 3:
				$this->setName($value);
				break;
			case 4:
				$this->setIsoCode($value);
				break;
			case 5:
				$this->setTaxBehavior($value);
				break;
			case 6:
				$this->setActive($value);
				break;
		} // switch()
	}

	/**
	 * Populates the object using an array.
	 *
	 * This is particularly useful when populating an object from one of the
	 * request arrays (e.g. $_POST).  This method goes through the column
	 * names, checking to see whether a matching key exists in populated
	 * array. If so the setByName() method is called for that column.
	 *
	 * You can specify the key type of the array by additionally passing one
	 * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 * The default key type is the column's phpname (e.g. 'AuthorId')
	 *
	 * @param      array  $arr     An array to populate the object from.
	 * @param      string $keyType The type of keys the array uses.
	 * @return     void
	 */
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = Oops_Db_StatePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setIdState($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIdCountry($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setIdZone($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setName($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setIsoCode($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setTaxBehavior($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setActive($arr[$keys[6]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(Oops_Db_StatePeer::DATABASE_NAME);

		if ($this->isColumnModified(Oops_Db_StatePeer::ID_STATE)) $criteria->add(Oops_Db_StatePeer::ID_STATE, $this->id_state);
		if ($this->isColumnModified(Oops_Db_StatePeer::ID_COUNTRY)) $criteria->add(Oops_Db_StatePeer::ID_COUNTRY, $this->id_country);
		if ($this->isColumnModified(Oops_Db_StatePeer::ID_ZONE)) $criteria->add(Oops_Db_StatePeer::ID_ZONE, $this->id_zone);
		if ($this->isColumnModified(Oops_Db_StatePeer::NAME)) $criteria->add(Oops_Db_StatePeer::NAME, $this->name);
		if ($this->isColumnModified(Oops_Db_StatePeer::ISO_CODE)) $criteria->add(Oops_Db_StatePeer::ISO_CODE, $this->iso_code);
		if ($this->isColumnModified(Oops_Db_StatePeer::TAX_BEHAVIOR)) $criteria->add(Oops_Db_StatePeer::TAX_BEHAVIOR, $this->tax_behavior);
		if ($this->isColumnModified(Oops_Db_StatePeer::ACTIVE)) $criteria->add(Oops_Db_StatePeer::ACTIVE, $this->active);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(Oops_Db_StatePeer::DATABASE_NAME);
		$criteria->add(Oops_Db_StatePeer::ID_STATE, $this->id_state);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getIdState();
	}

	/**
	 * Generic method to set the primary key (id_state column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setIdState($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getIdState();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Oops_Db_State (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setIdCountry($this->getIdCountry());
		$copyObj->setIdZone($this->getIdZone());
		$copyObj->setName($this->getName());
		$copyObj->setIsoCode($this->getIsoCode());
		$copyObj->setTaxBehavior($this->getTaxBehavior());
		$copyObj->setActive($this->getActive());
		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setIdState(NULL); // this is a auto-increment column, so set to default value
		}
	}

	/**
	 * Makes a copy of this object that will be inserted as a new row in table when saved.
	 * It creates a new object filling in the simple attributes, but skipping any primary
	 * keys that are defined for the table.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     Oops_Db_State Clone of current object.
	 * @throws     PropelException
	 */
	public function copy($deepCopy = false)
	{
		// we use get_class(), because this might be a subclass
		$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	/**
	 * Returns a peer instance associated with this om.
	 *
	 * Since Peer classes are not to have any instance attributes, this method returns the
	 * same instance for all member of this class. The method could therefore
	 * be static, but this would prevent one from overriding the behavior.
	 *
	 * @return     Oops_Db_StatePeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new Oops_Db_StatePeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id_state = null;
		$this->id_country = null;
		$this->id_zone = null;
		$this->name = null;
		$this->iso_code = null;
		$this->tax_behavior = null;
		$this->active = null;
		$this->alreadyInSave = false;
		$this->alreadyInValidation = false;
		$this->clearAllReferences();
		$this->applyDefaultValues();
		$this->resetModified();
		$this->setNew(true);
		$this->setDeleted(false);
	}

	/**
	 * Resets all references to other model objects or collections of model objects.
	 *
	 * This method is a user-space workaround for PHP's inability to garbage collect
	 * objects with circular references (even in PHP 5.3). This is currently necessary
	 * when using Propel in certain daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all referrer objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
		} // if ($deep)

	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(Oops_Db_StatePeer::DEFAULT_STRING_FORMAT);
	}

} // Oops_Db_Propel_State
