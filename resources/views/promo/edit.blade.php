<br><br><br><br>
@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Promo 
			  	<div class="panel-title pull-right"><a class="btn btn-outline-warning" href="{{ route('promos.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <br>
			  <div class="panel-body">
			  	<form action="{{ route('promos.update',$promos->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
					<div class="form-group {{ $errors->has('mobil_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama murid</label>	
			  			<select name="mobil_id" class="form-control">
			  				@foreach($mobils as $data)
			  				<option value="{{ $data->id }}" {{ $selectedmbl == $data->id ? 'selected="selected"' : '' }} >{{ $data->nama }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('mobil_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('mobil_id') }}</strong>
                            </span>
                        @endif
			  		</div>

					<div class="form-group {{ $errors->has('promo') ? ' has-error' : '' }}">
			  			<label class="control-label">Promo</label>	
			  			<input type="text" name="promo" value="{{ $promos->promo }}" class="form-control"  required>
			  			@if ($errors->has('promo'))
                            <span class="help-block">
                                <strong>{{ $errors->first('promo') }}</strong>
                            </span>
                        @endif
			  		</div>

					<div class="form-group {{ $errors->has('harga_awal') ? ' has-error' : '' }}">
			  			<label class="control-label">Harga Awal Mobil</label>	
			  			<input type="text" name="harga_awal" value="{{ $promos->harga_awal }}" class="form-control"  required>
			  			@if ($errors->has('harga_awal'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga_awal') }}</strong>
                            </span>
                        @endif
			  		</div>  
			  		
					<div class="form-group {{ $errors->has('harga_promo') ? ' has-error' : '' }}">
			  			<label class="control-label">Harga Promo Mobil</label>	
			  			<input type="text" name="harga_promo" value="{{ $promos->harga_promo }}" class="form-control"  required>
			  			@if ($errors->has('harga_promo'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga_promo') }}</strong>
                            </span>
                        @endif
			  		</div>

					<div class="form-group {{ $errors->has('comment') ? ' has-error' : '' }}">
			  			<label class="control-label">Isi Komentar</label>	
			  			<input type="text" name="comment" value="{{ $promos->comment }}" class="form-control"  required>
			  			@if ($errors->has('comment'))
                            <span class="help-block">
                                <strong>{{ $errors->first('comment') }}</strong>
                            </span>
                        @endif
			  		</div>   
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-outline-primary">Simpan</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection