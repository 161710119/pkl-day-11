<br><br><br><br>
@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Kategori 
			  	<div class="panel-title pull-right"><a class="btn btn-outline-warning" href="{{ route('kategoris.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <br>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Kategori Mobil</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $kategoris->nama }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Murid</label><input type="text" name="nipd" class="form-control" value="@foreach($a->murid as $data) -{{ $data->nama }}@endforeach" readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection