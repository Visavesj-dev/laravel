@extends('layouts.master_template')
@section('title')Contact @endsection
@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3 head-title">Employee</h1>
        </div>
    </div>

    <div class="container">
        <table class="table table-bordered">
            <thead class="bg-primary text-white">
                <tr>
                    <th>ID</th>
                    <th>FullName</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>tel</th>
                    <th>Age</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($emps as $em)
                    <tr>
                        <td>{{ $em->id }}</td>
                        <td>{{ $em->fullname }}</td>
                        <td>{{ $em->gender }}</td>
                        <td>{{ $em->email }}</td>
                        <td>{{ $em->tel }}</td>
                        <td>{{ $em->age }}</td>
                        <td>{{ $em->address }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

@endsection
