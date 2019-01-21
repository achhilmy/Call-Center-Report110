<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WorkOrder;
//use App\Http\Controller\DB;
use DB;
use App\Quotation;


class WorkOrderController extends Controller
{
    public function index()
    {
        $work_orders = WorkOrder::latest()->paginate('5');
        //dd($work_orders);
        return view('pages.tbl_workorder', compact('work_orders'));
    }
    public function create()
    {
        return view('pages.workorder');
    }

    public function store()
    {
        WorkOrder::create([
            'no_pengaduan'=> request('no_pengaduan'),
            'id_telp'=> request('id_telp'),
            'pelapor'=> request('pelapor'),
            'detail'=> request('detail'),
            'polda'=> request('polda'),
            'polres'=> request('polres'),
            'eskalasi'=> request('eskalasi'),
            'status'=> request('status'),
            'tgl_laporan'=> request('tgl_laporan'),
            'sub_kategori'=> request('sub_kategori'),
            'kategori'=> request('kategori')
        ]); 
        return redirect ('/workorder');
    }

    public function import_xls(Request $request){

        $this->validate($request,[
            'file'=>'required|mimes:csv,txt,xlsx'
        ]);

        if(($handle = fopen($_FILES['file']['tmp_name'],"r"))!==FALSE){
            fgetcsv($handle);

            while(($data = fgetcsv($handle, 1000,","))!==FALSE){
                $addPro = DB::table('work_orders')->insert([
                    'no_pengaduan'  =>  $data[0],
                    'id_telp'       =>  $data[1],
                    'pelapor'       =>  $data[2],
                    'detail'        =>  $data[3],
                    'polda'         =>  $data[4],
                    'polres'        =>  $data[5],
                    'eskalasi'      =>  $data[6],
                    'status'        =>  $data[7],
                    'tgl_laporan'   =>  $data[8],
                    'sub_kategori'  =>  $data[9],
                    'kategori'      =>  $data[10],
                    'created_at'=> \Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at'=>  \Carbon\Carbon::now()->toDateTimeString()
                ]);
            } return redirect()->back();
        } 
    }
    public function delete($id_work_order)
    {
     DB::table('work_orders')->where('id_work_order',$id_work_order)->delete();
 
      return redirect()->back();
    }

    public function edit()
    {
 
      $work_orders = WorkOrder::all();
 
      return view ('pages.edit', compact('work_orders'));
    }
    public function update(WorkOrder $work_orders)
    {
      $work_order->update([
        'no_pengaduan'=> request ('no_pengaduan'),
        'id_telp'=> request('id_telp'),
        'pelapor'=>request('pelapor'),
        'detail'=> request ('detail'),
        'polda'=> request('polda'),
        'polres'=>request('polres'),
        'eskalasi'=> request ('eskalasi'),
        'status'=> request('status'),
        'tgl_laporan'=>request('tgl_laporan'),
        'sub_kategori'=> request ('sub_kategori'),
        'kategori'=> request('kategori'),        
      ]);
      return redirect()->route('pages.tbl_workorder');
    }
}
