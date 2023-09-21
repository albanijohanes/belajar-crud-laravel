@extends('include.layout')
@section('title', 'CRUD')
@extends('include.nb')
@section('content')
<table class="table table-hover">
    <thead class="table-primary">
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>NIM</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>John Doe</td>
            <td>123456789</td>
        </tr>
    </tbody>
</table>
@endsection
