<?php

namespace core\database;

use Exception;
use PDO;
use PDOException;

class QueryBuilder
{

   protected PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

  public function selectAll($table)
    {
        $statement = $this->pdo->prepare(query: "SELECT * FROM {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function select($table, $id)
    {
        $statement = $this->pdo->prepare(query: "SELECT * FROM {$table} WHERE id=:id");
        $statement->execute(['id' => $id]);
        return $statement->fetch(PDO::FETCH_OBJ);
    }

 /* OR
    public function select($table, $where, $params)
    {
        $sql = sprintf("select * from %s where %s",
        $table,
        $where);
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($params);
            return $statement->fetch(PDO::FETCH_OBJ);
        }catch (PDOException $e){
            die($e->getMessage());
        }

    }
 */


   /* public function selectWhere($table, $where)
    {
        $statement = $this->pdo->prepare(query: "SELECT * FROM {$table} WHERE {$where}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectUser($email)
    {
        $statement = $this->pdo->prepare(query: "SELECT * FROM users WHERE email=:email"
        );
        $statement->execute(['email' => $email]);
        return $statement->fetch(PDO::FETCH_OBJ);
    }*/



    public function update($table, $set, $where, $params)
    {
        $sql = sprintf(
            "update %s set %s where %s",
            $table,
            $set,
            $where
        );
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($params);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function insert($table, $params)
    {
        $sql = sprintf(
            "INSERT INTO %s (%s) VALUES (%s)",
            $table,
            implode(',', array_keys($params)),
            ':' . implode(', :', array_keys($params))
        );
       try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($params);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }


    public function delete($table, $id)
    {
        $sql = sprintf(
            "DELETE FROM %s  WHERE id = :id",
            $table,
            $id
        );
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute(['id'=>$id]);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}