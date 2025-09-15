<?php

namespace Core;

use PDO;

class Database
{
    protected $conneciton ;
    protected $statemant;

    public function __construct($config,$user = 'admin',$password ='root'){

        $dsn = "mysql:".http_build_query($config,"",";");

        $this->conneciton = new PDO($dsn, $user, $password,[
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }

    public function query($query,$params = []){
        $this->statemant = $this->conneciton->prepare($query);
        $this->statemant->execute($params);
        return $this;
    }

    public function find(){
        return $this->statemant->fetch();
    }
    public function findAll(){
        return $this->statemant->fetchAll();
    }
}