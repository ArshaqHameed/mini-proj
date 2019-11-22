<?php

namespace App\Http\Controllers;

use App\Bills;
use Illuminate\Http\Request;
use DB;
use App\Newapk;
use PDF;
use Carbon\Carbon;
class BillController extends Controller
{
    public function index()
    {
        $data = DB::table('newapks')->where('isbill','=',0)
        ->whereNotNull('adhar')
        ->whereNotNull('account')
        ->whereNotNull('ifsc')
        ->get()->sortBy('ration');
        // $dt = Bills::select('ration_id')
        // ->join('newapks', 'newapks.ration', '=', 'forbills.ration_id')
        // ->delete();

        return view('billapk',compact('data'));
    }

    public function viewbill()
    {
        // $data1 = DB::table('newapks')
        // ->where
        // ([
        //     ['isbill','=',1]
        // ])->get();
        $data1 = Newapk::select('ration','account','ifsc')
        ->join('forbills', 'forbills.ration_id', '=', 'newapks.ration')
        ->get();

        return view('gen',compact('data1'));
    }

    function pdf()
    {
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->convertPDF());


        return $pdf->stream();
    }

    function get_bill_data()
    {
        $b_data = Newapk::select('ration','account','ifsc')
        ->join('forbills', 'forbills.ration_id', '=', 'newapks.ration')
        ->get();
        return $b_data;
    }


    function convertPDF()
    {
        $bill_data = $this->get_bill_data();
        $no = (123456)+2;
        $date = Carbon::now()->toDateTimeString();
        $output = '
        <h3 align="center">Bills</h3>
        <hr>
        <br>
        <h4>Bill No : '.($no+1).'</h4>
        <h4>Date : '.($date).'</h4>
        <br>
        <table width="100%" style="border-collapse: collapse; border: 0px;">
        <tr>
            <th style="border: 1px solid; padding:12px;" align="center" width="20%">Sl No.</th>
            <th style="border: 1px solid; padding:12px;" align="center" width="20%">Ration Card No</th>
            <th style="border: 1px solid; padding:20px;" align="center" width="30%">Bank Account</th>
            <th style="border: 1px solid; padding:12px;" align="center" width="15%">IFSC Code</th>
        </tr>
            ';
        $total = 0;
        foreach($bill_data as $k => $bd)
        {
            $output .= '
            <tr>
                <td style="border: 1px solid; padding:12px;" align="center">'.++$k.'</td>
                <td style="border: 1px solid; padding:12px;" align="center">'.$bd->ration.'</td>
                <td style="border: 1px solid; padding:12px;" align="center">'.$bd->account.'</td>
                <td style="border: 1px solid; padding:12px;" align="center">'.$bd->ifsc.'</td>
            </tr>
        ';
            $total = $k;
        }
        $output .= '<h3 align="right">Total Amount = '.($total*10000).'</h3>';
        $output .= '</table>';
        return $output;
    }


    public function storebill($ration)
    {
        //$data = Newapk::find($ration);
        //$data1 = DB::select('select account from newapks where ration=?',[$ration]);
        //$data2 = DB::select('select ifsc from newapks where ration=?',[$ration]);
        $newapk = DB::update('update newapks set isbill = 1 where ration = ?', [$ration]);
        DB::insert('insert into forbills (ration_id) values (?)', [$ration]);
        return redirect()->route('bill.index');
    }

    function de()
    {
        $dt = Bills::select('ration_id')
        ->join('newapks', 'newapks.ration', '=', 'forbills.ration_id')
        ->delete();
        return view('user');
    }
}












