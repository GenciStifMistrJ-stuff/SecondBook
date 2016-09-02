@extends('layout')

@section('header')
    <title>Database</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
        }
    </style>
@stop

@section('container')
    <h2>Some Database stuff</h2>{{ $databaseStuff }}
    @foreach($databaseStuff as $oneStuff)
        <ul>
            @foreach($oneStuff as $columnValue)
                <li>{{ print_r($databaseStuff) }}</li>
            @endforeach
        </ul>
    @endforeach
@stop