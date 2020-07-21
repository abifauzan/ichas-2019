@extends('layouts.app')

@section('content')
@if(!(Auth::user()->id_role==1))
<div class='row'>
    <div class="alert alert-danger">
        <p> You are not allowed to access this page &nbsp;
            <a href="/" class="btn btn-sm btn-warning">Back to Website</a>
        </p>
    </div>
</div>
@else
    <div class="row">
        <div class="col-sm-12 col-xs-12">
            <div class="panel panel-default border-panel card-view panel-refresh">
                <div class="refresh-container">
                    <div class="la-anim-1"></div>
                </div>
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">Edit User : {{$data->name}}</h6>
                    </div>
                    <div class="pull-right">
                        <a href="{{route('app.judges')}}" class="btn btn-primary btn-sm">
                            go Back
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body row pa-0">
                        <div class="panel-wrapper collapse in">
                            <div class="container">
                                <div class="panel-body">
                                    <div class="form-wrap">
                                        <form action="{{route('app.judges.update')}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$data->id}}">
                                            <div class="form-group">
                                                <label for="name" class="control-label mb-10">Name:</label>
                                                <input type="text" name="name" class="form-control" id="name" value="{{$data->name}}" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="email" class="control-label mb-10">E-Mail:</label>
                                                <input type="email" name="email" class="form-control" id="email" value="{{$data->email}}" required>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-danger">Save changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @endif

@endsection
