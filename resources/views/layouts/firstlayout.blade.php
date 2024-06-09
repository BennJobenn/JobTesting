<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>First Ever Page in Laravel</title>

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .table {
            width: 80%;
            margin-left: auto;
            margin-right: auto;
            margin-top: 2%;
            table-layout: auto;
        }

        tbody td {
        white-space: nowrap; /* Prevent text wrapping */
        padding: 0; /* Remove default padding */
        margin: 0; /* Remove default margin */
        }
        .container {
        width: auto; /* Allow the container to take up only necessary width */
        overflow-x: auto; /* Ensure horizontal overflow for large content */
        }
        .dropdown-menu {
        margin: 0; /* Remove default margin from dropdown */
        }
        .dropdown {
        display: inline-block; /* Ensure the dropdown takes up only necessary width */
        }


        footer {
            background-color: #134f8a;
            padding: 25px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
            color: white;
            font-size: 15px;
            font-weight: bold;
        }

    </style>

</head>
<body>

    @yield('content')


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center">footer testing in first page</p>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>