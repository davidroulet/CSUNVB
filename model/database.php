<?php
/**
 * File : database.php
 * Author : X. Carrel
 * Created : 2020-05-13
 * Modified last :
 **/

function getPDO()
{
    require ".const.php";
    $dbh = new PDO('mysql:host=' . $dbhost . ';dbname=' . $dbname, $user, $pass);
    return $dbh;
}

function select($query, $params, $multirecord)
{
    require ".const.php";
    $dbh = getPDO();
    try
    {
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute($params);//execute query
        if ($multirecord)
        {
            $queryResult = $statement->fetchAll(PDO::FETCH_ASSOC);
        } else
        {
            $queryResult = $statement->fetch(PDO::FETCH_ASSOC);
        }
        $dbh = null;
        return $queryResult;
    } catch (PDOException $e)
    {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}

function selectMany($query, $params)
{
    return select($query, $params, true);
}

function selectOne($query, $params)
{
    return select($query, $params, false);
}

function insert($query, $params)
{
    require ".const.php";
    $dbh = getPDO();
    try
    {
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute($params);//execute query
        return $dbh->lastInsertId();
    } catch (PDOException $e)
    {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}

function execute($query, $params)
{
    require ".const.php";
    $dbh = getPDO();
    try
    {
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute($params);//execute query
        $dbh = null;
        return true;
    } catch (PDOException $e)
    {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}
?>