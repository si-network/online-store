<?php

namespace Core\Database\Query;

use Core\Interfaces\Database\Connection;
use Core\Interfaces\Storage\Query as QueryInterface;

abstract class Query implements QueryInterface
{
    /**
     * PDO instance
     *
     * @var mixed|\PDO|string
     */
    protected $connection;

    /**
     * Query constructor.
     *
     * @param Connection $connection
     */
	public function __construct(Connection $connection)
	{
		$this->connection = $connection->connect();
	}

    public function run($fetchMode = \PDO::FETCH_BOTH)
    {
        try {
            $prepareQuery = $this->connection->prepare($this->query);
            $prepareQuery->execute();
        } catch (\PDOException $e) {
            return [];
        }
        return $prepareQuery->fetchAll($fetchMode);
    }

	abstract public function select(...$cols);

	abstract public function insert($table, $data);

	abstract public function update();

	abstract public function delete();

	abstract public function all(...$tables);

	abstract public function where($requirements);

	abstract public function groupBy($colName);

	abstract public function from($tables);
}