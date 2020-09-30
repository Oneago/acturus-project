<?php


namespace App\Models;

use mysqli;

class Connection
{
    /**
     * @return mysqli database connection
     */
    public static function init(): mysqli
    {
        $con = mysqli_connect($_ENV["DB_HOST"], $_ENV["DB_USER"], $_ENV["DB_PASS"]) or die("Fail connecting to DB");
        mysqli_select_db($con, $_ENV["DB_NAME"]) or die("Can't select DB");
        mysqli_set_charset($con, 'utf8');
        return $con;
    }
}