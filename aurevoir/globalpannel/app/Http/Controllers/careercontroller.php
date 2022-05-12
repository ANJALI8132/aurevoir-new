<?php

namespace App\Http\Controllers;

use Session;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use Crypt;

class careercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(session::get('user')){
            $career = DB::table('career') -> get();
            return view('career', ['career' =>$career]);
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
            return view('createcareer');
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
            $careertitle = $request->input('careertitle');
            $careerdescription = $request->input('careerdescription');
            $careerdate = $request->input('careerdate');
            $careervacancy = $request->input('careervacancy');
            $careerexperince = $request->input('careerexperince');
            $careerplace = $request->input('careerplace');

            $addsql = DB::table('career')->insert([
            'career_title' => $careertitle,
            'career_description' => $careerdescription,
            'career_date' => $careerdate,
            'career_vacancy' => $careervacancy,
            'career_experince' => $careerexperince,
            'career_place' => $careerplace,
            'career_status' => '1'
            ]);

            if($addsql){
                return redirect('career');
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
            $career = DB::table('career') -> where('career_id', $id) -> first();
            return view('updatecareer', ['career' =>$career]);
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
            $career = DB::table('career') -> where('career_id', $id) -> delete();
            return redirect('career');
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
            $careertitle = $request->input('careertitle');
            $careerdescription = $request->input('careerdescription');
            $careerdate = $request->input('careerdate');
            $careervacancy = $request->input('careervacancy');
            $careerexperince = $request->input('careerexperince');
            $careerplace = $request->input('careerplace');
            $careerid = $request->input('careerid');

            $addsql = DB::table('career') -> where('career_id', $careerid) -> update([
            'career_title' => $careertitle,
            'career_description' => $careerdescription,
            'career_date' => $careerdate,
            'career_vacancy' => $careervacancy,
            'career_experince' => $careerexperince,
            'career_place' => $careerplace,
            'career_status' => '1'
            ]);

            if($addsql){
                return redirect('career');
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
