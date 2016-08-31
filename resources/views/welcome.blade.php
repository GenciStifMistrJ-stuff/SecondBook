@extends('layout')

@section('header')
    <title>Laravel</title>

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
    <div class="container">
        <div class="content">
            @if($yearOfIssue > intval(getdate()['year']) - 3)
                <div class="title">
                    {{ $nameOfFramework }} - ok it's perhaps a new stuff...
                </div>
            @elseif($yearOfIssue < 2013)
                pes
            @else
                2013
            @endif
        </div>
    </div>
@stop