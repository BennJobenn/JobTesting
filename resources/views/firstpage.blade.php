@extends('layouts.firstlayout')

@section('content')

<div>
    <h1>First Ever Page in Laravel</h1>
    <p>It's a simple page created in Laravel.</p>

    <h2>User : {{ $user }}</h2>
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
            @foreach ($name as $lists)
            <tr class="table-primary">
                <td class="table-danger"> {{ $lists->id}}</td>
                {{-- <td class="table-danger"> {{ $lists['id'] }}</td> --}}
                <td class="table-success"> {{ $lists->name }}</td>
                <td class="table-warning"> {{ $lists->email }}</td>
                <td class="table-info"> {{ $lists->age }}</td>

                <td> <button class="btn btn-danger">Delete</button> </td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


@endsection