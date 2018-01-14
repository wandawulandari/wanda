@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Authors
                <a href="{{route('author.create')}}" class="btn btn-sm btn-primary"> + </a>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <tr>
                        <th>No</th>
                        <th>Nama Author</th>
                        <th>Tindakan</th>
                        </tr>
                        @forelse($authors as $author)
                        <tr>
                        <td>{{$author->id}}</td>
                        <td>{{$author->name}}</td>
                        <td><a href="{{route('author.edit', $author->id)}}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="{{route('author.show', $author->id)}}" class="btn btn-sm btn-success">Show</a>
                        </td>
                        <td><form action="{{route('author.destroy', $author->id)}}" method="post">
                        {{ csrf_field() }}
                        {{method_field('DELETE')}}
                        <input type="submit" value="Delete" class="btn btn-sm btn-danger">
                        </form>
                        </td>
                        </tr>
                        @empty
                        <tr>
                        <td colspan="3">Data Kosong</td>
                        </tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 