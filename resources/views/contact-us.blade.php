@extends("layouts.frontend.app")

@section('css')

@endsection


@section('content')

    @foreach($bunjouchis as $index => $bunjouchi)
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