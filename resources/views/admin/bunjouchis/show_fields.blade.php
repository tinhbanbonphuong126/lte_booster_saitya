<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'ID:') !!}
    <p>{!! $bunjouchi->id !!}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'タイトル:') !!}
    <p>{!! $bunjouchi->title !!}</p>
</div>

<!-- Map Url Field -->
<div class="form-group">
    {!! Form::label('map_url', '区画図:') !!}
    <p>{!! $bunjouchi->map_url !!}</p>
</div>

<!-- Document Url Field -->
<div class="form-group">
    {!! Form::label('document_url', '資料:') !!}
    <p>{!! $bunjouchi->document_url !!}</p>
</div>

<!-- Address Field -->
<div class="form-group">
    {!! Form::label('address', '住所:') !!}
    <p>{!! $bunjouchi->address !!}</p>
</div>

<!-- Land Area Field -->
<div class="form-group">
    {!! Form::label('land_area', '土地面積:') !!}
    <p>{!! $bunjouchi->land_area !!}</p>
</div>

<!-- Ground Field -->
<div class="form-group">
    {!! Form::label('ground', '地目:') !!}
    <p>{!! $bunjouchi->ground !!}</p>
</div>

<!-- Total Parcel Field -->
<div class="form-group">
    {!! Form::label('total_parcel', '総区画:') !!}
    <p>{!! $bunjouchi->total_parcel !!}</p>
</div>

<!-- Construction Pay Rate Field -->
<div class="form-group">
    {!! Form::label('construction_pay_rate', '建ぺい率:') !!}
    <p>{!! $bunjouchi->construction_pay_rate !!}</p>
</div>

<!-- Floor Area Ratio Field -->
<div class="form-group">
    {!! Form::label('floor_area_ratio', '容積率:') !!}
    <p>{!! $bunjouchi->floor_area_ratio !!}</p>
</div>

<!-- Usage Area Field -->
<div class="form-group">
    {!! Form::label('usage_area', '用途地域:') !!}
    <p>{!! $bunjouchi->usage_area !!}</p>
</div>

<!-- Drainage Field -->
<div class="form-group">
    {!! Form::label('drainage', '排水:') !!}
    <p>{!! $bunjouchi->drainage !!}</p>
</div>

<!-- Dealing Status Field -->
<div class="form-group">
    {!! Form::label('dealing_status', '取引態様:') !!}
    <p>{!! $bunjouchi->dealing_status !!}</p>
</div>

<!-- Dealing Status Field -->
<div class="form-group">
    {!! Form::label('price', '価格:', ['class' => "font_bold price_label"]) !!}
    <p></p>
</div>


@foreach($bunjouchi->prices as $price)
    <div class="form-group">
        {!! Form::label('', $price->bangou . ' 号地:') !!}
        <p>
            {{ $price->description }}
        </p>
    </div>
@endforeach


<div class="form-group">
    {!! Form::label('region_id', '検索:', ['class' => "font_bold"]) !!}
    <p></p>
</div>
<!-- School Id Field -->
<div class="form-group">
    {!! Form::label('region_id', '地名:') !!}
    <p>{!! $bunjouchi->school? $bunjouchi->school->region->name : '' !!}</p>
</div>
<!-- School Id Field -->
<div class="form-group">
    {!! Form::label('school_id', '中学校区:') !!}
    <p>{!! $bunjouchi->school? $bunjouchi->school->name : '' !!}</p>
</div>

<!-- Station Id Field -->
<div class="form-group">
    {!! Form::label('route_id', '路線名:') !!}
    <p>{!! $bunjouchi->station? $bunjouchi->station->route->route : '' !!}</p>
</div>
<!-- Station Id Field -->
<div class="form-group">
    {!! Form::label('station_id', '駅名:') !!}
    <p>{!! $bunjouchi->station? $bunjouchi->station->name : '' !!}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', '分譲地状態:') !!}
    <p>{!! bunjouchiStatus($bunjouchi->status) !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group hidden">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $bunjouchi->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group hidden">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $bunjouchi->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group hidden">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $bunjouchi->deleted_at !!}</p>
</div>

