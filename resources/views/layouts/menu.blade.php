<li class="{{ Request::is('admin/regions*') ? 'active' : '' }}">
    <a href="{!! route('admin.regions.index') !!}"><i class="fa fa-edit"></i><span>Regions</span></a>
</li>

<li class="{{ Request::is('admin/schools*') ? 'active' : '' }}">
    <a href="{!! route('admin.schools.index') !!}"><i class="fa fa-edit"></i><span>Schools</span></a>
</li>

<li class="{{ Request::is('admin/routes*') ? 'active' : '' }}">
    <a href="{!! route('admin.routes.index') !!}"><i class="fa fa-edit"></i><span>Routes</span></a>
</li>

<li class="{{ Request::is('admin/stations*') ? 'active' : '' }}">
    <a href="{!! route('admin.stations.index') !!}"><i class="fa fa-edit"></i><span>Stations</span></a>
</li>