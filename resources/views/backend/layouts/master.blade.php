@include('backend.include.css')

<style type="text/css" class="init">
    /* Ensure that the demo table scrolls */
    th,
    td {
        white-space: nowrap;
    }

    div.dataTables_wrapper {
        margin: 0 auto;
    }

</style>
</head>

<body>

    @include('backend.include.header')

    <div class="main-wrap container-fluid">
        @include('backend.layouts.sidebar')

        @yield('content')
         

    </div><!-- .container-fluid -->

    @include('backend.include.js')
