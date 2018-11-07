<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Http\File;
use Carbon\Carbon;

class UsersController extends Controller 
{
    // public function export() 
    // {
    //     return Excel::download(new UsersExport, 'users.xlsx');
    // }
    
    public function import() 
    {
      $data =  Excel::selectSheetsByIndex(0)->load(public_path().'/users.xlsx', function($reader) {})->toArray();
      foreach ($data as $key => $value) {
        $data[$key]['tanggal'] = $value['tanggal']->format('d-M-Y');
        $data[$key]['gaji_kotor'] = "Rp" . number_format($data[$key]['gaji_kotor'], 0, ",", ".");
        $data[$key]['lembur'] = "Rp" . number_format($data[$key]['lembur'], 0, ",", ".");
        $data[$key]['tabungan'] = "Rp" . number_format($data[$key]['tabungan'], 0, ",", ".");
        $data[$key]['bpjs'] = "Rp" . number_format($data[$key]['bpjs'], 0, ",", ".");
        $data[$key]['angsuran_seragam'] = "Rp" . number_format($data[$key]['angsuran_seragam'], 0, ",", ".");
        $data[$key]['total'] = "Rp" . number_format($data[$key]['total'], 0, ",", ".");
      }
      return view('user',['data'=>$data]);  
    }

    public function upload_form() 
    {
      return view('upload');  
    }

    public function run_upload(Request $request) 
    {
      //https://www.tutorialspoint.com/laravel/laravel_file_uploading.htm
      //$file = $request->file('fileUpload');
      //$destinationPath = 'uploads';
      //$file->move($destinationPath,$file->getClientOriginalName());
      $path = $request->fileUpload->storeAs('file', 'users.xlsx'); 
      $data =  Excel::selectSheetsByIndex(0)->load(storage_path().'\app\file\users.xlsx', function($reader) {})->toArray();
      foreach ($data as $key => $value) {
        $data[$key]['tanggal'] = $value['tanggal']->format('d-M-Y');
        $data[$key]['gaji_kotor'] = "Rp" . number_format($data[$key]['gaji_kotor'], 0, ",", ".");
        $data[$key]['lembur'] = "Rp" . number_format($data[$key]['lembur'], 0, ",", ".");
        $data[$key]['tabungan'] = "Rp" . number_format($data[$key]['tabungan'], 0, ",", ".");
        $data[$key]['bpjs'] = "Rp" . number_format($data[$key]['bpjs'], 0, ",", ".");
        $data[$key]['angsuran_seragam'] = "Rp" . number_format($data[$key]['angsuran_seragam'], 0, ",", ".");
        $data[$key]['total'] = "Rp" . number_format($data[$key]['total'], 0, ",", ".");
      }
      return view('user',['data'=>$data]);  
    }
}
