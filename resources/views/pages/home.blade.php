@extends('layouts.master')
@section('content')
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-12">
                <h2>Google Data</h2>
                <table class="table table-bordered">
                    <tr>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Address</th>
                        <th>Phone</th>
                    </tr>
                    @foreach ($data as $item)
                        <tr>
                        <td>{{$item->name}}</td>
                        <td>{{$item->age}}</td>
                        <td>{{$item->address}}</td>
                        <td>{{$item->phone}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection