<!DOCTYPE html>
<html lang="en">
@include('dashboard.partial.header')

<body class="nav-md">
<div class="container body">
    <div class="main_container">


    @include('dashboard.partial.sideMenu')
    @include('dashboard.partial.nav')


    <!-- page content -->
        <div class="right_col" role="main">
            @yield('content')

        </div>

        <!-- /page content -->
        @include('dashboard.partial.footer')


    </div>
</div>
@include('dashboard.partial.script')
</body>
</html>
