<?php

class AdherentModel
{

    private $tableName = 'adherent';

    /**
     *
     * @var stirng[] 
     */
    private $where;

    public function findAll()
    {
        
    }

    public function findOne($id)
    {
        return DB::getInstance()->findOne($this->tableName, array('id' => $id));
    }

    public function getSQL()
    {
        $sql = 'SELECT * FROM ' . $this->tableName;

        return $sql;
    }

    public function insert(array $data)
    {
        $con = DB::getInstance()->getConnection();

        $insertSQL = 'INSERT INTO ' . $this->tableName .  ' (%s) VALUES (%s)';

        // Convert date
        $data['Birthday'] = preg_filter('!(\d{1,2})/(\d{1,2})/(\d{4})!', '$3-$2-$1', $data['Birthday']);

        $fields = array_map('strtolower', array_keys($data));
        $values = array_map(function($v) { return ':' . $v; }, array_keys($data));

        $q = $con->prepare(sprintf($insertSQL, implode(', ', $fields), implode(', ', $values)));
        $q->execute(array_combine($values, array_values($data)));

        return $con->lastInsertId();
    }

    public function update($id, array $data)
    {
        $con = DB::getInstance()->getConnection();

        $updateSQL = 'UPDATE ' . $this->tableName .  ' SET %s WHERE id = %d';

        // Convert date
        $data['Birthday'] = preg_filter('!(\d{1,2})/(\d{1,2})/(\d{4})!', '$3-$2-$1', $data['Birthday']);

        $fields = array_map('strtolower', array_keys($data));
        $values = array_map(function($v) { return ':' . $v; }, array_keys($data));

        foreach ($fields as $field) {
            list($k, $values2) = each($values);

            $fields2[] = $field . '=' . $values2;
        }

        $q = $con->prepare(sprintf($updateSQL, implode(', ', $fields2), $id));

        return $q->execute(array_combine($values, array_values($data)));
    }

}