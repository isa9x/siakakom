<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
	{!! Form::label('nama', 'Nama', ['class'=>'col-md-2 control-label']) !!}
	
	<div class="col-md-4">
		{!! Form::text('nama', null, ['class'=>'form-control']) !!}
		{!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group {{ $errors->has('id_jenis') ? 'has-error' : ''}}">
	{!! Form::label('id_jenis', 'Jenis Barang', ['class'=>'col-md-2 control-label']) !!}
	
	<div class="col-md-4">
		{!! Form::select('id_jenis', App\JenisBarang::pluck('nama','id')->prepend('Pilih Jenis Barang'), null,['class'=>'js-selectize'])!!}
		{!! $errors->first('id_je', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group">
	<div class="col-md-4 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>

</div>