@extends('layouts.layout')

@section('content')
    <div class="abcd container d-flex flex-column ">
        <form>
            <div class="abcd"><input type="text" name="user_Name" id="search" onkeyup="showData()" placeholder="Enter name"></div>
        </form>

        <ul id="list"></ul>

    </div>
    <style>
        .abcd{
            margin-top: 10px;
            text-align: left;
            display: block;
            height: 100%;
            width: 100%;


        }
        *{
            background-color: #f5f5f5;
        }
        body{
            background-color: #f5f5f5;
        }
    </style>

@endsection
