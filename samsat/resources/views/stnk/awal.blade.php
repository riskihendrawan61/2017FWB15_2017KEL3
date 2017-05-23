@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong> Seluruh Data stnk </strong>
	<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th> No. </th>
				<th> norangka </th>
				<th> nomesin </th>
				<th> warna </th>
				<th> silinder </th>
				<th> bahanbakar </th>
				<th> Aksi </th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach ($data as $stnk)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{ $stnk->norangka or 'kosong' }}</td>
					<td>{{ $stnk->nomesin or 'kosong' }}</td>
					<td>{{ $stnk->warna or 'kosong' }}</td>
					<td>{{ $stnk->silinder or 'kosong' }}</td>
					<td>{{ $stnk->bahanbakar or 'kosong' }}</td>
					
				
					<td>
						<div class="btn-group" role="group">
						<a href="{{url('stnk/edit/'.$stnk->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>	
						<!-- <a href="{{url('stnk/'.$stnk->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a> -->
						<a href="{{url('stnk/hapus/'.$stnk->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
						</div>
					</td>
				</tr>
				@endforeach
		</tbody>
	</table>
</div>
@stop