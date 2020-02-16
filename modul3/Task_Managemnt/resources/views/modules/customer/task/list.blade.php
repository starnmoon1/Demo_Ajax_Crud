@extends('index')
@section('title','Danh sach cong viec')
@section('content')
    <div class="row">
        <div class="col-12">
            <h2>Danh sach cong viec</h2>
        </div>
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tieu de</th>
                    <th scope="col">Noi dung</th>
                    <th scope="col">Ngay hoan thanh</th>
                    <th scope="col">Hinh anh</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @if(empty($tasks))
                    <tr>
                        <td>No Data</td>
                    </tr>
                    @else
                    @foreach($tasks as $key=>task)
                        <tr>
                            <th scope="row">++$key</th>
                            <td>{{task->title}}</td>
                        </tr>
                <tr>
                    <th></th>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
