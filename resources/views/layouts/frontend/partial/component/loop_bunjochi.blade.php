<a target="_blank" href="{{ route("bunjouchiDetail", ["id" => $bunjouchi->id]) }}">
    <li class="cell_li">
        <span class="label_rui @if($bunjouchi->status) gray_item @endif">@if($bunjouchi->status)完売御礼@else分譲中@endif</span>
        <span class="description_rui">{{ $bunjouchi->title }}</span>
    </li>
</a>