<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'タイトル: ') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Map Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('map_url', '区画図: ') !!}
    {!! Form::text('map_url', null, ['class' => 'form-control']) !!}
</div>

<!-- Document Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('document_url', '資料: ') !!}
    {!! Form::text('document_url', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', '住所:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<!-- Land Area Field -->
<div class="form-group col-sm-6">
    {!! Form::label('land_area', '土地面積:') !!}
    {!! Form::text('land_area', null, ['class' => 'form-control']) !!}
</div>

<!-- Ground Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ground', '総区画:') !!}
    {!! Form::text('総区画', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Parcel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('総区画', '総区画:') !!}
    {!! Form::text('total_parcel', null, ['class' => 'form-control']) !!}
</div>

<!-- Construction Pay Rate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('construction_pay_rate', '建ペイ率: ') !!}
    {!! Form::text('construction_pay_rate', null, ['class' => 'form-control']) !!}
</div>

<!-- Floor Area Ratio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('floor_area_ratio', '容積率') !!}
    {!! Form::text('floor_area_ratio', null, ['class' => 'form-control']) !!}
</div>

<!-- Usage Area Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usage_area', '用途地域:') !!}
    {!! Form::text('usage_area', null, ['class' => 'form-control']) !!}
</div>

<!-- Drainage Field -->
<div class="form-group col-sm-6">
    {!! Form::label('drainage', '排水:') !!}
    {!! Form::text('drainage', null, ['class' => 'form-control']) !!}
</div>

<!-- Dealing Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dealing_status', '取引態様:') !!}
    {!! Form::text('dealing_status', null, ['class' => 'form-control']) !!}
</div>

<!-- School Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('school_id', '中学校区: ') !!}
    {!! Form::number('school_id', null, ['class' => 'form-control']) !!}
</div>
<!-- Station Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('station_id', '路線名: ') !!}
    {!! Form::number('station_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::number('status', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.bunjouchis.index') !!}" class="btn btn-default">Cancel</a>
</div>
