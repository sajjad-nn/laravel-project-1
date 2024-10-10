@extends('layout.asli')

@section('content')
<h1>Create Articles:</h1>
<form action="/admin">
    <tr>
        <td>title:</td>
        <td><input type="text" name="title"></td>
        <td><button>send</button></td>
    </tr>
</form>

@endsection