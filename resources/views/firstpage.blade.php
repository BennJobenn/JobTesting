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

    </style>

</head>
<body>
    <div>
        <h1>First Ever Page in Laravel</h1>
        <p>It's a simple page created in Laravel.</p>
    </div>
    <div class="table-responsive">
        <table class="table table-secondary">
            <thead>
                <tr class="table-dark">
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>age</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($name as $users)
                <tr class="table-primary">
                    <td class="table-danger"> {{ $loop->index + 1 }}</td>
                    {{-- <td class="table-danger"> {{ $users['id'] }}</td> --}}
                    <td class="table-success"> {{ $users['names'] }}</td>
                    <td class="table-warning"> {{ $users['email'] }}</td>
                    <td class="table-info"> {{ $users['age'] }}</td>

                    <td> <button class="btn btn-danger">Delete</button> </td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>