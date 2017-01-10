@extends('layouts.app')
@section('content')
	{{$barang->nama}}
	<br>
	{{$barang->hargaStok->jual}}
@endsection