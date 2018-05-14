@extends("layouts.frontend.app")

@section('css')

@endsection


@section('content')

    <div class="bounce_navigation">
        <div class="row">
            @foreach($regions->chunk(7) as $chunk)
            <div class="col-xs-6 col-md-6 device_union">
                <div class="navigation">
                    <ul>
                        @foreach($chunk as $index_region => $region)
                            <li class="has-sub"><a href="javascript:;">{{ $region->name }}</a>
                            <ul>
                                @foreach($region->school as $key_school => $school)
                                    <li><a href="{{ route("schoolSearch", ["id" => $school->id]) }}">{{ $school->name }}</a></li>
                                @endforeach
                            </ul>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </div>



    @foreach($bunjouchis as $index_bunjouchi => $bunjouchi)
        <table class="table table-hover">
            <thead>
            <tr>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{  $bunjouchi->id }}</td>
                <td>{{  $bunjouchi->title }}</td>
                <td>{{  $bunjouchi->address }}</td>
            </tr>
            </tbody>
        </table>
    @endforeach

@endsection

@section('scripts')

@endsection