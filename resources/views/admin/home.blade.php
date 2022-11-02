<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
</head>

<body class="sb-nav-fixed">

    @include('admin.navbar')


    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">

            @include('admin.sidebar')

        </div>
        <div id="layoutSidenav_content">

            @include('admin.content')


            @include('admin.footer')

        </div>
    </div>
    @include('admin.script')
</body>

</html>
