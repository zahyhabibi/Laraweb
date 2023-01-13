<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\Ortu;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('dashboard.mahasiswa',['mahasiswa'=>$mahasiswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswaf.create');
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
            'Npm'        => 'required',
            'Nama'       => 'required',
            'alamat'     => 'required',
            'Semester'   => 'required',
            'jml_sks'    => 'required',
            'NTugas'     => 'required',
            'NKehadiran' => 'required',
            'NUTS'       => 'required',
            'NUAS'       => 'required',
            'Kd_dosen'       => 'required'
            
        ]);

        Mahasiswa::create([
            'Npm'           =>$request->Npm,
            'Nama'          =>$request->Nama,
            'alamat'        =>$request->alamat,
            'Semester'      =>$request->Semester,
            'jml_sks'       =>$request->jml_sks,
            'NTugas'        =>$request->NTugas,
            'NKehadiran'    =>$request->NKehadiran,
            'NUTS'          =>$request->NUTS,
            'NUAS'          =>$request->NUAS,
            'Kd_dosen'      =>$request->Kd_dosen
        ]);
        return redirect('/mahasiswa'); 
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
        $mahasiswa = Mahasiswa::find($primaryKey);
        return view('mahasiswaf.edit',['mahasiswa' => $mahasiswa]);
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
            'Npm'        => 'required',
            'Nama'       => 'required',
            'alamat'     => 'required',
            'Semester'   => 'required',
            'jml_sks'    => 'required',
            'NTugas'     => 'required',
            'NKehadiran' => 'required',
            'NUTS'       => 'required',
            'NUAS'       => 'required',
            'Kd_dosen'       => 'required'
            
        ]);
        $mahasiswa = Mahasiswa::find($primaryKey);
        $mahasiswa->Npm = $request->Npm;
        $mahasiswa->Nama = $request->Nama;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->Semester = $request->Semester;
        $mahasiswa->jml_sks = $request->jml_sks;
        $mahasiswa->NTugas = $request->NTugas;
        $mahasiswa->NKehadiran = $request->NKehadiran;
        $mahasiswa->NUTS = $request->NUTS;
        $mahasiswa->NUAS = $request->NUAS;
        $mahasiswa->Kd_dosen = $request->Kd_dosen;

        $mahasiswa->save();

        return redirect('/mahasiswa'); 
        console.log($mahasiswa);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($primaryKey)
    {
        $mahasiswa =Mahasiswa::where('Npm',$primaryKey)->first();
        // $mahasiswa = Mahasiswa::find($primaryKey);
        $mahasiswa->delete();
        return redirect()->back();
    }
    public function cari(Request $request){
        if($request->has('cari')){
            $mahasiswa = Mahasiswa::where('Npm', 'LIKE', '%'.$request->cari.'%')->get();  
        }else{
            $mahasiswa = Mahasiswa::all();
        }
        return view('dashboard.mahasiswa',['mahasiswa' =>$mahasiswa]);
    }

    //one to one
    public function Ortu(){
        $mahasiswa = Mahasiswa::all();
        foreach($mahasiswa as $item){
            $item->Ortu = Ortu::where('Npm',$item->Npm)->first();
        }
        return view('mahasiswaf.orangtua',['mahasiswa' => $mahasiswa]);
    }

    //one to many
    public function dosen(){
        $dosen = Dosen::all();
        foreach($dosen as $item){
            $item->mahasiswa = Mahasiswa::where('Kd_dosen',$item->Kd_dosen)->get();
        }
        return view('dosen.index',['dosen'=>$dosen]);
    }

    public function json(){
        $data = Mahasiswa::all();
        return response()->json($data);
        
    }
}