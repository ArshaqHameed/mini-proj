<?php

namespace App\Http\Controllers;
use App\Newapk;
use App\Newapk as AppNewapk;
use DB;
use Illuminate\Http\Request;
class NewApkController extends Controller
{
    public function create()
    {
        return view('newapk');
    }

    public function index()
    {
        $data = Newapk::all()->sortBy('ration');
        return view('editapk',compact('data'));
    }

    public function store()
    {

        $this -> validate(request(),
        [
            'ration'        =>  'required|numeric|digits:10',
            'name'          =>  'required|string',
            'gender'        =>  'required|string|in:male,female,trans',
            'age'           =>  'required|numeric',
            'mobile'        =>  'required|numeric|digits:10',
            'head'          =>  'required|string|in:yes,no',
            'housename'     =>  'required|string',
            'taluk'         =>  'required|string',
            'village'       =>  'required|string',
            'panchayath'    =>  'required|string',
        ]);

        $newapk = new Newapk;

        $newapk->ration         = request('ration');
        $newapk->name           = request('name');
        $newapk->gender         = request('gender');
        $newapk->age            = request('age');
        $newapk->mobile         = request('mobile');
        $newapk->head           = request('head');
        $newapk->housename      = request('housename');
        $newapk->taluk          = request('taluk');
        $newapk->village        = request('village');
        $newapk->panchayath     = request('panchayath');
        $newapk->nofamily       = request('nofamily');
        $newapk->adhar          = request('adhar');
        $newapk->account        = request('account');
        $newapk->ifsc           = request('ifsc');

        $newapk->save();
        return redirect()->route('newapk.create')->with('success', 'Application Registered !!!...');
    }

    function check(Request $request)
    {

        if($request->get('ration'))
        {
            $ration = $request->get('ration');
            $data = DB::table('newapks')
                ->where('ration',$ration)
                ->count();
            if($data > 0)
            {
                echo 'not_unique';
            }
            else
            {
                echo 'unique';
            }

        }
    }
    public function edit($ration)
    {
        $newapk = Newapk::find($ration);
        return view('updateapk',compact('newapk'));
    }

    public function update(Request $request,$ration)
    {
        $request->validate([
            //'ration'        =>  'required|numeric|digits:10',
            'name'          =>  'required|string',
            'gender'        =>  'required|string|in:male,female,trans',
            'age'           =>  'required|numeric',
            'mobile'        =>  'required|numeric|digits:10',
            'head'          =>  'required|string|in:yes,no',
            'housename'     =>  'required|string',
            'taluk'         =>  'required|string',
            'village'       =>  'required|string',
            'panchayath'    =>  'required|string',
            'adhar'         =>  'required|numeric|digits:12',
            'account'       =>  'required|numeric',
            'ifsc'          =>  'required|string',
        ]);
        $newapk = Newapk::find($ration);
        //$newapk->ration =  $request->get('ration');
        $newapk->name = $request->get('name');
        $newapk->gender = $request->get('gender');
        $newapk->age = $request->get('age');
        $newapk->mobile = $request->get('mobile');
        $newapk->head = $request->get('head');
        $newapk->housename = $request->get('housename');
        $newapk->taluk = $request->get('taluk');
        $newapk->village = $request->get('village');
        $newapk->panchayath = $request->get('panchayath');
        $newapk->nofamily = $request->get('nofamily');
        $newapk->adhar = $request->get('adhar');
        $newapk->account = $request->get('account');
        $newapk->ifsc = $request->get('ifsc');
        $newapk->save();
        return redirect()->route('newapk.index')->with('success', 'Application Updated !!!...');
    }

}
