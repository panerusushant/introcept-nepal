<?php


class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)

    {

        $this->pdo = $pdo;
    }


    public function create($table, $parameters)
    {
        try {

            $sql = sprintf(
                'insert into %s (%s) values (%s)',
                $table,
                implode(',', array_keys($parameters)),
                ':' . implode(', :', array_keys($parameters))
            );

            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);
        } catch (Exception $e) {

            die("Query Error");
        }
    }
}