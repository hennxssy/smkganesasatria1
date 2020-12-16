<!DOCTYPE html>
<html lang="en">

<head>
@include('biodata.includes.head')
<title>@yield('page-title')</title>
@yield('stylesheet')
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
@include('biodata.includes.sidebar')
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">@yield('page-heading')</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
@yield('content')
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!--JS FILE-->
@include('biodata.includes.script')
@yield('script')

</body>

</html>