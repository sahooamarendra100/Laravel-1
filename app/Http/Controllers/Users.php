<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Users extends Controller
{
    
   /* function dbCheck()
    {
         $users=DB::select('select * from user');    //print data on the monitor
         print_r($users);
    }*/


   /* function dbCheck()
    {
        $users=DB::table('user')->get();        //get all the data from data base and show on the display
        print_r($users);
    }*/

   /* function dbCheck()
    {
        $users=DB::table('user')
        ->where('name','amarendra')
        ->get();                              //get wher condition  data from data base and show on the display
        print_r($users);
    }*/

   /* function dbCheck()
    {
        $users=DB::table('user')
        ->find(2);                       //get the data by id
        print_r($users);
    }*/

    /*function dbCheck()
    {
        $users=DB::table('user')
       ->count();                             //get how much data is in the table from data base and show on the display
        print_r($users);
    }*/

   /* function dbCheck()
    {
        $users=DB::table('user')
        ->insert([
            'id'=>3,
            'name'=> 'bubu',                       //insert a data
            'email'=> 'bubu@gmail.com',
            'address'=> 'cuttack'
        ])    ;                        
        print_r($users);
    }*/

   /* function dbCheck()
    {
        $users=DB::table('user')
        ->where ('name','amarendra')           //update data
        ->update([
            'email'=> 'bubu@gmail.com'
        ])    ;                        
        print_r($users);
    }*/
}
