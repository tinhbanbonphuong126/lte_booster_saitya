<!-- Bunjouchi Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bunjouchi_id', 'Bunjouchi Id:') !!}
    {!! Form::number('bunjouchi_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Bangou Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bangou', 'Bangou:') !!}
    {!! Form::number('bangou', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('保存', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.prices.index') !!}" class="btn btn-default">キャンセル</a>
</div>
