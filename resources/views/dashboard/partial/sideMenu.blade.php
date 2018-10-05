<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="/" class="site_title"><i class="fa fa-apple"></i> <span>nutrition planner</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
              {{--<img src="images/img.jpg" alt="..." class="img-circle profile_img">--}}
            </div>
            <div class="profile_info">
                <span>Welcome Dr.</span>
                <h2>{{\Illuminate\Support\Facades\Auth::user()->name}}</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br/>

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">

                <ul class="nav side-menu">


                    <li><a href="{{url('/')}}/settings"> <i class="fa fa-laptop"></i> الصفحة الرئيسية</a></li>
                    <li><a href="{{url('/')}}/patient"> <i class="fa fa-users"></i> المرضي</a></li>
                    <li><a href="{{url('/')}}/system"> <i class="fa fa-paperclip"></i> الانظمة الغذائية</a></li>
                    <li><a href="{{url('/')}}/reservation"> <i class="fa fa-ticket"></i> حجز المواعيد </a></li>

                    <li><a href="{{url('/')}}/food"> <i class="fa fa-apple"></i> الطعام </a></li>


                </ul>

            </div>

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
     {{--    <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>--}}
        <!-- /menu footer buttons -->
    </div>
</div>