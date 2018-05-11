<li class="{{ Request::is('admin/regions*') ? 'active' : '' }}">
    <a href="{!! route('admin.regions.index') !!}"><i class="fa fa-edit"></i><span>地名</span></a>
</li>

<li class="{{ Request::is('admin/schools*') ? 'active' : '' }}">
    <a href="{!! route('admin.schools.index') !!}"><i class="fa fa-edit"></i><span>校区</span></a>
</li>

<li class="{{ Request::is('admin/routes*') ? 'active' : '' }}">
    <a href="{!! route('admin.routes.index') !!}"><i class="fa fa-edit"></i><span>路線</span></a>
</li>

<li class="{{ Request::is('admin/stations*') ? 'active' : '' }}">
    <a href="{!! route('admin.stations.index') !!}"><i class="fa fa-edit"></i><span>駅</span></a>
</li><li class="{{ Request::is('prices*') ? 'active' : '' }}">
</li>

<li class="{{ Request::is('bunjouchis*') ? 'active' : '' }}">
    <a href="{!! route('admin.bunjouchis.index') !!}"><i class="fa fa-edit"></i><span>Bunjouchis</span></a>
</li>

