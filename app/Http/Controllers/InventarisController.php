<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Inventaris;
use App\HargaStok;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;

class InventarisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        if($request->ajax()){
            $inventaris=Inventaris::select(['id','nama']);
            return Datatables::of($inventaris)->make(true);
        }

        $html = $htmlBuilder->addColumn(['data'=>'nama','name'=>'nama', 'title'=>'Nama']);
        return view('inventaris.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventaris.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, 
            ['nama' => 'required|unique:inventaris',
             'id_jenis_barang' => 'required|min:1|numeric',
             'modal' => 'required|numeric',
             'jual' => 'required|numeric',
             'stok' => 'required|numeric',
            ]

        );

        $inventaris = Inventaris::create([
                'nama' => $request->nama,
                'id_jenis_barang' => $request->id_jenis_barang,
                'status' => 'Continued'
        ]);

        $hargastok = HargaStok::create([
                'id_inventaris' => $inventaris->id,
                'modal' => $request->modal,
                'jual' => $request->jual,
                'stok' => $request->stok,
                'terjual'=>0
        ]);

        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil menyimpan $inventaris->nama"
        ]);

        return redirect()->route('inventaris.index');

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
        //
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