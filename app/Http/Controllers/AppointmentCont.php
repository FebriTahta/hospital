<?php

namespace App\Http\Controllers;
use App\Models\Cabang;
use App\Models\Jadwal;
use App\Models\Spesialis;
use Carbon;
use App\Models\Doctor;
use App\Models\Booking;
use App\Models\Pasien;
use Validator;
use Illuminate\Http\Request;

class AppointmentCont extends Controller
{
    public function choose_doctor(Request $request, $dokter_id)
    {
        // $dokter_id = \Crypt::decrypt($dokter_id);
        $dokter    = Doctor::findOrFail($dokter_id);
        $hari      = $dokter->jadwal;
        $hari_full= ['0','1','2','3','4','5','6'];
        $hari_vl   = [];
        $hari_vl2  = [];
        foreach ($hari as $key => $value) {
            # code...
            $hari_vl[] = $value->hari_vl;
        }
        $jadwal_hari = implode(',',$hari_vl);

        $hari2 = array_diff($hari_full, $hari_vl);
        foreach ($hari2 as $key => $val) {
            # code...
            $hari_vl2[] = $val;
        }
        $jadwal_hari2 = implode(',',$hari_vl2);
        // return $hari2;
        return view('page.appointment.choose_doctor',compact('dokter','jadwal_hari','jadwal_hari2'));
    }

    public function choose_specialist()
    {
        $cabang = Cabang::get();
        $spesialis = Spesialis::get();
        return view('page.appointment.choose_specialist',compact('cabang','spesialis'));
    }

    public function map_cabang(Request $request)
    {
        if ($request->ajax()) {
            $maps_cabang = Cabang::whereNotNull('longitude')->whereNotNull('latitude')
                            ->select('id','nama_cabang','alamat_cabang','longitude','latitude','telp_cabang')
                            ->get();
            if (count($maps_cabang) > 0) {
                # code...
                return response()->json(
                    [
                        'status'        => 200,
                        'maps_cabang'   => $maps_cabang,
                        'message'       => 'menampilkan data cabang tilawati & nurul falah'
                    ]
                );   
            }
        }
    }

    public function choose_specialist_result(Request $request)
    {
        $rs = $request->cabang_id;
        $hr = $request->hari;
        $sp = $request->spesialis_id;

        $dokter = Doctor::where('cabang_id', $rs)
                        ->where('spesialis_id', $sp)
                        ->whereHas('jadwal', function($query) use ($hr)
                        {
                            $hari_array = array($hr);
                            $query->whereIn('hari_vl', $hari_array);
                        })
                        ->get();
        return view('page.appointment.choose_doctor_list',compact('dokter'));
    }

    public function choose_doctor_result(Request $request)
    {
        $data = [];

        if($request->has('q')){
            $search = $request->q;
            $data   = Doctor::with('spesialis')
                            ->where('nama_dokter','LIKE','%'.$search.'%')
            		        ->get();
        }else{
            $data = Doctor::get();
        }
        return response()->json($data);
    }

    public function find_doctor(Request $request,$doctor_id)
    {
        if ($request->ajax()) {
            $data = Doctor::where('id',$doctor_id)->with('spesialis','cabang')->first();
            return response()->json($data);
        }
    }

    public function search_schedule(Request $request, $doctor_id, $tahun,$bulan,$tanggal)
    {
        if ($request->ajax()) {
            
            $date    = $tahun.'/'.$bulan.'/'.$tanggal;
            $jadwal1 = strtolower(\Carbon\Carbon::parse($date)->format('l'));
            $jadwal2 = Jadwal::where('hari_en', $jadwal1)->first();

            $data    = Doctor::where('id', $doctor_id)->with('jadwal', function($q) use($jadwal1){
                $q->where('hari_en', $jadwal1);
            })->first();
            // $data = Doctor::where('id',$doctor_id)->with('jadwal',function($q) use ($jadwal1) {
            //     $q->where('hari_en', $jadwal1);
            // })->first();
            $hari_start = [];
            $hari_end = [];
            foreach ($data->jadwal as $key => $value) {
                # code...
                $hari_start[] = $value->hari_jam_start;
                $hari_end[] = $value->hari_jam_end;
            }
            $start = implode(',', $hari_start);
            $end   = implode(',', $hari_end);

            return response()->json(
                [
                    'status'=> 200,
                    'start' => $start,
                    'end'   => $end,
                ]
            );
        }
    }

