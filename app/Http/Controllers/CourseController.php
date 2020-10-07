<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CourseController extends Controller
{
    //从一张表中取出所有行
    public function index(){
        $res=DB::table('course')->get();
        dd($res);
    }
    //从一张表中获取一行/一列
    public function cloumn(){
        $course = DB::table('course')->where('course_name', '哈哈')->first();
        // echo $course->course_name;
        //获取单个值
        $course = DB::table('course')->where('course_name', '哈哈')->value('course_name');
        // dd($course);
        //通过id字段来获取单条数据
        $course = DB::table('course')->where(['course_id'=>2])->pluck('course_name');
        // dd($course);
    }
    //获取字段值得列表
    public function value(){
        // $course= DB::table('course')->pluck('course_name');
    }
    //获取总条数
    public function count(){
        $course = DB::table('course')->count();
        // dd($course);
    }
    //检测
    public function test(){

    }
}
