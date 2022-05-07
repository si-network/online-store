<?php

namespace Core\Database\Query;

class MySql extends Query
{
    /**
     * Query string
     *
     * @var
     */
    protected $query;

    /**
     * Select all from tables
     *
     * @param mixed ...$tables
     * @return $this
     */
    public function all(...$tables)
    {
        $this->query = "SELECT * FROM " . implode(",", $tables);
        return $this;
    }

    public function getById($table, $id)
    {
        $this->query = "SELECT * FROM $table WHERE id = $id";
        return $this;
    }

    public function getByColumn($table, $column, $keyValue)
    {
        $this->query = "SELECT * FROM $table WHERE $column = '" . $keyValue . "'";
        return $this;
    }

    public function select(...$cols)
    {
        $this->query = "SELECT " . implode(",",$cols);
        return $this;
    }

    public function insert($table, $data)
    {
        $data = array_map(function ($value) {
            return str_pad($value,strlen($value) + 2, "'", STR_PAD_BOTH);
        }, $data);
        $preparedData = '(' . implode(',', $data) . ')';

        $this->query = "INSERT INTO $table VALUES $preparedData";
        return $this;
    }

    public function update()
    {
       
    }

    public function delete()
    {

    }

    public function where($requirements)
    {
        $this->query .= " WHERE " . $requirements;
        return $this;
    }

    public function from($tables)
    {
        $this->query .= " FROM " . $tables;
        return $this;
    }

    public function join($query, $method = 'INNER')
    {
        $this->query .= " " . $method . " JOIN " . $query;
        return $this;
    }

    public function on($condition)
    {
        $this->query .= " ON " . $condition;
        return $this;
    }

    public function union()
    {
        $this->query .= " UNION";
        return $this;
    }

    public function groupBy($colName)
    {
        $this->query .= " GROUP BY " . $colName;
        return $this;
    }

    public function orderBy($col, $order = 'DESC')
    {
        $this->query .= " ORDER BY " . $col .  " " . $order;
        return $this;
    }

    public function limit(int $count, int $from = null)
    {
       
        $this->query .= " LIMIT " . (!is_null($from)? --$from." , ":"") . $count;
        return $this;
    }

    public function getQuery()
    {
        return $this->query;
    }
}