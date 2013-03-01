<?php

class Adherents
{

    /**
     *
     * @var stirng[] 
     */
    private $where;

    public function findAll()
    {
        
    }

    public function getSQL()
    {
        $sql = 'SELECT * FROM adherent';

        return $sql;
    }

}