@extends('layout.master')
@section('page-name', 'List Categories')
@section('content')
   <div class="col-12">
       <table class="table">
           <thead>
           <tr>
               <th scope="col">#</th>
               <th scope="col">Name</th>
               <th scope="col">Slug</th>
               <th scope="col"></th>
           </tr>
           </thead>
           <tbody>
           @forelse($categories  as $key => $category)
               <tr>
                   <th scope="">{{++$key}}</th>
                   <td>{{$category->name}}</td>
                   <td>{{$category->slug}}</td>
                   <td><a href="{{route('category.delete', $category->id)}}" class="btn btn-danger" onclick="return confirm('Do you want to delele this category ?')">Delete</a></td>
                   <td><a href="{{route('category.edit', $category->id)}}" class="btn btn-primary">Edit</a></td>
               </tr>
           @empty
               <tr>
                   <td colspan="2">No Data </td>
               </tr>
           @endforelse
           </tbody>
       </table>
   </div>
@endsection
