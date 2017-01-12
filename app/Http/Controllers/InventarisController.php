<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Inventaris;
use App\HargaStok;
use App\JenisBarang;
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

            // select * from inventaris join (
            //     select * from harga_stok
            //     where modal in (
            //         select max(modal) from harga_stok group by id_inventaris
            //     )
            // ) as most_modal
            // on inventaris.id = most_modal.id_inventaris

             $query = Inventaris::join('harga_stok','inventaris.id','=','harga_stok.id_inventaris')
                ->join('jenis_barang','inventaris.id_jenis_barang','=','jenis_barang.id')->get();

            return Datatables::of($query)
                ->addColumn('sisa_stok',function($query){
                    $sisa = $query->stok - $query->terjual;
                    return $sisa;
                })
            ->make(true);
        }

        $html = $htmlBuilder
            ->addColumn(['data'=>'nama','name'=>'nama', 'title'=>'Nama'])
            ->addColumn(['data'=>'jenis','name'=>'jenis','title'=>'Jenis Barang'])
            ->addColumn(['data'=>'modal','name'=>'modal','title'=>'Harga Modal'])
            ->addColumn(['data'=>'jual','name'=>'jual','title'=>'Harga Jual'])
            ->addColumn(['data'=>'sisa_stok','name'=>'sisa_stok','title'=>'Stok Tersedia']);
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
        $barang=Inventaris::findOrFail($id);
        return view('inventaris.show',compact('barang'));
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

    public function test()
    {
        // select * from inventaris join (
            //     select * from harga_stok
            //     where modal in (
            //         select max(modal) from harga_stok group by id_inventaris
            //     )
            // ) as most_modal
            // on inventaris.id = most_modal.id_inventaris

             // $query1 = Inventaris::join('harga_stok','inventaris.id','=','harga_stok.id_inventaris')
             //    ->join('jenis_barang','inventaris.id_jenis_barang','=','jenis_barang.id')->get();
             
             $query=HargaStok::max('modal')->get();
             // $query2=HargaStok::

        return view('inventaris.test')->with(compact('query'));
    }
}
