<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 1/8/2018
 * Time: 4:38 PM
 */

namespace App\classes;


class Database
{
    public function dbConnection(){
        $hostName='localhost';
        $userName='root';
        $password='';
        $dbName='blog72';
        $link=mysqli_connect($hostName, $userName, $password, $dbName);
        return $link;
    }
}