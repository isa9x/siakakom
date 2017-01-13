@extends('layouts.app')
@section('content')
	@foreach($query as $query1)
		<div class="col-md-4">	{!! $query1->nama !!} </div>
		{{-- <div class="col-md-2"> {!! $query1->jenis !!} </div> --}}
		<div class="col-md-2"> {!! $query1->modal !!} </div>
		<div class="col-md-2"> {!! $query1->jual !!} </div> 
		<div class="col-md-2"> {{ $query1->stok - $query1->terjual }} </div> 
		<br><hr>

	@endforeach
@endsection