<?php

namespace App\Http\Controllers;
use App\Models\Kategori;
use App\Models\Posting;
use DataTables;
use Illuminate\Support\Str;
use Validator;
use Image;
use Illuminate\Http\Request;

class PostingController extends Controller
{
    // KATEGORI
    public function index_kategori(Request $request)
    {
        if ($request->ajax()) {
            $data = Kategori::orderBy('id','desc')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($data){
                    $actionBtn = ' <button data-id="'.$data->id.'" data-nama_kategori="'.$data->nama_kategori.'" data-slug_kategori="'.$data->slug_kategori.'" data-toggle="modal" data-target="#modaledit" class="delete btn btn-info btn-sm"><i class="text-white fa fa-pencil"></i></button>';
                    $actionBtn.= ' <a data-target="#modaldel" data-id="'.$data->id.'" data-toggle="modal" href="javascript:void(0)" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>';
                    return $actionBtn;
                })
            ->rawColumns(['action'])
            ->make(true);
        }

        $kategori = Kategori::get();
        return view('backend_new.kategori',compact('kategori'));
    }

    public function remove_kategori(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id'             => 'required|max:100',
        ]);

        if ($validator->fails()) {

            return response()->json([
                'status' => 400,
                'message'  => 'Kategori tidak ditemukan',
                'errors' => $validator->messages(),
            ]);

        }else {
            $data = Kategori::findOrFail($request->id);

            // hapus relasi many to many
            if (count($data->posting) > 0) {
                # code...
                $data->posting()->detach();
                $data->delete();
            }else {
                # code...
                $data->delete();
            }
            
            return response()->json(
                [
                  'status'  => 200,
                  'message' => 'Kategori berhasil dihapus'
                ]
            );
        }
    }   

    public function store_kategori(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_kategori'             => 'required|max:100',
        ]);

        if ($validator->fails()) {

            return response()->json([
                'status' => 400,
                'message'  => 'Response Gagal',
                'errors' => $validator->messages(),
            ]);

        }else {

            $old_exist = Kategori::where('slug_kategori', Str::slug($request->nama_kategori))->first();

            if ($old_exist == null) {
                # create new code...
                $data       = Kategori::updateOrCreate(
                    [
                        'id'=>$request->id
                    ],
                    [
                        'nama_kategori' =>  $request->nama_kategori,
                        'slug_kategori' =>  Str::slug($request->nama_kategori),
                    ]
                );

                return response()->json(
                    [
                      'status'  => 200,
                      'message' => 'Kategori berhasil ditambahkan'
                    ]
                );
            }else {
                # code...
                if ($old_exist->id == $request->id) {
                    # update code...
                    $data       = Kategori::updateOrCreate(
                        [
                            'id'=>$request->id
                        ],
                        [
                            'nama_kategori' =>  $request->nama_kategori,
                            'slug_kategori' =>  Str::slug($request->nama_kategori),
                        ]
                    );

                    return response()->json(
                        [
                          'status'  => 200,
                          'message' => 'Kategori berhasil di Update'
                        ]
                    );
                }else {
                    # sudah ada kategori code...
                    return response()->json([
                        'status' => 400,
                        'message'  => 'Kategori Tersebut sudah terdaftar',
                        'errors' => ['Kategori Tersebut sudah terdaftar'],
                    ]);
                }
            }

        }
    }

    // POSTING
    public function index_posting(Request $request)
    {
        if ($request->ajax()) {
            $data = Posting::orderBy('id','desc')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($data){
                    $actionBtn = ' <a href="/admin-posting-edit/'.$data->id.'" target="_blank" class="edit btn btn-info btn-sm"><i class="text-white fa fa-pencil"></i></a>';
                    $actionBtn.= ' <a data-target="#modaldel" data-id="'.$data->id.'" data-toggle="modal" href="javascript:void(0)" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>';
                    return $actionBtn;
                })
                ->addColumn('kategori', function($data){
                    $kategori = [];
                    foreach ($data->kategori as $key => $value) {
                        # code...
                        $kategori [] = $value->nama_kategori; 
                    }
                    return implode('<br>',$kategori);
                })
                ->addColumn('thumbnail', function($data){
                    // return $data->img_posting;
                    return '<img src="storage/img_posting/thumbnail/_'.$data->thumbnail.'_'.$data->img_posting.'" alt="">';
                })
            ->rawColumns(['action','kategori','thumbnail'])
            ->make(true);
        }

        $posting = Posting::get();
        return view('backend_new.posting',compact('posting'));
    }

    public function create_posting()
    {
        $kategori = Kategori::get();
        return view('backend_new.posting_create',compact('kategori'));
    }

    

    public function store_posting(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul_posting'             => 'required|max:100',
            'deskripsi_posting'         => 'required',
            'kategori_id.*'             => 'required',
            'thumbnail'                 => 'required',
        ]);

        if ($validator->fails()) {

            return response()->json([
                'status'    => 400,
                'message'   => 'Response Gagal',
                'errors'    => $validator->messages(),
            ]);

        }else {
            
            $old_exist = Posting::where('slug_posting', Str::slug($request->judul_posting))->first();

            if ($old_exist == null) {
                # create new posting code...
                if($request->hasFile('img_posting')) {
                    
                    $filename    = time().'.'.$request->img_posting->getClientOriginalExtension();
                    $filename2   = '_small_'.time().'.'.$request->img_posting->getClientOriginalExtension();
                    $filename3   = '_medium_'.time().'.'.$request->img_posting->getClientOriginalExtension();
                    $filename4   = '_large_'.time().'.'.$request->img_posting->getClientOriginalExtension();
    
                    // $request->file('img_posting')->move('img_posting/',$filename);
                    $request->file('img_posting')->storeAs('public/img_posting', $filename);
                    $request->file('img_posting')->storeAs('public/img_posting/thumbnail', $filename2);
                    $request->file('img_posting')->storeAs('public/img_posting/thumbnail', $filename3);
                    $request->file('img_posting')->storeAs('public/img_posting/thumbnail', $filename4);
                    
                    //create small thumbnail
                    $smallthumbnailpath = public_path('storage/img_posting/thumbnail/'.$filename2);
                    $this->createThumbnail($smallthumbnailpath, 150, 93);
            
                    //create medium thumbnail
                    $mediumthumbnailpath = public_path('storage/img_posting/thumbnail/'.$filename3);
                    $this->createThumbnail($mediumthumbnailpath, 300, 185);
            
                    //create large thumbnail
                    $largethumbnailpath = public_path('storage/img_posting/thumbnail/'.$filename4);
                    $this->createThumbnail($largethumbnailpath, 550, 340);
    
                    $data       = Posting::updateOrCreate(
                        [
                            'id'=>$request->id
                        ],
                        [
                            'judul_posting' =>  $request->judul_posting,
                            'slug_posting'  =>  Str::slug($request->judul_posting),
                            'img_posting'   =>  $filename,
                            'thumbnail'     =>  $request->thumbnail,
                            'deskripsi_posting' => $request->deskripsi_posting,
                        ]
                    );
    
                    if (count($request->kategori_id) > 0) {
                        # code...
                        $kategori   = $request->kategori_id;
                        $kategoris  = Kategori::whereIn('id', $kategori)->get();
                        $data->kategori()->syncwithoutdetaching($kategoris);
                    }
    
                    return response()->json([
                        'status' => 200,
                        'message'  => 'Berhasil membuat post baru',                        
                    ]);
    
                }else {
                    # code...
                    $data       = Posting::updateOrCreate(
                        [
                            'id'=>$request->id
                        ],
                        [
                            'judul_posting' =>  $request->judul_posting,
                            'slug_posting'  =>  Str::slug($request->judul_posting),
                            'thumbnail'     =>  $request->thumbnail,
                            'deskripsi_posting' => $request->deskripsi_posting,
                        ]
                    );
    
                    if (count($request->kategori_id) > 0) {
                        # code...
                        $kategori   = $request->kategori_id;
                        $kategoris  = Kategori::whereIn('id', $kategori)->get();
                        $data->kategori()->sync($kategoris);
                    }
    
                    return response()->json([
                        'status' => 200,
                        'message'  => 'Berhasil membuat post baru',                        
                    ]);
                }
            }else {
                # update posting & exist code...
                if ($old_exist->id == $request->id) {
                    # update code...
                    if($request->hasFile('img_posting')) {
                    
                        $filename    = time().'.'.$request->img_posting->getClientOriginalExtension();
                        $filename2   = '_small_'.time().'.'.$request->img_posting->getClientOriginalExtension();
                        $filename3   = '_medium_'.time().'.'.$request->img_posting->getClientOriginalExtension();
                        $filename4   = '_large_'.time().'.'.$request->img_posting->getClientOriginalExtension();
        
                        // $request->file('img_posting')->move('img_posting/',$filename);
                        $request->file('img_posting')->storeAs('public/img_posting', $filename);
                        $request->file('img_posting')->storeAs('public/img_posting/thumbnail', $filename2);
                        $request->file('img_posting')->storeAs('public/img_posting/thumbnail', $filename3);
                        $request->file('img_posting')->storeAs('public/img_posting/thumbnail', $filename4);
                        
                        //create small thumbnail
                        $smallthumbnailpath = public_path('storage/img_posting/thumbnail/'.$filename2);
                        $this->createThumbnail($smallthumbnailpath, 150, 93);
                
                        //create medium thumbnail
                        $mediumthumbnailpath = public_path('storage/img_posting/thumbnail/'.$filename3);
                        $this->createThumbnail($mediumthumbnailpath, 300, 185);
                
                        //create large thumbnail
                        $largethumbnailpath = public_path('storage/img_posting/thumbnail/'.$filename4);
                        $this->createThumbnail($largethumbnailpath, 550, 340);
        
                        $data       = Posting::updateOrCreate(
                            [
                                'id'=>$request->id
                            ],
                            [
                                'judul_posting' =>  $request->judul_posting,
                                'slug_posting'  =>  Str::slug($request->judul_posting),
                                'img_posting'   =>  $filename,
                                'thumbnail'     =>  $request->thumbnail,
                                'deskripsi_posting' => $request->deskripsi_posting,
                            ]
                        );
        
                        if (count($request->kategori_id) > 0) {
                            # code...
                            $kategori   = $request->kategori_id;
                            $kategoris  = Kategori::whereIn('id', $kategori)->get();
                            $data->kategori()->sync($kategoris);
                        }
        
                        return response()->json([
                            'status' => 200,
                            'message'  => 'Berhasil membuat post baru',                        
                        ]);
        
                    }else {
                        # code...
                        $data       = Posting::updateOrCreate(
                            [
                                'id'=>$request->id
                            ],
                            [
                                'judul_posting' =>  $request->judul_posting,
                                'slug_posting'  =>  Str::slug($request->judul_posting),
                                'thumbnail'     =>  $request->thumbnail,
                                'deskripsi_posting' => $request->deskripsi_posting,
                            ]
                        );
        
                        if (count($request->kategori_id) > 0) {
                            # code...
                            $kategori   = $request->kategori_id;
                            $kategoris  = Kategori::whereIn('id', $kategori)->get();
                            $data->kategori()->sync($kategoris);
                        }
        
                        return response()->json([
                            'status' => 200,
                            'message'  => 'Berhasil membuat post baru',                        
                        ]);
                    }
                }else {
                    # code...
                    return response()->json([
                        'status' => 400,
                        'message'  => 'Postingan dengan judul serupa sudah pernah dibuat gunakan judul yang lain',  
                        'errors' => ['Postingan dengan judul serupa sudah pernah dibuat gunakan judul yang lain'],                      
                    ]);
                }
            }
        }
    }

    public function createThumbnail($path, $width, $height)
    {
        $img = Image::make($path)->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
        });
        $img->save($path);
    }

    public function edit_posting($id)
    {
        $posting = Posting::find($id);
        $kategori = Kategori::get();
        return view('backend_new.posting_edit',compact('posting','kategori'));
    }
    
    public function remove_posting(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id'             => 'required|max:100',
        ]);

        if ($validator->fails()) {

            return response()->json([
                'status'    => 400,
                'message'   => 'Response Gagal',
                'errors'    => $validator->messages(),
            ]);

        }else {

            $data = Posting::findOrFail($request->id);

            if (count($data->kategori) > 0) {
                # code...
                $data->kategori()->detach();
                $data->delete();
            }else {
                # code...
                $data->delete();
            }

            return response()->json([
                'status'    => 200,
                'message'   => 'Posting tersebut telah dihapus dari sistem',
            ]);
        }
    }
}
