@extends('layouts.app')
@section('content')
	{{$barang->nama}}
	<br>
	{{$barang->jenisBarang->jenis_barang}}
	<br>
	{{-- {{$barang->hargaStok->stok}} --}}
@endsection