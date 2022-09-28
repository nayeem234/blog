@extends('partials.frontend.frontend')
@section('title', 'Home')
@section('content')
    <div class="row">
        <button type="button" id="buttTon" class="btn btn-primary">Add Post</button>

        <table class="data-table" id="dataTable">
            <tr>
                <th>id</th>
                <th>Image</th>
                <th>Title</th>
                <th>Status</th>
                <th colspan="2">Action</th>
            </tr>
            <tr>
                <td>Id</td>
                <td>image</td>
                <td>Title</td>
                <td>Status</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
        </table>
    </div>
@endsection
