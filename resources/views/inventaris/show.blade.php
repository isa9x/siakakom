@extends('layouts.app')
@section('content')
	{{$barang->nama}}
	<br>
	{{$barang->jenisBarang->jenis_barang}}
	<br>
	@foreach($barang->hargaStok as $hargaStok)
		Modal = {{$hargaStok->modal}}
	@endforeach
@endsection