<table class="table table-responsive" id="bunjouchis-table">
    <thead>
    <tr>
        <th>ID</th>
        <th>タイトル</th>
        <th class="hidden">区画図</th>
        <th class="hidden">資料</th>
        <th>住所</th>
        <th class="hidden">土地面積</th>
        <th class="hidden">地目</th>
        <th class="hidden">総区画</th>
        <th class="hidden">建ぺい率</th>
        <th class="hidden">容積率</th>
        <th class="hidden">用途地域</th>
        <th class="hidden">排水</th>
        <th class="hidden">取引態様</th>
        <th class="hidden">中学校区</th>
        <th class="hidden">駅名</th>
        <th class="hidden">分譲地状態</th>
        <th>更新日</th>
        <th colspan="3">操作</th>
    </tr>
    </thead>
    <tbody>
    @foreach($bunjouchis as $key => $bunjouchi)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{!! $bunjouchi->title !!}</td>
            <td class="hidden">{!! $bunjouchi->map_url !!}</td>
            <td class="hidden">{!! $bunjouchi->document_url !!}</td>
            <td>{!! $bunjouchi->address !!}</td>
            <td class="hidden">{!! $bunjouchi->land_area !!}</td>
            <td class="hidden">{!! $bunjouchi->ground !!}</td>
            <td class="hidden">{!! $bunjouchi->total_parcel !!}</td>
            <td class="hidden">{!! $bunjouchi->construction_pay_rate !!}</td>
            <td class="hidden">{!! $bunjouchi->floor_area_ratio !!}</td>
            <td class="hidden">{!! $bunjouchi->usage_area !!}</td>
            <td class="hidden">{!! $bunjouchi->drainage !!}</td>
            <td class="hidden">{!! $bunjouchi->dealing_status !!}</td>
            <td class="hidden">{!! $bunjouchi->school_id !!}</td>
            <td class="hidden">{!! $bunjouchi->station_id !!}</td>
            <td class="hidden">{!! $bunjouchi->status !!}</td>
            <td>{!! $bunjouchi->updated_at !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.bunjouchis.destroy', $bunjouchi->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.bunjouchis.show', [$bunjouchi->id]) !!}" class='btn btn-default btn-xs'><i
                                class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.bunjouchis.edit', [$bunjouchi->id]) !!}" class='btn btn-default btn-xs'><i
                                class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>