<li class="{{ Request::is('admin/schools*') ? 'active' : '' }}">
    <a href="{!! route('admin.schools.index') !!}"><i class="fa fa-edit"></i><span>Schools</span></a>
</li>

<li class="{{ Request::is('admin/stations*') ? 'active' : '' }}">
    <a href="{!! route('admin.stations.index') !!}"><i class="fa fa-edit"></i><span>Stations</span></a>
</li>