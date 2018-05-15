<table class="table table-responsive" id="prices-table">
    <thead>
        <tr>
            <th>Bunjouchi Id</th>
        <th>Bangou</th>
        <th>Description</th>
            <th colspan="3">操作</th>
        </tr>
    </thead>
    <tbody>
    @foreach($prices as $price)
        <tr>
            <td>{!! $price->bunjouchi_id !!}</td>
            <td>{!! $price->bangou !!}</td>
            <td>{!! $price->description !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.prices.destroy', $price->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.prices.show', [$price->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.prices.edit', [$price->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('削除よろしいですか？')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>