@extends('layouts.firstlayout')

@section('content')

{{-- testing out route parameters --}}


<div>

    <h2>
    <h3> ID: {{ $id->id }} </h3>
    <h3> Name: {{ $id->name }} </h3>
    <h3> Email: {{ $id->email }} </h3>
    <h3> Age: {{ $id->age }} </h3>
    </h2>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


@endsection