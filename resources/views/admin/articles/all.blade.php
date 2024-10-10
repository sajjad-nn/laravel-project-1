@extends('layout.asli');

@section('content')
<h2>all articles</h2>
<table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>remove</th>
            <th>delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($articles as $article)
        <tr>
            <td>{{$article->id}}</td>
            <td>{{$article->title}}</td>
            <td>
                <form action="/admin/article/{{$article->id}}" method="post">
                    @csrf
                    @method('delete')


                    <button class="btn btn-danger">delete</button>
                </form>


            </td>
            <td>
                <form action="/admin/article/{{$article->id}}/edit" method="post">
                    @csrf




                    <button class="btn btn-primary">edit</button>
                </form>
            </td>





        </tr>


        @endforeach
    </tbody>
</table>
<div>
    <form action="/admin/article/create" method="get">
        @csrf




        <button class="btn btn-primary">create</button>
    </form>
</div>



@endsection