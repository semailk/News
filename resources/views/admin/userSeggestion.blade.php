@extends('layouts.admin')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
@foreach($notRead as $value)
        <tr class="table-primary">
            <td>Primary</td>
            <td>Joe</td>
            <td>joe@example.com</td>
        </tr>
@endforeach
        <tr class="table-success">
            <td>Success</td>
            <td>Doe</td>
            <td>john@example.com</td>
        </tr>


        </tbody>
    </table>
    </div>
@endsection
