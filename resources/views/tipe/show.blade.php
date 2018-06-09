<br><br><br><br>
@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Tipe 
			  	<div class="panel-title pull-right"><a <a class="btn btn-outline-success" href="{{ route('tipes.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <br>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Tipe Mobil</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $tipes->nama }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Merk Mobil</label>	
			  			<input type="text" name="merk_id" class="form-control" value="{{ $tipes->Merk->nama }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection