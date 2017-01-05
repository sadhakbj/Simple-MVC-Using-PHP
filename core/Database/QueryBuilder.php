<?php
namespace Core\Database;

use Exception;
use PDO;
use PDOException;

/**
 * Class QueryBuilder
 * @package Database
 */
class QueryBuilder
{
    /**
     * @var PDO
     */
    protected $pdo;

    /**
     * QueryBuilder constructor.
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * @param $table
     * @return array
     * @internal param $intoClass
     */
    public function selectAll($table)
    {
        $selectStatement = $this->pdo->prepare("select * from {$table}");

        $selectStatement->execute();

        return $selectStatement->fetchAll(PDO::FETCH_CLASS);
    }

    /**
     * @param $table
     * @param $parameters
     * @throws Exception
     */
    public function insert($table, $parameters)
    {
        $query = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':'.implode(', :', array_keys($parameters))
        );
        try {
            $insertStatement = $this->pdo->prepare($query);
            $insertStatement->execute($parameters);

        } catch (PDOException $exception) {
            die($exception->getMessage());
        }
    }
}