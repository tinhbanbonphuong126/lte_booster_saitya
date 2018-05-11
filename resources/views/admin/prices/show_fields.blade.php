<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $price->id !!}</p>
</div>

<!-- Bunjouchi Id Field -->
<div class="form-group">
    {!! Form::label('bunjouchi_id', 'Bunjouchi Id:') !!}
    <p>{!! $price->bunjouchi_id !!}</p>
</div>

<!-- Bangou Field -->
<div class="form-group">
    {!! Form::label('bangou', 'Bangou:') !!}
    <p>{!! $price->bangou !!}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{!! $price->description !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $price->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $price->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $price->deleted_at !!}</p>
</div>

