<?php

namespace App\Http\Controllers;

use Session;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use Crypt;

class newscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(session::get('user')){

            $news = DB::table('news') -> get();

            return view('news', ['news' =>$news]);
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
            return view('createnews');
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
        //

        if(session::get('user')){
            $newstitle = $request->input('newstitle');
            $newsdescription = $request->input('newsdescription');
            $newsdate = $request->input('newsdate');

            if ($request->hasFile('newsimage')) {
                $image = $request->file('newsimage');
                $photo = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/images');
                $image->move($destinationPath, $photo);
                //$this->save();
            } else{
                $photo = "";
            }

            $addsql = DB::table('news')->insert([
            'news_date' => $newsdate,
            'news_title' => $newstitle,
            'news_description' => $newsdescription,
            'news_image' => $photo,
            'news_status' => '1'
            ]);

            if($addsql){
                return redirect('news');
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
            $news = DB::table('news') -> where('news_id', $id) -> first();
            return view('updatenews', ['news' =>$news]);
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
            $news = DB::table('news') -> where('news_id', $id) -> delete();
            return redirect('news');
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
            $newstitle = $request->input('newstitle');
            $newsdescription = $request->input('newsdescription');
            $newsdate = $request->input('newsdate');
            $newsid = $request->input('newsid');

            if ($request->hasFile('newsimage')) {
                $image = $request->file('newsimage');
                $photo = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/images');
                $image->move($destinationPath, $photo);
                //$this->save();
            } else{
                $photo = "";
            }

            if(!empty($photo)){
                $addsql = DB::table('news')-> where('news_id', $newsid) -> update([
                'news_date' => $newsdate,
                'news_title' => $newstitle,
                'news_description' => $newsdescription,
                'news_image' => $photo,
                'news_status' => '1'
                ]);
            } else{
                $addsql = DB::table('news')-> where('news_id', $newsid) -> update([
                'news_date' => $newsdate,
                'news_title' => $newstitle,
                'news_description' => $newsdescription,
                'news_status' => '1'
                ]);
            }

            if($addsql){
                return redirect('news');
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
