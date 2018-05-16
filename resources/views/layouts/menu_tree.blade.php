<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu">
    <li class="treeview active">
        <a href="javascript:;">
            <i class="fa fa-share"></i> <span>分譲地</span>
            <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{!! route('admin.bunjouchis.create') !!}"><i class="fa fa-circle-o"></i> 新規登録</a></li>
            <li>
                <a href="{!! route('admin.bunjouchis.index') !!}"><i class="fa fa-circle-o"></i> リスト
                    <span class="pull-right-container">
                        {{--<i class="fa fa-angle-left pull-right"></i>--}}
                    </span>
                </a>
                {{--
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Level Two
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                        </ul>
                    </li>
                </ul>
                --}}
            </li>
        </ul>
    </li>
</ul>