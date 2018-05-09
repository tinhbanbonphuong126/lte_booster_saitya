<table class="table table-responsive" id="schools-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Region Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($schools as $school)
        <tr>
            <td>{!! $school->name !!}</td>
            <td>{!! $school->region_id !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.schools.destroy', $school->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.schools.show', [$school->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.schools.edit', [$school->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>