<?php

namespace App\Http\Controllers;

use Session;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use Crypt;


class notificationscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        if(session::get('user')){
            $notification = DB::table('notification') -> get();

            return view('notifications', ['notification' =>$notification]);
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
            return view('createnotifications');
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
            $notificationtitle = $request->input('notificationtitle');
            $notificationdescription = $request->input('notificationdescription');
            $notificationdate = $request->input('notificationdate');

            if ($request->hasFile('notificationimage')) {
                $image = $request->file('notificationimage');
                $photo = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/images');
                $image->move($destinationPath, $photo);
                //$this->save();
            } else{
                $photo = "";
            }

            $addsql = DB::table('notification')->insert([
            'notification_title' => $notificationtitle,
            'notification_description' => $notificationdescription,
            'notification_date' => $notificationdate,
            'notification_image' => $photo,
            'notification_status' => '1'
            ]);

            if($addsql){
                return redirect('notifications');
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
            $notification = DB::table('notification') -> where('notification_id', $id) -> first();
            return view('updatenotifications', ['notification' =>$notification]);
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
            $news = DB::table('notification') -> where('notification_id', $id) -> delete();
            return redirect('notifications');
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
            $notificationtitle = $request->input('notificationtitle');
            $notificationdescription = $request->input('notificationdescription');
            $notificationdate = $request->input('notificationdate');
            $notificationid = $request->input('notificationid');

            if ($request->hasFile('notificationimage')) {
                $image = $request->file('notificationimage');
                $photo = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/images');
                $image->move($destinationPath, $photo);
                //$this->save();
            } else{
                $photo = "";
            }

            if(!empty($photo)){
                $addsql = DB::table('notification') -> where('notification_id', $notificationid) -> update([
                'notification_title' => $notificationtitle,
                'notification_description' => $notificationdescription,
                'notification_date' => $notificationdate,
                'notification_image' => $photo,
                'notification_status' => '1'
                ]);
        } else {
                $addsql = DB::table('notification') -> where('notification_id', $notificationid) -> update([
                'notification_title' => $notificationtitle,
                'notification_description' => $notificationdescription,
                'notification_date' => $notificationdate,
                'notification_status' => '1'
                ]);
        }

            if($addsql){
                return redirect('notifications');
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
