<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class HomepController extends Controller
{
    public function index()
    {
        return view('homep');
    }
}