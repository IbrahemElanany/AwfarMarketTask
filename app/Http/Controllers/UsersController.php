<?php

namespace App\Http\Controllers;

use App\DataTables\UserDatatable;
use App\Http\Requests\AddUserRequest;
use App\Http\Requests\EditUserRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use DB ;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(UserDatatable $user)
    {
        //
        if(Session::has('Login'))
        {
//            Session::flash('login_user','Welcome To Admin Page');
        return $user->render('admin.user.index');
}
    else
        {
            return redirect ('/login') ;
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
        if(Session::has('Login'))
        {
//            Session::flash('login_user','Welcome To Admin Page');
            return view('admin.user.add');
        }
    else
        {
            return redirect ('/login') ;
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddUserRequest $request , User $user)
    {
        //
        $user->create([
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'password' => $request['password'],
        ]);

        Session::flash('create_user','User Added Successfully');
        return redirect('/adminpanel/users');
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
        //
        $user = User::findOrFail($id);

        if(Session::has('Login'))
        {
//            Session::flash('login_user','Welcome To Admin Page');
            return view('admin.user.edit',compact('user'));
        }
    else
        {
            return redirect ('/login') ;
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditUserRequest $request, $id)
    {
        //
        $user = User::findOrFail($id);

        $user->update($request->all());

        Session::flash('update_user','User Edited Successfully');
        return redirect('/adminpanel/users');
    }

    public function changePassword(Request $request ,$id){

        $user = User::findOrFail($request->id);

        $password = $request->password;

//        $user->fill(['password'=>$password])->save();

        $user->update(['password'=>$password]);

        Session::flash('update_user_password','password changed Successfully');
        return redirect()->back();

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
        $user = User::findOrFail($id)->delete();
        Session::flash('delete_user','User Deleted successfully');
        return redirect()->back();
    }


    public function Do_login(Request $request){
        $email = $request->email;
        $select = DB::table('users')->where('email',$email)->get();
        if(count($select) > 0)
        {
            if($request->password == $select[0]->password)
            {
              Session()->put('Login', $select[0]->password) ;
              return redirect('/adminpanel/users');
            }elseif($request->password != $select[0]->password){
                return redirect('/login');
            }
        }else return redirect('/login') ;
    }


    public function logout()
    {
        Session::forget('Login');
        return redirect('/login/');
    }


}
