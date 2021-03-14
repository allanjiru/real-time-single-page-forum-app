<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>SPA Forum</title>

        <!-- Bootstrap -->
        <link href="new/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom -->
        <link href="new/css/custom.css" rel="stylesheet">


        <!-- fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="new/font-awesome-4.0.3/css/font-awesome.min.css">

        <!-- CSS STYLE-->
        <link rel="stylesheet" type="text/css" href="new/css/style.css" media="screen" />

    </head>
    <body>
        <div id="app">
            <index></index>
        </div>
        <!-- get jQuery from the google apis -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.js"></script>
        <script src="new/js/bootstrap.min.js"></script>    
        <script src="{{asset('js/app.js')}}"></script>     
    </body>
</html>
