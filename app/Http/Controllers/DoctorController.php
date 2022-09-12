<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use App\Models\Cabang;
use App\Models\Pendidikan;
use App\Models\Prestasi;
use Validator;
use DB;
use file;
use DataTables;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function doctor_list(Request $request)
    {
        if ($request->ajax()) {
            $data = Doctor::orderBy('id','desc')->with('cabang')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($data){
                    $actionBtn = ' <a href="#" target="_blank" data-toggle="modal" data-target="#modaljadwal" style="min-width: 40px; margin-bottom:10px"
                    data-nama="'.$data->nama_dokter.'" data-id="'.$data->id.'" class="edit btn btn-success btn-sm" ><i class="text-white icon-plus"></i></a>';
                    $actionBtn .= ' <a href="/admin-posting-edit/'.$data->id.'" target="_blank" style="min-width: 40px; margin-bottom:10px" class="edit btn btn-info btn-sm"><i class="text-white icon-pencil"></i></a>';
                    $actionBtn.= ' 
                    <a href="#" data-url="/admin-doctor/remove/'.$data->id.'" style="min-width: 40px; margin-bottom:10px" class="btn btn-danger btn-sm" onclick="return confirmDelete(this);"> <i class="text-white icon-trash"></i></a>';
                    return $actionBtn;
                })
                ->addColumn('img', function($data){
                    return '<img src="'.$data->img_dokter.'" style="border-radius:50%; max-width: 60px" alt="">';
                })
                ->addColumn('cabang', function($data){
                    return $data->cabang->nama_cabang;
                })
                ->addColumn('jadwal', function($data){
                    $jadwal = [];
                    foreach ($data->jadwal as $key => $val) {
                        # code...
                        $jadwal[] = $val->hari_id;
                    }
                    if ($jadwal == null) {
                        # code...
                        return '<a href="#" data-toggle="modal" data-target="#modaljadwal"
                        data-nama="'.$data->nama_dokter.'" data-id="'.$data->id.'" class="text-danger">Belum Ada Jadwal</a>';
                    }else {
                        # code...
                        return implode('<br>',$jadwal);
                    }
                })
            ->rawColumns(['action','cabang','img','jadwal'])
            ->make(true);
        }
        $cabang = Cabang::get();
        $total_doctor = Doctor::count();
        return view('backend_new.doctor',compact('total_doctor','cabang'));
    }

    public function doctor_create()
    {
        $cabang = Cabang::get();
        return view('backend_new.doctor_create',compact('cabang'));
    }

    public function doctor_store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_dokter'   => 'required',
            'tanggal_lahir_dokter'    => 'required',
            'gender_dokter'    => 'required',
            'cabang_id'    => 'required',
            'deskripsi_dokter'    => 'required',
            '*tahun_pendidikan_end' => 'required',
            '*alumni_pendidikan' => 'required',
            '*tahun_prestasi' => 'required',
            '*nama_prestasi' => 'required',

        ]);

        if ($validator->fails()) {

            return response()->json([
                'status' => 400,
                'message'  => 'Pastikan semua field diisi dengan benar',
                'errors' => $validator->messages(),
            ]);

        }else {
            if ($request->img_dokter !== null) {
                # code...
                 # image tidak kosong code...
                 $filename1   = time().'.'.$request->img_dokter->getClientOriginalExtension();
                 $request->img_dokter->move(public_path('img/img_dokter/'), $filename1);
                 # code...
                 $data   = Doctor::updateOrCreate(
                     [
                         'id' => $request->id
                     ],
                     [
                         'nama_dokter'             => $request->nama_dokter,
                         'img_dokter'              => asset('img/img_dokter/'.$filename1),
                         'deskripsi_dokter'        => $request->deskripsi_dokter,
                         'tanggal_lahir_dokter'    => $request->tanggal_lahir_dokter,
                         'gender_dokter'           => $request->gender_dokter,
                         'cabang_id'               => $request->cabang_id,
                         'slug_dokter'             => Str::slug($request->nama_dokter)
                     ]
                 );

                $pendidikan = [];

                foreach($request->alumni_pendidikan as $key => $val) {
                    array_push($pendidikan, array(
                        'dokter_id'   => $data->id,
                        'tahun_pendidikan_end' => $request->tahun_pendidikan_end[$key],
                        'alumni_pendidikan' => $request->alumni_pendidikan[$key]
                    ));
                }

                $prestasi = [];

                foreach ($request->nama_prestasi as $key => $val) {
                    # code...
                    array_push($prestasi, array(
                        'dokter_id' => $data->id,
                        'tahun_prestasi' => $request->tahun_prestasi[$key],
                        'nama_prestasi'  => $request->nama_prestasi[$key]
                    ));
                }


                if ($pendidikan !== null) {
                    # code...
                    DB::table('pendidikans')->insert($pendidikan);
                }

                if ($prestasi !== null) {
                    # code...
                    DB::table('prestasis')->insert($prestasi);
                }
 
                return response()->json(
                    [
                        'status'  => 200,
                        'message' => 'Doctor Registration Successfully!'
                    ]
                );
            }
        }
    }

    public function doctor_remove(Request $request, $id)
    {
        // $id = $request->id;
        $data = Doctor::findOrFail($id);
        $pendidikan = Pendidikan::where('dokter_id',$data->id)->get();
        $prestasi = Prestasi::where('dokter_id',$data->id)->get();

        if ($pendidikan->count() > 0) {
            # code...
            Pendidikan::where('dokter_id',$data->id)->delete();
        }

        if ($prestasi->count() > 0) {
            # code...
            Prestasi::where('dokter_id',$data->id)->delete();
        }
        // lokasi file
        // public_path() = /var/www/html/proj/public
        $file_path = $data->img_doctor; 
        
        // cek jika ada
        if(file_exists($file_path)){ 
            // jalankan hapus file
            unlink($file_path); 
            $data->delete();
            return response()->json(
                [
                    // 'path' => $file_path,
                    'status'  => 200,
                    'message' => 'Doctor has been deleted Successfully!'
                ]
            );
        }else {
            # code...
            $data->delete();
            return response()->json(
                [
                    // 'path' => $file_path,
                    'status'  => 200,
                    'message' => 'Doctor has been deleted Successfully!'
                ]
            );
        }
    }

    public function daftar_dokter(Request $request)
    {
        $data = Doctor::get();
        return view('page.doctor.doctor_list',compact('data'));
    }

    public function daftar_berita(Request $request)
    {
        return view('page.news.news_list');
    }
}
