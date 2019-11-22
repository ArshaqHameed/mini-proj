<?php

namespace App\Http\Controllers;

use App\Appeal;
use App\Appealbill;
use Illuminate\Http\Request;
use DB;
use App\Newapk;
use App\Slab;
use Carbon\Carbon;

class AppealController extends Controller
{
    public function search(Request $request)
    {
        $message="Enter Correct Ration Card Number !!!...";

        $question = $request->get('search');
        $data = DB::table('newapks')
                ->where('ration',$question)
                ->where('isappeal','=',0)
                ->get();
        $newapk = DB::update('update newapks set isappeal = 1 where ration = ?', [$question]);
        if(count($data)<1)
        {
            return view('appealapk',compact('message'));
        }
        else
        {
            return view('appealfornewapk',compact('data'));
        }
    }

    public function view()
    {
        return view('appealapk');
    }

    public function store()
    {
        $this -> validate(request(),
        [
            'amount'          =>  'required|in:60000,110000,215000,400000',
        ]);

        $aplapk         =   new Appeal;
        $aplapk->ration         = request('ration');
        $aplapk->name           = request('name');
        $aplapk->mobile         = request('mobile');
        $aplapk->adhar          = request('adhar');
        $aplapk->account        = request('account');
        $aplapk->ifsc           = request('ifsc');
        $aplapk->amount           = request('amount');

        $aplapk->save();
        return redirect()->route('appeal.view')->with('success', 'Appeal for the Application Registered Successfully!!!...');
    }

    public function index()
    {
        $data = DB::select('select * from appeals where isbill = ?',[0]);
        return view('billappeal',compact('data'));
    }

    public function storebill($ration)
    {
        $Appeal = DB::update('update appeals set isbill = 1 where ration = ?', [$ration]);
        // // $data1 = Slab::select('select * from slabs')
        // // ->join('appeals', 'appeals.slab', '=', 'slabs.slab_id')
        // // ->get();

        // $data1 = Slab::select('amount')
        //     ->join('appeals', 'appeals.slab', '=', 'slabs.slab_id')
        //     ->where('appeals.ration', $ration)
        //     ->get();
        // dd($data1);
        // //$Appealbill = DB::insert('insert into appealbills (ration_id,amount) values (?,?)', [$ration],[$data1]);

        // // $Appealbill = DB::insert('insert into appealbills () values (?)', [$data1]);

        // $data1 = Newapk::select('isbill')
        // ->join('appeals', 'appeals.ration', '=', 'newapks.ration')
        // //
        // ->get();
        // $data1 = Newapk::select('isbill')
        // ->join('appeals', 'appeals.ration', '=', 'newapks.ration')
        // ->first();
        // dd($data1);
        return redirect()->route('billappeal.index');
    }

    public function viewdata()
    {
        $data1 = DB::select('select ration,amount,account,ifsc from appeals ');
        return view('secbill',compact('data1'));
    }

    public function pdf1()
    {
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->convert());
        return $pdf->stream();
    }
    function convert()
    {
        $bill_data = $this->get_bill();
        $no = (123456)+2;
        $date = Carbon::now()->toDateTimeString();
        // $current = Carbon::now();
        // $current = new Carbon();
        $output = '
        <h3 align="center">Appeal Bill</h3>
        <hr>
        <br>
        <h4>Bill No : '.($no+1).'</h4>
        <h4>Date : '.($date).'</h4>
        <br>
        <table width="100%" style="border-collapse: collapse; border: 0px;">
        <tr>
            <th style="border: 1px solid; padding:12px;" align="center" width="20%">Sl No.</th>
            <th style="border: 1px solid; padding:12px;" align="center" width="20%">Ration Card No</th>
            <th style="border: 1px solid; padding:12px;" align="center" width="20%">Amount</th>
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
                <td style="border: 1px solid; padding:12px;" align="center">'.($bd->amount-10000).'</td>
                <td style="border: 1px solid; padding:12px;" align="center">'.$bd->account.'</td>
                <td style="border: 1px solid; padding:12px;" align="center">'.$bd->ifsc.'</td>
            </tr>
        ';
            $total += $bd->amount-($k*10000);
        }
        $output .= '<br><br>';
        $output .= '<h3 align="right">Total Amount = '.$total.'</h3>';
        $output .= '</table>';
        return $output;
    }
    function get_bill()
    {
        $b_data = DB::select('select ration,amount,account,ifsc from appeals where isbill= ?',[1]);
        return $b_data;
    }
}




