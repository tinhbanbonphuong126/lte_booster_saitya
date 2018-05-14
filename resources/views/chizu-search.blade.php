@extends("layouts.frontend.app")

@section('css')

@endsection


@section('content')


    <div class="bounce_navigation">
        <div class="bounce_list">
            <ul class="bounce_li">
                @foreach($regions as $key_region => $region)
                <li class="item_li"><a href="{{ route("chizuSearch", ["id" => $region->id]) }}">{{ $region->name }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>

    <hr />

    @isset($currentRegion)
        <img src="{{ asset("uploads/chizus") . '/' . $currentRegion->img }}" alt="">
    @endisset    

    <ul class="bound_ul">
        @foreach($bunjouchis as $key_bunjouchi => $bunjouchi)
        <li class="cell_li">
            <span class="label_rui @if($bunjouchi) gray_item @endif">分譲中</span>
            <span class="description_rui"><a target="_blank" href="/about-us/detail.html">{{ $bunjouchi->title }}</a></span>
        </li>
        @endforeach
    </ul>

@endsection

@section('scripts')

@endsection