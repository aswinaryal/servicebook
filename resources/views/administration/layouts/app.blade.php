<!doctype html>
<html lang="en">
<head>
   @include('administration.layouts.head')
</head>
<body class="hold-transition skin-purple sidebar-mini">
    <div class="wrapper">
        @include('administration.layouts.header')
        @include('administration.layouts.sidebar')
        <div class="content-wrapper">
            <section class="content">
                @section('main-content')
                @show
            </section>

        </div>
        @include('administration.layouts.footer')
    </div>
</body>
</html>