<table class="table table-responsive" id="regions-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Img</th>
            <th colspan="3">操作</th>
        </tr>
    </thead>
    <tbody>
    @foreach($regions as $region)
        <tr>
            <td>{!! $region->name !!}</td>
            <td>{!! $region->img !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.regions.destroy', $region->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.regions.show', [$region->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.regions.edit', [$region->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('削除よろしいですか？')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>