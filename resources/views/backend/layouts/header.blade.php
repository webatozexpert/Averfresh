

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Averfresh</title>

    <!-- Bootstrap core CSS -->
    <link type="text/css" href="{{asset('public/backend')}}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link type="text/css" href="{{asset('public/backend')}}/css/select2.css" rel="stylesheet">
    <link type="text/css" href="{{asset('public/backend')}}/css/custom.css" rel="stylesheet">
    <link type="text/css" href="{{asset('public/backend')}}/lib/datatable/css/jquery.dataTables.css" rel="stylesheet">
    <link type="text/css" href="{{asset('public/backend')}}/lib/datatable/css/dataTables.fixedColumns.min.css" rel="stylesheet">
    <link type="text/css" href="{{asset('public/backend')}}/lib/cssmenu/menu_styles.css" rel="stylesheet">
    <link type="text/css" href="{{asset('public/backend')}}/lib/validationengine/css/validationEngine.jquery.css" rel="stylesheet">

    <link type="text/css" href="{{asset('public/backend')}}/css/jquery-ui.css" rel="stylesheet">
    <link type="text/css" href="{{asset('public/backend')}}/css/smooth/jquery-ui.css" rel="stylesheet">

    <link type="text/css" href="{{asset('public/backend')}}/css/ladda-themeless.min.css" rel="stylesheet">
    <link type="text/css" href="{{asset('public/backend')}}/css/prism.css" rel="stylesheet">



    <!-- for bootstrap slider ~~~~~~~~~~~~~~  -->
    <!-- <link type="text/css" href="{{asset('public/backend')}}/css/bootstrap-switch.css" rel="stylesheet"> -->
    <!-- end bootstrap slider ~~~~~~~~~~~~~~  -->


    <!-- <link type="text/css" href="jquery.datetimepicker.css"/ > -->
    <!-- <link type="text/css" href="{{asset('public/backend')}}/lib/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet"> -->

    <!-- end timepicker -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <!-- Following two jquery scripts are load in the header, since these are required when page is loaded. -->
    <script src="{{asset('public/backend')}}/js/jquery.js"></script>
    <script src="{{asset('public/backend')}}/js/jquery-ui.js"></script>


    <!-- for submit -->
    <script src="{{asset('public/backend')}}/js/spin.min.js"></script>
    <script src="{{asset('public/backend')}}/js/ladda.min.js"></script>
    <!-- end for submit -->



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

 <div class="top-bar navbar-fixed-top">
     <nav class="navbar navbar-custom navbar-default" role="navigation">
         <div class="navbar-header">
             <a class="navbar-brand company_name">User : {{ Auth::user()->name }}</a>
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                 <span class="sr-only">Toggle navigation</span>
                 <span class="icon-bar icon-bar-inverse"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
             </button>
         </div>
     </nav>
 </div>
