<!-- Title Field -->
<div class="form-group col-sm-12">
    {!! Form::label('title', 'タイトル: ') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Map Url Field -->
<div class="form-group col-sm-12">
    {!! Form::label('map_url', '区画図: ') !!}
    <input id="map_url" name="map_url" accept=".png, .jpg, .pdf" type="file" class="file" style="visibility: hidden" data-show-preview="false">
</div>

<!-- Document Url Field -->
<div class="form-group col-sm-12">
    {!! Form::label('document_url', '資料: ') !!}
    <input id="document_url" accept=".pdf" name="document_url" type="file" class="file" style="visibility: hidden" data-show-preview="false">
</div>

<!-- Address Field -->
<div class="form-group col-sm-12 handle_geo_result">
    {!! Form::label('address', '住所:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}

    <input type="hidden" id="latitude" name="latitude" value="">
    <input type="hidden" id="longitude" name="longitude" value="">
</div>

<!-- Land Area Field -->
<div class="form-group col-sm-12">
    {!! Form::label('land_area', '土地面積:') !!}
    {!! Form::text('land_area', null, ['class' => 'form-control']) !!}
</div>

<!-- Ground Field -->
<div class="form-group col-sm-12">
    {!! Form::label('ground', '地目:') !!}
    {!! Form::text('ground', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Parcel Field -->
<div class="form-group col-sm-12">
    {!! Form::label('total_parcel', '総区画:') !!}
    {!! Form::text('total_parcel', null, ['class' => 'form-control']) !!}
</div>

<!-- Construction Pay Rate Field -->
<div class="form-group col-sm-12">
    {!! Form::label('construction_pay_rate', '建ペイ率: ') !!}
    {!! Form::text('construction_pay_rate', null, ['class' => 'form-control']) !!}
</div>

<!-- Floor Area Ratio Field -->
<div class="form-group col-sm-12">
    {!! Form::label('floor_area_ratio', '容積率') !!}
    {!! Form::text('floor_area_ratio', null, ['class' => 'form-control']) !!}
</div>

<!-- Usage Area Field -->
<div class="form-group col-sm-12">
    {!! Form::label('usage_area', '用途地域:') !!}
    {!! Form::text('usage_area', null, ['class' => 'form-control']) !!}
</div>

<!-- Drainage Field -->
<div class="form-group col-sm-12">
    {!! Form::label('drainage', '排水:') !!}
    {!! Form::text('drainage', null, ['class' => 'form-control']) !!}
</div>

<!-- Dealing Status Field -->
<div class="form-group col-sm-12">
    {!! Form::label('dealing_status', '取引態様:') !!}
    {!! Form::text('dealing_status', null, ['class' => 'form-control']) !!}
</div>


<div class="boundOutPrice form-group col-sm-12">
    {!! Form::label('kakaku', '価格:', ["style" => "font-weight: bold;"]) !!}

    <div class="">

    </div>

    <div class="bound_price">

        <p class="noticeNumber">＊数字のみ</p>

        {{--Template Price--}}
        <script id="price-template" type="text/x-handlebars-template">
            @include("admin.bunjouchis.price")
        </script>

        @php
            $new = isset($bunjouchi)? 0: 1;
        @endphp

        @if($new)
            @include("admin.bunjouchis.price")
        @else
            @if(count($bunjouchi->prices))
                @foreach($bunjouchi->prices as $price)
                    @include("admin.bunjouchis.price", ["price" => $price])
                @endforeach
            @else
                @include("admin.bunjouchis.price")
            @endif
        @endif


    </div>
</div>
<!-- Region Id Field -->

<div class="form-group col-sm-12">
    {!! Form::label('region_id', '地名: ') !!}
    {!! Form::select('region_id', $regions, null, ['class' => 'form-control', 'placeholder' => '地名を選択してください']) !!}
</div>

<!-- School Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('school_id', '中学校区: ') !!}
    <select name="school_id" id="school_id" class="form-control">
        @foreach($schools as $school)
            <option value="{{ $school->id }}" data-chained="{{ $school->region_id }}">{{ $school->name }}</option>
        @endforeach
    </select>
</div>

<!-- Station Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('route_id', '路線名: ') !!}
    {!! Form::select('route_id', $routes, null, ['class' => 'form-control', 'placeholder' => '路線名を選択してください']) !!}
</div>

<!-- Station Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('station_id', '駅名: ') !!}
    <select name="station_id" id="station_id" class="form-control">
        @foreach($stations as $station)
            <option value="{{ $station->id }}" data-chained="{{ $station->route_id }}">{{ $station->name }}</option>
        @endforeach
    </select>
</div>

<!-- Status Field -->
<div class="form-group col-sm-12">
    <label for="#">分譲地状態</label>

    <div>
        <input type="radio" id="status0" name="status" @if(isset($bunjouchi) && $bunjouchi->status == 0) checked @else checked @endif value="0" class="radio-inline">
        <label for="status0">分譲中</label>

        <input type="radio" id="status1" name="status" @if(isset($bunjouchi) && $bunjouchi->status == 1) checked @endif value="1" class="radio-inline">
        <label for="status1">完売御礼</label>
    </div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <a href="{!! route('admin.bunjouchis.index') !!}" class="btn btn-default">戻る</a>
    {!! Form::submit('保存', ['class' => 'btn btn-primary ']) !!}
</div>
