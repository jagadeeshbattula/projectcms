@extends('author.layouts.master')


@section('content')

    <h1>Posts:-</h1>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Id</th>
            <th>Category</th>
            <th>Photo</th>
            <th>Title</th>
            <th>Body</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
        </thead>
        <tbody>

        @if($posts)
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->category_id ? $post->category->name:'Uncategorized'}}</td>
                    <td><img src="{{$post->photo?$post->photo->file:'No photo exist'}}" alt="No photo exist" width="120" height="40"></td>
                    <td><a href="#">{{$post->title}}</a></td>
                    <td>{{str_limit($post->body, 18)}}</td>
                    <td>{{$post->created_at->diffForHumans()}}</td>
                    <td>{{$post->updated_at->diffForHumans()}}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>

@endsection