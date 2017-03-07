@extends('layouts.app')
@section('content')
	{{$barang->nama}}
	<br>
	{{$barang->jenisBarang->jenis_barang}}
@endsection