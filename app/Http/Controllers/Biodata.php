<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Biodata extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $nama = "Toto Abdulpatah";
        $npm = "2110631170146";
        $status = "Mahasiswa SEMESTER 5 Informatika - Fasilkom Unsika";
        $alamat = "Dusun Pasirbuah Rt.011/Rw.004 Desa Majalaya Kecamatan Majalaya Kabupaten Karawang";
        $noHp = "085123123123";
        $hobby = ["Game Lichess(catur)","Badminton","Tennis Meja"];
        return view('biodata',['nama'=>$nama,'npm'=>$npm,'status'=>$status,'alamat'=>$alamat,'noHp'=>$noHp,'hobby'=>$hobby],
        [
            'isi_data' => $id
        ]);
        
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
