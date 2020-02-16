@extends('layout.master')
@section('page-name', 'Add new category')
@section('content')
    <div class="col-12">
        <form method="post" action="{{route('categories.update', $category->id)}}">
            @csrf
            <div class="form-group">
                <label>Category</label>
                <input type="text" class="form-control" name="name" value="{{$category->name}}" >
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection

