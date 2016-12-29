<?php
namespace Core\Database;

use PDO;
use PDOException;

/**
 * Class Connection
 * @package Database
 */
class Connection
{
    /**
     * @param $config
     * @return PDO
     */
    public static function make($config)
    {
        try {
            return new PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (PDOException $exception) {
            die($exception->getMessage());
        }
    }
}
