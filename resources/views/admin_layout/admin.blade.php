<!doctype html>
<html lang="sk">
<head>
    @include('layout.partials.head')
</head>

<body background="{{ asset('images/background2.jpg') }}">
<div class="container main-content">
    @include('admin_layout.partials.nav')

    <main role="main">

        <div class="taskmanager-template">
            <div class="row">
                <div class="col-sm-12">
                    @yield('content')
                </div>
            </div>
        </div>
    </main>
    @include('admin_layout.partials.footer')
<!-- Bootstrap core JavaScript -->
    @include('layout.partials.footer-scripts')
</div>

</body>
</html>