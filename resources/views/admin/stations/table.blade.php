<table class="table table-responsive" id="stations-table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Route Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($stations as $station)
        <tr>
            <td>{!! $station->name !!}</td>
            <td>{!! $station->route->route !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.stations.destroy', $station->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.stations.show', [$station->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.stations.edit', [$station->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>