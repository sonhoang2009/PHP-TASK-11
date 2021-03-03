<?php

    ?>

@extends('layouts.app');

{{--noi dung trang con--}}
@section('content')


{{--    dinh nghia phan noi dung trang task--}}
    <div class="panel-body">

{{-- hien thi noi dung thong bao loi       --}}
        @include('errors.503')

{{--form nhap thong tin task moi--}}
        <form action="{{url('task')}}" method="post" class="form-horizontal">
                {{csrf_field()}}

{{-- ten task --}}
             <div class="form-group">
                 <label for="task" class="col-sm3">Task</label>
                 <div class="col-sm-6">
                     <input type="text" name="name" id="task" class="form-control">

                 </div>
             </div>

{{-- nut Task--}}
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i>AddTask
                    </button>
                </div>
            </div>
        </form>

{{--Hien thi noi dung trong database--}}
    @if(count($tasks)>0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Task
            </div>
            <div class="panel-body">
                <table class="table table-striped task-table">
{{--Tao tieu de cua cac cot--}}
                    <thead>
                        <td>Task</td>
                        <td>&nbsp;</td>
                    </thead>
{{--Tao cac dong de hien thi noi dung--}}
                    <tbody>
                    @foreach($tasks as $task)
                        <tr>
                            <td class="table-text">
                                <div>{{$task->name}}</div>
                            </td>
{{--Them nut xoa--}}
                            <td>
                                <form action="/task/{{task->id}}" method="post">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <button>Delete Task</button>

                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @endif
    </div>

@endsection