    public function booking_jadwal(Request $request)
    {
        if ($request->ajax()) {
        
            $validator = Validator::make($request->all(), [
                'nik_pasien'     => 'required',
                'nama_pasien'    => 'required',
                'telp_pasien'    => 'required',
                'tgl'    => 'required',
                'bln'    => 'required',
                'thn'    => 'required',
                // 'tanggals' => 'required'
            ]);
    
            if ($validator->fails()) {
    
                return response()->json([
                    'status' => 400,
                    'message'  => 'Pastikan semua field diisi dengan benar',
                    'errors' => $validator->messages(),
                ]);
    
            }else {
                $exist = Pasien::where('nik_pasien', $request->nik_pasien)->first();
                if ($exist !== null) {
                    # code...
                    return response()->json([
                        'status' => 400,
                        'message'  => 'Anda Sudah Terdaftar',
                    ]);

                }else {
                    # code...
                    if (strlen($request->nik_pasien) < 16) {
                        # code...
                        return response()->json([
                            'status' => 400,
                            'message'  => 'NIK tidak valid',
                        ]);
                    }else {
                        # code...
                        if ($request->tanggals == null) {
                            # code...
                            return response()->json([
                                'status' => 400,
                                'message'  => 'Pilih tanggal temu terlebih dahulu',
                            ]);
                        }else {
                            # code...
                            $tgl = $request->tgl;
                            $bln = $request->bln;
                            $thn = $request->thn;
    
                            $tanggal = 0;
                            if (strlen($tgl) < 2) {
                                # code...
                                $tanggal = '0'.$tgl;
                            }else {
                                # code...
                                $tanggal = $tgl;
                            }
    
                            $date = $thn.'/'.$bln.'/'.$tanggal;
                            $tanggal_booking = $request->tanggals;
    
                            $data   = Pasien::updateOrCreate(
                                [
                                    'id' => $request->id
                                ],
                                [
                                    'nik_pasien'         => $request->nik_pasien,
                                    'nama_pasien'        => $request->nama_pasien,
                                    'telp_pasien'        => $request->telp_pasien,
                                    'tanggal_lahir_pasien'    => $date,
                                ]
                            );
    
                            $book   = Booking::updateOrCreate(
                                [
                                    'id' => $request->id
                                ],
                                [
                                    'doctor_id'        => $request->doctor_id,
                                    'pasien_id'        => $data->id,
                                    'cabang_id'        => $request->cabang_id,
                                    'spesialis_id'     => $request->spesialis_id,
                                    'tanggal_booking'  => $tanggal_booking,
                                    'status'           => 'daftar pertama'
                                ]
                            );
    
                            return response()->json([
                                'status' => 200,
                                'id'     => $data->id,
                                'message'  => 'Anda berhasil mendaftar',
                            ]);
                        }
                        
                    }

                }

                
            }
        }
    }

    public function status_booking(Request $request, $pasien_id)
    {
        $data_pasien = Pasien::where('id', $pasien_id)->first();
        $data_booking = Booking::where('pasien_id', $pasien_id)->get();
        $data_booking_terbaru = Booking::orderBy('updated_at', 'desc')->where('pasien_id', $pasien_id)->first();
        return view('page.appointment.booking_status',compact('data_pasien','data_booking','data_booking_terbaru'));
    }

    public function cek_data_pasien(Request $request)
    {
        $exist = Pasien::where('nik_pasien', $request->nik)->where('telp_pasien', $request->telp)->first();
        if ($exist !== null) {
            # ada code...
            return response()->json([
                'status' => 200,
                'id'   => $exist->id,
                'message'  => 'Data Ditemukan',
            ]);
        }else {
            # tida ada code...
            return response()->json([
                'status' => 400,
                'message'  => 'Anda Belum Terdaftar silahkan isi form berikut terlebih dahulu',
            ]);
        }
    }
}
