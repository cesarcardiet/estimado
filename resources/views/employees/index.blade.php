@extends('layouts.apphome')

@section('content')

<!--
    <title>Laravel 5.8 Ajax CRUD tutorial using Datatable - ItSolutionStuff.com</title>-->

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />


    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">

    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

<div class="container">

    <br>
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Empleados</h1>
    </div>
    <hr>

    <table class="table table-bordered data-table-employee">

        <thead>

            <tr>
                <th>Id</th>
                <th>Nuip</th>
                <th>Nombre</th>
                <th>Saldo acreditado</th>
                <th>Saldo descontado </th>
                <th>saldo pendiente</th>
                <th width="280px">Action</th>

            </tr>

        </thead>

        <tbody>

        </tbody>

    </table>

</div>



@include('employees.form')




@endsection
