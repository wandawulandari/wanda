<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HelloController extends Controller
{
    public function test()
    {
    	return 'ini dari controller hello dan fun test';
    }
}