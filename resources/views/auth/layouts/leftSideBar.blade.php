<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">

        <div id="sidebar-menu">
            <ul>
                <li class="text-muted menu-title">{{ trans('menu.main') }}</li>

                <li>
                    <a href="{{ url('/admin') }}" class="waves-effect waves-primary{{ Request::is('admin') ? ' active' : '' }}">
                        <i class="zmdi zmdi-view-dashboard"></i><span> {{ trans('menu.dashboard') }}<i>Dashboard</i> </span>
                    </a>
                </li>

                <li class="has_sub">
                    <a class="waves-effect waves-primary{{ Request::is('admin/press*') ? ' active' : '' }}">
                        <i class="fa fa-newspaper-o"></i> <span> {{ trans('menu.press') }}<i>Press</i> </span>
                    </a>
                    <ul class="list-unstyled">
                        <li class="{{ Request::is('admin/press') ? 'active' : '' }}"><a href="{{ url('/admin/press') }}"><i class="zmdi zmdi-view-list"></i> {{ trans('menu.press-list') }}</a></li>
                        <li class="{{ Request::is('admin/press/create') ? 'active' : '' }}"><a href="{{ url('/admin/press/create') }}"><i class="zmdi zmdi-edit"></i> {{ trans('menu.press-new') }}</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ url('admin/gallery') }}" class="waves-effect waves-primary{{ Request::is('/admin/gallery') ? ' active' : '' }}">
                        <i class="zmdi zmdi-collection-folder-image"></i><span> {{ trans('menu.gallery') }}<i>Gallery</i> </span>
                    </a>
                </li>

                {{--<li class="has_sub">--}}
                    {{--<a href="#" class="waves-effect waves-primary"><i--}}
                                {{--class="zmdi zmdi-invert-colors"></i><span> Components </span> <span--}}
                                {{--class="label label-default pull-right">5</span> </a>--}}
                    {{--<ul class="list-unstyled">--}}
                        {{--<li><a href="components-grid.html">Grid</a></li>--}}
                        {{--<li><a href="components-widgets.html">Widgets</a></li>--}}
                        {{--<li><a href="components-nestable-list.html">Nesteble</a></li>--}}
                        {{--<li><a href="components-range-sliders.html">Range Sliders </a></li>--}}
                        {{--<li><a href="components-sweet-alert.html">Sweet Alerts </a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}

                {{--<li class="has_sub">--}}
                    {{--<a href="#" class="waves-effect waves-primary"><i class="zmdi zmdi-card-giftcard"></i>--}}
                        {{--<span> Icons </span> </a>--}}
                    {{--<ul class="list-unstyled">--}}
                        {{--<li><a href="icons-glyphicons.html">Glyphicons</a></li>--}}
                        {{--<li><a href="icons-materialdesign.html">Material Design</a></li>--}}
                        {{--<li><a href="icons-themifyicon.html">Themify Icons</a></li>--}}
                        {{--<li><a href="icons-ionicons.html">Ion Icons</a></li>--}}
                        {{--<li><a href="icons-fontawesome.html">Font awesome</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}

                {{--<li class="has_sub">--}}
                    {{--<a href="#" class="waves-effect waves-primary"><i class="zmdi zmdi-widgets"></i><span> Forms </span></a>--}}
                    {{--<ul class="list-unstyled">--}}
                        {{--<li><a href="form-elements.html">General Elements</a></li>--}}
                        {{--<li><a href="form-advanced.html">Advanced Form</a></li>--}}
                        {{--<li><a href="form-validation.html">Form Validation</a></li>--}}
                        {{--<li><a href="form-wizard.html">Form Wizard</a></li>--}}
                        {{--<li><a href="form-wysiwig.html">WYSIWYG Editor</a></li>--}}
                        {{--<li><a href="form-summernote.html">Summernote</a></li>--}}
                        {{--<li><a href="form-uploads.html">Multiple File Upload</a></li>--}}
                        {{--<li><a href="form-xeditable.html">X-editable</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}

                {{--<li class="has_sub">--}}
                    {{--<a href="#" class="waves-effect waves-primary"><i class="zmdi zmdi-view-list-alt"></i><span> Tables </span></a>--}}
                    {{--<ul class="list-unstyled">--}}
                        {{--<li><a href="tables-basic.html">Basic Tables</a></li>--}}
                        {{--<li><a href="tables-datatable.html">Data Table</a></li>--}}
                        {{--<li><a href="tables-editable.html">Editable Table</a></li>--}}
                        {{--<li><a href="tables-responsive.html">Responsive Table</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}

                {{--<li class="has_sub">--}}
                    {{--<a href="#" class="waves-effect waves-primary"><i--}}
                                {{--class="zmdi zmdi-chart"></i><span> Charts </span> </a>--}}
                    {{--<ul class="list-unstyled">--}}
                        {{--<li><a href="chart-flot.html">Flot Chart</a></li>--}}
                        {{--<li><a href="chart-morris.html">Morris Chart</a></li>--}}
                        {{--<li><a href="chart-chartist.html">Chartist chart</a></li>--}}
                        {{--<li><a href="chart-nvd3.html">Nvd3 charts</a></li>--}}
                        {{--<li><a href="chart-peity.html">Peity Charts</a></li>--}}
                        {{--<li><a href="chart-sparkline.html">Sparkline Charts</a></li>--}}
                        {{--<li><a href="chart-other.html">Other Chart</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}

                {{--<li class="has_sub">--}}
                    {{--<a href="#" class="waves-effect waves-primary"><i--}}
                                {{--class="zmdi zmdi-pin"></i><span> Maps </span> <span--}}
                                {{--class="label label-primary pull-right">2</span></a>--}}
                    {{--<ul class="list-unstyled">--}}
                        {{--<li><a href="map-google.html"> Google Map</a></li>--}}
                        {{--<li><a href="map-vector.html"> Vector Map</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}

                {{--<li class="text-muted menu-title">More</li>--}}

                {{--<li class="has_sub">--}}
                    {{--<a href="#" class="waves-effect waves-primary"><i--}}
                                {{--class="zmdi zmdi-email"></i><span> Mail </span></a>--}}
                    {{--<ul class="list-unstyled">--}}
                        {{--<li><a href="mail-inbox.html">Inbox</a></li>--}}
                        {{--<li><a href="mail-compose.html">Compose Mail</a></li>--}}
                        {{--<li><a href="mail-read.html">View Mail</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}

                {{--<li class="has_sub">--}}
                    {{--<a href="#" class="waves-effect waves-primary"><i--}}
                                {{--class="zmdi zmdi-pages"></i><span> Pages </span></a>--}}
                    {{--<ul class="list-unstyled">--}}
                        {{--<li><a href="pages-blank.html">Blank Page</a></li>--}}
                        {{--<li><a href="pages-login.html">Login</a></li>--}}
                        {{--<li><a href="pages-register.html">Register</a></li>--}}
                        {{--<li><a href="pages-recoverpw.html">Recover Password</a></li>--}}
                        {{--<li><a href="pages-lock-screen.html">Lock Screen</a></li>--}}
                        {{--<li><a href="pages-404.html">404 Error</a></li>--}}
                        {{--<li><a href="pages-500.html">500 Error</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}

                {{--<li class="has_sub">--}}
                    {{--<a href="#" class="waves-effect waves-primary"><i--}}
                                {{--class="zmdi zmdi-pin"></i><span> Extras </span></a>--}}
                    {{--<ul class="list-unstyled">--}}
                        {{--<li><a href="extras-timeline.html">Timeline</a></li>--}}
                        {{--<li><a href="extras-invoice.html">Invoice</a></li>--}}
                        {{--<li><a href="extras-calendar.html"> Calendar</a></li>--}}
                        {{--<li><a href="extras-email-template.html">Email template</a></li>--}}
                        {{--<li><a href="extras-maintenance.html">Maintenance</a></li>--}}
                        {{--<li><a href="extras-coming-soon.html">Coming-soon</a></li>--}}
                        {{--<li><a href="extras-gallery.html"> Gallery</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}

            </ul>
            <div class="clearfix"></div>
        </div>


        <div class="clearfix"></div>
    </div>

    <div class="user-detail">
        <div class="dropup">
            <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img
                        src="/img/favicon.png" alt="user-img" class="img-circle"> </a>
            <ul class="dropdown-menu">
                {{--<li><a href="javascript:void(0)"><i class="zmdi zmdi-face"></i> Profile</a></li>--}}
                {{--<li><a href="javascript:void(0)"><i class="zmdi zmdi-settings"></i> Settings</a></li>--}}
                <li><a href="{{ url('/logout') }}"><i class="zmdi zmdi-power"></i> Logout</a></li>
            </ul>
        </div>

        <h5 class="m-t-0 m-b-0">{{ Auth::user()->name }}</h5>
        <p class="text-muted m-b-0">
            <small><i class="fa fa-circle text-success"></i> <span>{{ trans('sideBar.online') }}</span></small>
        </p>
    </div>
</div>
<!-- Left Sidebar End -->