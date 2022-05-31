<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)

    {

        $this->pdo = $pdo;
    }

    public function SelectAll($table)
    {


        try {


            $statement = $this->pdo->prepare("select * from {$table}");

            $statement->execute();

            return $statement->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {

            die("Query Error");
        }
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



    public function update($table)
    {

        try {
            $id = $_REQUEST['id'];
            $title = $_POST['title'];
            $content = $_POST['content'];



            $sql = "UPDATE $table SET title = '$title', content = '$content' WHERE id = $id";


            $statement = $this->pdo->prepare($sql);

            $statement->execute();
        } catch (Exception $e) {

            die("Query Error" . $e->getMessage());
        }
    }

    public function delete($table)
    {

        try {
            $id = $_REQUEST['id'];

            $sql = "delete from $table where id = $id";

            $statement = $this->pdo->prepare($sql);

            $statement->execute();
            
        } catch (Exception $e) {

            die("Query Error" . $e->getMessage());
        }
    }



    public function createComment($table, $parameters)
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

            die("Query Error".$e->getMessage());
        }
    }



    public function SelectComment($post, $comment)
    {


        try {


            $statement = $this->pdo->prepare("select comments from $post inner join $comment on $post.id = $comment.data_id");

            $statement->execute();

            return $statement->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {

            die("Query Error".$e->getMessage());
        }
    }
}
