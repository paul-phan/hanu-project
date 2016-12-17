<?php

namespace Administration\Models;

use Library\Core\Model as MainModel;
use Library\Core\EmployeeModel;

class Employee extends MainModel implements EmployeeModel
{
    protected $table = 'employee';
    protected $table2 = 'salary';
    protected $primary = 'id';

    public function __construct($co)
    {
        parent::__construct($co);
    }

    public function insertEmployee($post)
    {
        return $this->insert(array(
            'employee_name' => isset($post['employee_name']) ? $post['employee_name'] : '',
            'params' => $this->slugify(date("Y-m-d H:i:s") . '-' . $post['employee_name']),
            'dob' => isset($post['dob']) ? $post['dob'] : '',
            'address' => isset($post['address']) ? $post['address'] : '',
            'gender' => isset($post['gender']) ? $post['gender'] : '',
            'phone' => isset($post['phone']) ? $post['phone'] : '',
            'authentication' => isset($post['authentication']) ? $post['authentication'] : '',
            'created' => date("Y:m:d H:i:s"),
            'image' => $post['image']
        ));
    }

    public function modifyEmployee($post, $id)
    {
        return $this->update(array(
            'employee_name' => isset($post['employee_name']) ? $post['employee_name'] : '',
            'params' => $this->slugify(date("Y-m-d H:i:s") . '-' . $post['employee_name']),
            'dob' => isset($post['dob']) ? $post['dob'] : '',
            'address' => isset($post['address']) ? $post['address'] : '',
            'gender' => isset($post['gender']) ? $post['gender'] : '',
            'phone' => isset($post['phone']) ? $post['phone'] : '',
            'authentication' => isset($post['authentication']) ? $post['authentication'] : '',
            'created' => date("Y:m:d H:i:s"),
            'image' => $post['image']
        ),  " id = '$id' ");
    }

    public function insertSalary($post)
    {
        return $this->themData(array(
            'employee_id' => isset($post['employee_id']) ? $post['employee_id'] : '',
            'year' => isset($post['year']) ? $post['year'] : '',
            'month' => isset($post['month']) ? $post['month'] : '',
            'day' => isset($post['day']) ? $post['day'] : '',
            'total_salary' => $post['day']*100000,
            'created' => date("Y:m:d H:i:s")
        ));
    }

    public function displaySalary(){
        return $this->fetchMatchedFields(
            "SELECT employee.id, employee.employee_name, employee.image, salary.year, salary.month, salary.day, 
                     salary.total_salary, salary.id, salary.created
                    FROM employee
             JOIN salary ON salary.employee_id=employee.id GROUP BY salary.year, salary.month
        ");
    }

    public function conStructSQL($value)
    {
        $sql = "SELECT employee_name FROM employee
        WHERE employee_name LIKE '%$value%'";
        return $sql;
    }

    public function pagination($page)
    {
        $colunm = $this->primary;
        //start from the 1st row
        $start = 0;
        //maximum value to be returned each query
        $limit = 3;
        // get total records
        $totalRows = $this->getRowCount($colunm);
        //pages limit
        $totalPages = ceil($totalRows / $limit);
        // if the page number is larger than the page limit-> do nothing
        if ($page <= $totalPages) {
            // Caculating the start element of the database for every pages
            $start = ($page - 1) * $limit;
            //query the real data starting from $start position
            $sql = "SELECT * FROM Employee LIMIT $start,$limit";
            $rs = $this->fetchMatchedFields($sql);
            return $rs;
        } else {
            $er = "out of bound exception";
            return $er;
        }
    }

}