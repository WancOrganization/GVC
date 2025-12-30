<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="GVAC (OPC) Pvt. Ltd. PVT. LTD." />
    <meta name="description" content="GVAC (OPC) Pvt. Ltd. PVT. LTD.">
    <link rel="icon" type="image/png" href="{{ asset('Asset/images/anzox/favicon.png') }}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GVAC</title>
    <link href="{{ asset('Asset/css/plugins.css') }}" rel="stylesheet">
    <link href="{{ asset('Asset/css/style.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playball&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>
    <div class="body-inner">
        <style>
            .line {

                margin: 0 0 50px 0;
                border-top: 2px solid rgb(0, 0, 0);
                width: 20%
            }
        </style>
        @include('layouts.header')
        @yield('content')
        @include('layouts.footer')
    </div>
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>

    <script src="{{ asset('Asset/js/jquery.js') }}"></script>
    <script src="{{ asset('Asset/js/plugins.js') }}"></script>
    <script src="{{ asset('Asset/js/functions.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>
</body>

</html>
