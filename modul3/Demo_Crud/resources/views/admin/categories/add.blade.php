@extends('layout.master')
@section('page-name', 'Add new category')
@section('content')
   <div class="col-12">
       <form method="post" action="{{route('categories.create')}}">
           @csrf
           <div class="form-group">
               <label>Category</label>
               <input type="text" class="form-control" name="name" >
              <button type="submit" class="btn btn-primary">Submit</button>
           </div>
       </form>
   </div>
@endsection

