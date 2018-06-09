<br><br><br><br>
@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Promo 
			  	<div class="panel-title pull-right"><a class="btn btn-outline-warning" href="{{ route('promos.create') }}">Kembali</a>
			  	</div>
			  </div>
			  <br>
			  <div class="panel-body">
			  		<div class="form-group">
			  			<label class="control-label">Nama Mobil</label>	
			  			<input type="text" name="mobil_id" class="form-control" value="{{ $promos->Mobil->nama }}"  readonly>
			  		</div>

        			<div class="form-group">
			  			<label class="control-label">Promo</label>	
			  			<input type="text" name="promo" class="form-control" value="{{ $promos->promo }}"  readonly>
			  		</div>

					<div class="form-group">
			  			<label class="control-label">Harga Awal Mobil</label>	
			  			<input type="text" name="harga_awal" class="form-control" value="{{ $promos->harga_awal }}"  readonly>
			  		</div>

					<div class="form-group">
			  			<label class="control-label">Harga Promo Mobil</label>	
			  			<input type="text" name="harga_promo" class="form-control" value="{{ $promos->harga_promo }}"  readonly>
			  		</div>

					<div class="form-group">
			  			<label class="control-label">Isi Komentar</label>	
			  			<input type="text" name="comment" class="form-control" value="{{ $promos->comment }}"  readonly>
			  		</div>  
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection