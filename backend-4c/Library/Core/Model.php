<?php
/**
 * This source code may regarded as a mini PHP framework designed with MVC pattern
 * providing basic CRUD method and some useful components.
 * @author Phan Thế Minh
 * Date: 8/9/2016
 * @copyright Copyright (c) 2016 by Phan Thế Minh - 4C13 Hanoi University, all rights reserved.
 * @version 1.0.0.2
 */

namespace Library\Core;

use PDO;

abstract class Model
{
    private $db;
    protected $table;
    protected $primary;

    public function __construct($co)
    {
        $this->db = $co;
    }

    /**
     * findById() return all fields selected of an element id
     * @param int $value_primary
     * @param string $fields
     * @return array
     */
    public function findById($value_primary, $fields = '*')
    {
        if (!empty($value_primary)) {
            $q = "SELECT $fields FROM `" . $this->table . "` WHERE `" . $this->primary . "`='$value_primary'";
            $sql = $this->db->prepare($q);
            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_OBJ);

            return $sql->fetchAll();
        }
        return false;
    }

    /**
     * fetchAll() return all element of table with selected criteria
     * @param string $where
     * @param string $fields
     * @return array
     */
    public function fetchAll($where = 1, $fields = '*')
    {
        $q = "SELECT $fields FROM `" . $this->table . "` WHERE $where";
        $sql = $this->db->prepare($q);
        $sql->execute();
        $sql->setFetchMode(PDO::FETCH_OBJ);
        return $sql->fetchAll();
    }

    /**
     * insert() allows to add an occurence inside table
     * @param array $data
     * @return boolean
     */
    public function insert($data)
    {
        $fieldsList = '';
        $valuesList = '';

        foreach ($data as $k => $v) {
            $fieldsList .= "`$k`, ";
            $valuesList .= $this->db->quote($v) . ", ";
        }
        $fieldsList = substr($fieldsList, 0, -2);
        $valuesList = substr($valuesList, 0, -2);

        $query = "INSERT INTO `" . $this->table . "` ($fieldsList) VALUES ($valuesList)";
        $sql = $this->db->prepare($query);
        return $sql->execute();

    }

    /**
     * update() allows to update data with selected criteria
     * @param array $data
     * @param string $where
     * @return boolean
     */
    public function update($data, $where)
    {
        if (!empty($where)) {
            $fieldsListAndValue = '';
            foreach ($data as $k => $v) {
                $fieldsListAndValue .= "`$k`=" . $this->db->quote($v) . ", ";
            }
            $fieldsListAndValue = substr($fieldsListAndValue, 0, -2);

            $q = "UPDATE " . $this->table . " SET $fieldsListAndValue WHERE $where";
            $sql = $this->db->prepare($q);
            return $sql->execute();
        }
        return false;
    }

    /**
     * delete() allows you to delete an occurrence of the table with his id
     * @param type $value_primary
     * @return boolean
     */
    public function delete($value_primary)
    {
        if (!empty($value_primary)) {
            $query = "DELETE FROM `" . $this->table . "` WHERE `" . $this->primary . "`='$value_primary' LIMIT 1";
            $sql = $this->db->prepare($query);
            return $sql->execute();
        }
        return false;
    }

    /**
     * delete() allows you to delete all occurrences
     * @param type $where
     * @return boolean
     */
    public function massDelete($where)
    {
        if (!empty($where)) {
            $query = "DELETE FROM `" . $this->table . "` WHERE $where";
            $sql = $this->db->prepare($query);
            return $sql->execute();
        }
        return false;
    }

    /**
     * string hasher with blowfish encryption
     * @param string $input
     * @param int $rounds
     * @param string $salt
     * @return string hashed password
     */
    public function blowfishHasher($input, $rounds = 7, $salt = "ptm")
    {
        $salt_chars = array_merge(range('A', 'Z'), range('a', 'z'), range(0, 9));
        for ($i = 0; $i < 22; $i++) {
            $salt .= $salt_chars[array_rand($salt_chars)];
        }
        return crypt($input, sprintf('$2a$%02d$', $rounds) . $salt);
    }
}