<?php

namespace App\Http\Controllers;
use App\Models\Jadwal;
use App\Models\Doctor;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function jadwal_store(Request $request)
    {
        $doctor = Doctor::findOrFail($request->id);
        $jadwal = Jadwal::updateOrCreate(
            [
                'id'=>$request->id_jadwal
            ],
            [
                'hari_id'=>$request->hari_id,
                'hari_en'=>$request->hari_en,
                'hari_vl'=>$request->hari_vl,
                'hari_jam_start'=>$request->hari_jam_start,
                'hari_jam_end'=>$request->hari_jam_end,
            ],

        );
        
        $doctor->jadwal()->syncwithoutdetaching($jadwal);
        return response()->json(
            [
                'status'  => 200,
                'message' => 'Jadwal Dokter '.ucwords($doctor->nama_dokter).' telah diperbarui',
            ]
        );
    }
}
