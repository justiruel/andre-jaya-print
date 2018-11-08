<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Http\File;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

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
        if(!empty($value['tanggal'])){
          $data[$key]['tanggal'] = $value['tanggal']->format('d-M-Y');
        }
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
        if(!empty($value['tanggal'])){
          $data[$key]['tanggal'] = $value['tanggal']->format('d-M-Y');
        }
        $data[$key]['gaji_kotor'] = "Rp" . number_format($data[$key]['gaji_kotor'], 0, ",", ".");
        $data[$key]['lembur'] = "Rp" . number_format($data[$key]['lembur'], 0, ",", ".");
        $data[$key]['tabungan'] = "Rp" . number_format($data[$key]['tabungan'], 0, ",", ".");
        $data[$key]['bpjs'] = "Rp" . number_format($data[$key]['bpjs'], 0, ",", ".");
        $data[$key]['angsuran_seragam'] = "Rp" . number_format($data[$key]['angsuran_seragam'], 0, ",", ".");
        $data[$key]['total'] = "Rp" . number_format($data[$key]['total'], 0, ",", ".");
      }
      return view('user',['data'=>$data]);  
    }


    public function signin(Request $request) 
    {
      return view('signin'); 
    }

    public function run_signin(Request $request) 
    {
      //user=andrejaya
      //password=andrejaya99
      $username = $request->input('username');
      $password = $request->input('password');

      if ($username == "andrejaya" && $password == "andrejaya99" ){
        $request->session()->put('key', 'cvandrejaya');
        return redirect('/upload');
      }else{
        return redirect('/signin');
      }
    }


    public function run_signout(Request $request) 
    {
      $request->session()->forget('key');
      return redirect('/signin');
    }

    public function retrieve_data_karyawan(Request $request) 
    {
      $data = DB::table('karyawan')->get();
      echo "<pre/>";
      print_r($data);
      //return view('data_karyawan'); 
    }

}
