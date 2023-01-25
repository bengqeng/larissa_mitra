<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getUser = User::all();
        return view('admin.users.index', [
            'getUser' => $getUser
        ]);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $user = User::find($request->id);

        return $user->toJson();
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        # Validation
        $validator = Validator::make($request->all(), [
            'password' => ['required', 'string', 'min:8'],
            'password_confirmation' => ['required', 'same:password'],
        ]);

        if ($validator->fails()) {
            return back()
            ->withErrors($validator)
            ->withInput();
        }
        $user = User::find($request->id);
        dd($user);
        $user->update([
            'password' => Hash::make($request->password)
        ]);
        if ($user->save()) {
            flash()->success('Berhasil update password user ' . $user->full_name);
        } else {
            flash()->danger('Gagal update password user');
        }

        return back()->with("status", "Password changed successfully!");
// return json_encode([
// 'success' => true,
// 'data' => ['message' => 'Password updated successfully']
// ], 200);
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
