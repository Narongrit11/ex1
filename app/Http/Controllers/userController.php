<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function inde(){
        return "สวัสดี";
    }
    public function greeting($name){
        return "สวัสดี $name";
    }
    public function calculator($num1,$num2,$num3){
        return "ผลรวมของเลข $num1, $num2 และ $num3 คือ ".($num1+ $num2+ $num3)."ครับ";
    }
    public function index(){
        return "สวัสดีจากหน้า User index";
    }
    public function show($id){
        return "เธอคือ id $id";
    }
    public function update($id){
        return "กำลัง update $id";
    }
}
