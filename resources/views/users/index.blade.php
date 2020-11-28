@extends('layouts.apphome')
@section('content')

<!--
    <title>Laravel 5.8 Ajax CRUD tutorial using Datatable - ItSolutionStuff.com</title>-->

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">

<div class="container">

    <br>
    <a class="btn btn-success" href="javascript:void(0)" id="createNewUser">Crear un usuario</a>
    <hr>

    <table class="table table-bordered data-table">

        <thead>

            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Email</th>
                <th width="280px">Action</th>
            </tr>

        </thead>

        <tbody>

        </tbody>

    </table>

</div>



@include('users.form')




@endsection
