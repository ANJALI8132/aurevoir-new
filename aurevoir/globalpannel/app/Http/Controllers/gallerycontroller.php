<?php

namespace App\Http\Controllers;

use Session;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use Auth;

class gallerycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(session::get('user')){
            $gallery = DB::table('gallery') -> get();
            return view('gallery', ['gallery' =>$gallery]);
        } else{
            return view('login');
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        if(session::get('user')){
            return view('creategallery');
        } else{
            return view('login');
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        if(session::get('user')){
            $gallerytitle = $request->input('gallerytitle');
            $gallerydate = $request->input('gallerydate');

            if ($request->hasFile('galleryimage')) {
                $image = $request->file('galleryimage');
                $photo = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/images');
                $image->move($destinationPath, $photo);
                //$this->save();
            } else{
                $photo = "";
            }

            $addsql = DB::table('gallery')->insert([
            'gallery_name' => $gallerytitle,
            'gallery_date' => $gallerydate,
            'gallery_cover' => $photo
            ]);

            if($addsql){
                return redirect('gallery');
            }

        } else{
            return view('login');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(session::get('user')){
            $gallery = DB::table('gallery') -> where('gallery_id', $id) -> first();
            return view('updategallery', ['gallery' =>$gallery]);
        } else{
            return view('login');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        if(session::get('user')){
            $gallery = DB::table('gallery') -> where('gallery_id', $id) -> delete();
            return redirect('gallery');
        } else{
            return view('login');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if(session::get('user')){
            $gallerytitle = $request->input('gallerytitle');
            $gallerydate = $request->input('gallerydate');
            $galleryid = $request->input('galleryid');

            if ($request->hasFile('galleryimage')) {
                $image = $request->file('galleryimage');
                $photo = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/images');
                $image->move($destinationPath, $photo);
                //$this->save();
            } else{
                $photo = "";
            }

            if(!empty($photo)){
                $addsql = DB::table('gallery')->where('gallery_id', $galleryid) -> update([
                'gallery_name' => $gallerytitle,
                'gallery_date' => $gallerydate,
                'gallery_cover' => $photo
                ]);
            } else{
                $addsql = DB::table('gallery')->where('gallery_id', $galleryid) -> update([
                'gallery_name' => $gallerytitle,
                'gallery_date' => $gallerydate
                ]);
            }

            if($addsql){
                return redirect('gallery');
            }

        } else{
            return view('login');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
