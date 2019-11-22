<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class DynamicController extends Controller
{
    function index()
    {
     $taluk_list = DB::table('kottayam')
         ->groupBy('taluk')
         ->get();
     return view('newapk')->with('taluk_list', $taluk_list);
    }

    function fetch(Request $request)
    {
     $select = $request->get('select');
     $value = $request->get('value');
     $dependent = $request->get('dependent');
     $data = DB::table('kottaym')
       ->where($select, $value)
       ->groupBy($dependent)
       ->get();
       $output = '<option value="">Select '.ucfirst($dependent).'</option>';
     foreach($data as $row)
     {
      $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
     }
     echo $output;
    }
}

?>
