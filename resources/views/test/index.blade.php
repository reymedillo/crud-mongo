@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5">

                <div class="panel-heading">Add Employee</div>
                <div class="panel-body">
                    @if(session()->has('id'))
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/employee/view', [session()->get('id')]) }}">
                    @else
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/employee') }}">
                    @endif
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ session()->get('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ session()->get('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                @if(session()->has('id'))
                                <button type="submit" class="btn btn-primary">Update</button>
                                @else
                                <button type="submit" class="btn btn-primary">Submit</button>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>

        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-heading">Employee List</div>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($emp as $e)
                          <tr>
                            <td>{{$e->id}}</td>
                            <td><a href="{{ url('/employee/view', [$e->id]) }}">{{$e->name}}</a></td>
                            <td>{{$e->email}}</td>
                             <form method="POST" action="{{ url('/employee', [$e->id]) }}">
                            {{ csrf_field() }}
                            <td><button type="submit" class="btn btn-danger">Delete</button></td>
                            </form>
                          </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <pre>
                
            </pre>
        </div>
    </div>
</div>
@endsection