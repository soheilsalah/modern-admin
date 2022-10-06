<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\DataTables;
use App\Models\User;
use Termwind\Components\Raw;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.my-projects.user.index');
    }

    public function show($slug)
    {        
        $user = User::where('slug', $slug)->first();

        $user == null ? _404('admin') : true;

        return view('admin.my-projects.user.show', compact('user'));
    }

    public function create()
    {
        return view('admin.my-projects.user.create');
    }

    public function usersDatatable()
    {
        $user = User::withTrashed()->get();

        return Datatables::of($user)
        ->editColumn('name', function ($user) {
            return '<a href="'.route('admin.user.show', $user->slug).'">'.$user->name.'</a>';
        })
        ->editColumn('email', function ($user) {
            return $user->email;
        })
        ->editColumn('delete', function ($user) {
            return $user->deleted_at != null ? null : '<button type="button" class="btn btn-danger btn-sm delete-user" data-user-id="'.$user->id.'">Delete this user</button>';
        })
        ->editColumn('restore', function ($user) {
            return $user->deleted_at != null ? '<button type="button" class="btn btn-success btn-sm restore-user" id="restore-user-'.$user->id.'" data-user-id="'.$user->id.'">Restore this user</button>' : null;
        })
        ->setRowClass(function ($user) {
            return 'tr_'.$user->id;
        })
        ->rawColumns(['name', 'delete', 'restore'])
        ->make(true);
    }

    public function ajaxCreateUser(Request $request)
    {
        $username = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('password');
        $repass = $request->input('repass');

        strlen($password) < 6 ? error("Password must be greater than 5 characters") : true;
        $password !== $repass ? error("Password doesn't matched") : true;
        User::where('email', $email)->first() != null ? error("This user is already exsits, please choose another email") : true;

        User::create([
            'name' => $username,
            'email' => $email,
            'password' => Hash::make($password),
            'email_verified_at' => Carbon::now(),
            'slug' => md5(uniqid()),
        ]);
    }

    public function ajaxUpdateUserInfo(Request $request)
    {
        $user_id = $request->input('user_id');
        $username = $request->input('username');
        $email = $request->input('email');

        User::where('id', '!=', $user_id)->where('email', $email)->first() != null ? error('Choose another email') : true;

        User::where('id', $user_id)->update([
            'name' => $username,
            'email' => $email,
        ]);
    }
    
    public function ajaxUpdateUserPassword(Request $request)
    {
        $user_id = $request->input('user_id');
        $current_password = $request->input('current_password');
        $new_password = $request->input('new_password');
        $repass = $request->input('repass');

        $user = User::where('id', $user_id)->first();

        !Hash::check($current_password, $user->password) ? error('The current password is incorrect') : true;
        strlen($new_password) < 6 ? error("Password must be greater than 5 characters") : true;
        $new_password !== $repass ? error("Password doesn't matched") : true;

        $user->update([
            'password' => Hash::make($new_password),
        ]);
    }

    public function ajaxDeleteUser(Request $request)
    {
        User::where('id', $request->input('user_id'))->delete();
    }

    public function ajaxForceDeleteUser(Request $request)
    {
        User::where('id', $request->input('user_id'))->forceDelete();

        redirectToURL(route('admin.users'));
    }

    public function ajaxRestoreUser(Request $request)
    {
        User::where('id', $request->input('user_id'))->restore();
    }
}
