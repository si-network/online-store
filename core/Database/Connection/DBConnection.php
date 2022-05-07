<?php

namespace Core\Database\Connection;

use Core\Interfaces\Config\Config;
use Core\Interfaces\Database\Connection as ConnectionInterface;

class DBConnection implements ConnectionInterface
{
    /**
     * PHP Database driver
     *
     * @var
     */
    protected $driver;

    /**
     * Database name
     *
     * @var
     */
    protected $dbname;
    /**
     * Database host
     *
     * @var
     */
    protected $host;

    /**
     * Database open port
     *
     * @var
     */
    protected $port;

    /**
     * Database root user
     *
     * @var
     */
    protected $user;

    /**
     * Database password
     *
     * @var
     */
    protected $password;

    /**
     * Config instance
     *
     * @var Config
     */
    protected $config;

    /**
     * DBConnection constructor.
     *
     * @param Config $config
     */
    public function __construct(Config $config)
    {
        $this->config   = $config;
        $this->driver   = $config->get('db.driver');
        $this->dbname   = $config->get('db.dbname');
        $this->host     = $config->get('db.host');
        $this->port     = $config->get('db.port');
        $this->user     = $config->get('db.user');
        $this->password = $config->get('db.password');
    }

    /**
     * Try to connect to database and create PDO instance
     *
     * @return mixed|\PDO|string
     */
    public function connect()
    {
        $pdo = '';
        try {
            $pdo = new \PDO($this->driver.":host=".$this->host.";port=".$this->port.";dbname=".$this->dbname, $this->user, $this->password);
            if (!$pdo instanceof \PDO) throw new \PDOException('Failed to connect to the database');
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
        return $pdo;
    }
}