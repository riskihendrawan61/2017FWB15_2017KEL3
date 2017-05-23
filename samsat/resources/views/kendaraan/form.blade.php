<div class="form-group">
<label class="col-sm-2 control-label" id="merk">merk kendaraan</label>

<div class="col-sm-10">
{!! Form::text('merk',null,['class'=>'form-control','id'=>'merk','placeholder'=>"merk"]) !!}
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label" id="wilayah_id">wilayah</label>
<div class="col-sm-10">
{!! Form::select('wajibpajak_id',$wajibpajak->listwajibpajak(),null,['class'=>'form-control','id'=>'wajibpajak_id','placeholder'=>"wajibpajak"]) !!}
</div>
</div>