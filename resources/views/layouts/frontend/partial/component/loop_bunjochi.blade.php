<a target="_blank" href="@@webRoot/about-us/detail.html">
    <li class="cell_li">
        <span class="label_rui @if($bunjouchi->status) gray_item @endif">@if($bunjouchi->status)完売御礼@else分譲中@endif</span>
        <span class="description_rui">{{ $bunjouchi->title }}</span>
    </li>
</a>