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

    public function insert(array $data)
    {
        $con = DB::getInstance()->getConnection();

        $insertSQL = 'INSERT INTO adherent (%s) VALUES (%s)';

        // Convert date
        $data['Birthday'] = preg_filter('!(\d{1,2})/(\d{1,2})/(\d{4})!', '$3-$2-$1', $data['Birthday']);

        $fields = array_map('strtolower', array_keys($data));
        $values = array_map(function($v) { return ':' . $v; }, array_keys($data));

        $q = $con->prepare(sprintf($insertSQL, implode(', ', $fields), implode(', ', $values)));
        $q->execute(array_combine($values, array_values($data)));

        return $con->lastInsertId();
    }
}