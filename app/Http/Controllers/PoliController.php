<?php

namespace App\Http\Controllers;
use App\Models\Poli;
use App\Models\Jadwal;
use Validator;
use Image;
use App\Models\Hari;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PoliController extends Controller
{
    public function index_poli(Request $request)
    {
        $poli = Poli::get();
        $hari = Hari::get();
        return view('backend_new.poli',compact('poli','hari'));
    }

    public function createThumbnail($path, $width, $height)
    {
        $img = Image::make($path)->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
        });
        $img->save($path);
    }

    public function store_poli(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'nama_poli'             => 'required|max:100',
            'slug_poli'             => 'required|max:100',
            'thumbnail'             => 'required',
            'online_registrasi'     => 'required',
            'hari.*'                => 'required'
        ]);

        if ($validator->fails()) {

            return redirect()->back()->with(['danger' => $validator->messages()]);

        }else {

            $exist = Poli::where('slug_poli', $request->slug_poli)->first();

            if ($exist == null) {
                # create new code...
                if($request->hasFile('img_poli')) {

                    $filename    = time().'.'.$request->img_poli->getClientOriginalExtension();
                    $filename2   = '_small_'.time().'.'.$request->img_poli->getClientOriginalExtension();
                    $filename3   = '_medium_'.time().'.'.$request->img_poli->getClientOriginalExtension();
                    $filename4   = '_large_'.time().'.'.$request->img_poli->getClientOriginalExtension();

                    $request->file('img_poli')->storeAs('public/img_poli', $filename);
                    $request->file('img_poli')->storeAs('public/img_poli/thumbnail', $filename2);
                    $request->file('img_poli')->storeAs('public/img_poli/thumbnail', $filename3);
                    $request->file('img_poli')->storeAs('public/img_poli/thumbnail', $filename4);

                    $smallthumbnailpath = public_path('storage/img_poli/thumbnail/'.$filename2);
                    $this->createThumbnail($smallthumbnailpath, 150, 93);
            
                    $mediumthumbnailpath = public_path('storage/img_poli/thumbnail/'.$filename3);
                    $this->createThumbnail($mediumthumbnailpath, 300, 185);
            
                    $largethumbnailpath = public_path('storage/img_poli/thumbnail/'.$filename4);
                    $this->createThumbnail($largethumbnailpath, 550, 340);

                    $data       = Poli::updateOrCreate(
                        [
                            'id'=>$request->id
                        ],
                        [
                            'nama_poli' =>  $request->nama_poli,
                            'slug_poli' =>  Str::slug($request->slug_poli),
                            'thumbnail' =>  $request->thumbnail,
                            'online_registrasi' => $request->online_registrasi,
                            'img_poli'  => $filename
                        ]
                    );

                    for ($i = 0; $i < count($request->hari); $i++) {
                        $jadwal[] = [
                            'poli_id'    => $data->id,
                            'hari'       => $request->hari[$i],
                        ];
                    }

                    if (count($request->hari) > 0) {
                        # code...
                        $hari   = $request->hari;
                        $haris  = Hari::whereIn('id', $hari)->get();
                        $data->hari()->syncwithoutdetaching($haris);
                    }
    
                    if ($request->ajax()) {
                        # code...
                        return response()->json([
                            'status' => 200,
                            'message'  => 'Poli berhasil ditambahkan',                        
                        ]);
                    }else {
                        # code...
                        return redirect()->back()->with(['success' => 'Poli berhasil ditambahkan']);
                    }

                }else {
                    # code...
                    $data       = Poli::updateOrCreate(
                        [
                            'id'=>$request->id
                        ],
                        [
                            'nama_poli' =>  $request->nama_poli,
                            'slug_poli' =>  Str::slug($request->slug_poli),
                            'thumbnail' =>  $request->thumbnail,
                            'online_registrasi' => $request->online_registrasi,
                            
                        ]
                    );

                    if (count($request->hari) > 0) {
                        # code...
                        $hari   = $request->hari;
                        $haris  = Hari::whereIn('id', $hari)->get();
                        $data->hari()->syncwithoutdetaching($haris);
                    }
    
                    if ($request->ajax()) {
                        # code...
                        return response()->json([
                            'status' => 200,
                            'message'  => 'Poli berhasil ditambahkan',                        
                        ]);
                    }else {
                        # code...
                        return redirect()->back()->with(['success' => 'Poli berhasil ditambahkan']);
                    }
                }

            }else {
                # code...
                if ($exist->id == $request->id) {
                    # update code...
                    if($request->hasFile('img_poli')) {

                        $filename    = time().'.'.$request->img_poli->getClientOriginalExtension();
                        $filename2   = '_small_'.time().'.'.$request->img_poli->getClientOriginalExtension();
                        $filename3   = '_medium_'.time().'.'.$request->img_poli->getClientOriginalExtension();
                        $filename4   = '_large_'.time().'.'.$request->img_poli->getClientOriginalExtension();
    
                        $request->file('img_poli')->storeAs('public/img_poli', $filename);
                        $request->file('img_poli')->storeAs('public/img_poli/thumbnail', $filename2);
                        $request->file('img_poli')->storeAs('public/img_poli/thumbnail', $filename3);
                        $request->file('img_poli')->storeAs('public/img_poli/thumbnail', $filename4);
    
                        $smallthumbnailpath = public_path('storage/img_poli/thumbnail/'.$filename2);
                        $this->createThumbnail($smallthumbnailpath, 150, 93);
                
                        $mediumthumbnailpath = public_path('storage/img_poli/thumbnail/'.$filename3);
                        $this->createThumbnail($mediumthumbnailpath, 300, 185);
                
                        $largethumbnailpath = public_path('storage/img_poli/thumbnail/'.$filename4);
                        $this->createThumbnail($largethumbnailpath, 550, 340);
    
                        $data       = Poli::updateOrCreate(
                            [
                                'id'=>$request->id
                            ],
                            [
                                'nama_poli' =>  $request->nama_poli,
                                'slug_poli' =>  Str::slug($request->slug_poli),
                                'thumbnail' =>  $request->thumbnail,
                                'online_registrasi' => $request->online_registrasi,
                                'img_poli'  => $filename
                            ]
                        );
    
                        if (count($request->hari) > 0) {
                            # code...
                            $hari   = $request->hari;
                            $haris  = Hari::whereIn('id', $hari)->get();
                            $data->hari()->sync($haris);
                        }
                        // return redirect()->back()->with(['success' => 'Poli berhasil ditambahkan']);
                        if ($request->ajax()) {
                            return response()->json([
                                'status' => 200,
                                'message'  => 'Poli berhasil diperbarui',                        
                            ]);
                        }
                        
                    }else {
                        # code...
                        $data       = Poli::updateOrCreate(
                            [
                                'id'=>$request->id
                            ],
                            [
                                'nama_poli' =>  $request->nama_poli,
                                'slug_poli' =>  Str::slug($request->slug_poli),
                                'thumbnail' =>  $request->thumbnail,
                                'online_registrasi' => $request->online_registrasi,
                                
                            ]
                        );
    
                        if (count($request->hari) > 0) {
                            # code...
                            $hari   = $request->hari;
                            $haris  = Hari::whereIn('id', $hari)->get();
                            $data->hari()->sync($haris);
                        }
                        // return redirect()->back()->with(['success' => 'Poli berhasil ditambahkan']);
                        if ($request->ajax()) {
                            return response()->json([
                                'status' => 200,
                                'message'  => 'Poli berhasil diperbarui',                        
                            ]);
                        }
                    }


                }else {
                    # exist code...
                    if ($request->ajax()) {
                        # code...
                        return response()->json([
                            'status' => 400,
                            'message'  => 'Poli tersebut sudah ada dalam sistem',                        
                        ]);
                    }else {
                        # code...
                        return redirect()->back()->with(['danger' => 'Poli tersebut sudah ada dalam sistem']);
                    }
                    
                }
            }
        }
        
    }

    public function edit_poli($id)
    {
        $poli = Poli::count();
        $data = Poli::findOrFail($id);
        $hari = Hari::get();
        return view('backend_new.poli_edit',compact('poli','data','hari'));
    }

    public function remove_poli(Request $request)
    {
        $poli = Poli::findOrFail($request->id);

        if ($poli->hari->count() > 0) {
            # code...
            $poli->hari()->detach();
            $poli->delete();

            if ($request->ajax()) {
                # code...
                return response()->json([
                    'status' => 200,
                    'message'  => 'Poli tersebut berhasil dihapus',                        
                ]);
            }else {
                # code...
                return redirect()->back()->with(['danger' => 'Poli tersebut berhasil dihapus']);
            }

        }else {
            # code...
            $poli->delete();

            if ($request->ajax()) {
                # code...
                return response()->json([
                    'status' => 200,
                    'message'  => 'Poli tersebut berhasil dihapus',                        
                ]);
            }else {
                # code...
                return redirect()->back()->with(['danger' => 'Poli tersebut berhasil dihapus']);
            }
        }
    }
}
