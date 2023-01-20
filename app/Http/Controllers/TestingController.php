<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB\Client as mongo;

class TestingController extends Controller
{
    //

    function testLocalDb(){
        $mongo= new Mongo;

        $connection = $mongo->mongoApp->users;

        return $connection->find()->toArray();
    }
}
