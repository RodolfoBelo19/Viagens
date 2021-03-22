<html>

<head>
    <title>Viagens @yield('title')</title>

    <!-- Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">


    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>

    <style>
        * {
            font-family: 'Roboto', sans-serif;
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            padding: 15px;
            justify-content: center;
            align-items: center;
            background: rgb(2, 0, 36);
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(0, 0, 10, 1) 0%, rgba(72, 87, 92, 1) 100%);
            color: white;
            text-align: center;
        }
    </style>

</head>

<body>
    @section('sidebar')

    @show

    <div class="container">
        @yield('content')
    </div>
    <div class="text-center footer">

        <h5>Copyright © 2021 - Rodolfo Belo</h5>

    </div>
</body>

</html>