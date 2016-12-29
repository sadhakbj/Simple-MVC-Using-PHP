<?php
namespace Core\Database;

use PDO;

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
     * @param $intoClass
     * @return array
     */
    public function selectAll($table)
    {
        $selectStatement = $this->pdo->prepare("select * from {$table}");

        $selectStatement->execute();

        return $selectStatement->fetchAll(PDO::FETCH_CLASS);
    }
}