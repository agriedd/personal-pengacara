<?php

namespace App\Http\Controllers\Api;

use App\Admin;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function show($id){
        return Admin::findOrFail($id);
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
    public function update(Request $request, $id){
        $data = $request->validate([
            'nama'  => 'required',
            'jenis_kelamin' => 'required|in:l,p',
            'tempat_lahir' => '',
            'tanggal_lahir' => 'date',
            'alamat'    => '',
            'agama'     => ''
        ]);

        $admin = Admin::findOrFail($id);
        $data = collect($data);
        $data->put('email', $admin->email);

        $user = User::updateOrCreate(
            ['email' => $admin->email],
            $data->only(['nama', 'email'])->all()
        );
        $user->info()->create($data->except(['email', 'nama'])->all());
        $user->admin()->save($admin);

        return [
            "status"=> $user,
            "message"=> $user ? "Berhasil menyimpan perubahan 😎" : "Gagal menyimpan perubahan"
        ];
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
