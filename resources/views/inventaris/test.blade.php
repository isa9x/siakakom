@extends('layouts.app')
@section('content')
	@foreach($query as $query1)
		{!! $query1->nama , $query1->jenis , $query1->modal, $query1->jual!!} {{ $query1->stok - $query1->terjual }}<br>

	@endforeach
@endsection