<?php
/**
 * Created by PhpStorm.
 * User: Hoan
 * Date: 11/9/2016
 * Time: 10:48 PM
 */

namespace Administration\Models;

use Library\Core\Model as MainModel;

class Schedule extends MainModel
{
    protected $table = 'schedule';
    protected $primary = 'id';

    public function __construct($co)
    {
        parent::__construct($co);
    }

    /** get an array of String input(in date format)
     * convert to $date (in UNIX timestamp)
     * add to $registerdTasks
     * return $registerdTasks
     * @param array $tasks
     * @return array
     */
    public function incomingTask($tasks = array())
    {
        $registerdTasks = array();
        for ($i = 0; $i < sizeof($tasks); $i++) {
            $date = strtotime($tasks[$i]);
            array_push($registerdTasks, $date);
        }
        return $registerdTasks;
    }

    /**
     * Compare the given $date with the current date
     * if the different between now and the given date is within a day
     *              return 0;
     * if now is ahead of the given date
     *              return 1;
     * if the now is before the given date
     *              return -1;
     */
    public function alertIncomingTask($givenDate)
    {
        $now = time();
        $nowYear = date('Y', $now);
        $nowMonth = date('m', $now);
        $nowDay = date('d', $now);
        $givenDateYear = date('Y', $givenDate);
        $givenDateMonth = date('m', $givenDate);
        $givenDateDay = date('d', $givenDate);
        $sub = $givenDateDay - $nowDay;
        if ($givenDateYear == $nowYear && $givenDateMonth == $nowMonth) {
            if ($sub > 0) {
                return 1;
            } elseif ($sub < 0) {
                return -1;
            } else {
                return 0;
            }
        } else {
            $error = "year or month no match";
            return $error;
        }
    }
}