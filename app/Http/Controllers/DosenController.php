<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Dosen;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dosen = Dosen::all();
        return view('dashboard.dosen',['dosen'=>$dosen]);
        // console.log('$dosen');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dosen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'Kd_dosen'     => 'required',
            'nama'         => 'required',
            'email'        => 'required',
            'alamat'       => 'required',
            'jurusan'      => 'required',
            'prodi'        => 'required',
            'masa_jabatan' => 'required'
            
        ]);

        Dosen::create([
            'Kd_dosen'     =>$request->Kd_dosen,
            'nama'         =>$request->nama,
            'email'        =>$request->email,
            'alamat'       =>$request->alamat,
            'jurusan'      =>$request->jurusan,
            'prodi'        =>$request->prodi,
            'masa_jabatan' =>$request->masa_jabatan
        ]);
        return redirect('/dosen');
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
    public function edit($primaryKey)
    {
        $doss = Dosen::find($primaryKey);
        return view('dosen.edit', ['dosen' => $doss]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $primaryKey)
    {
        $this->validate($request,[
            'Kd_dosen'     => 'required',
            'nama'         => 'required',
            'email'        => 'required',
            'alamat'       => 'required',
            'jurusan'      => 'required',
            'prodi'        => 'required',
            'masa_jabatan' => 'required'
            
        ]);
        $doss = Dosen::find($primaryKey);
        $doss->Kd_dosen = $request->Kd_dosen;
        $doss->nama = $request->nama;
        $doss->email = $request->email;
        $doss->alamat = $request->alamat;
        $doss->jurusan = $request->jurusan;
        $doss->prodi = $request->prodi;
        $doss->masa_jabatan = $request->masa_jabatan;
        
        $doss->save();
        return redirect('/dosen');
    }
  

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($primaryKey)
    {
        $dosen =Dosen::where('Kd_dosen',$primaryKey)->first();
        // $dosen = dosen::find($primaryKey);
        $dosen->delete();
        return redirect()->back();
    }

}
