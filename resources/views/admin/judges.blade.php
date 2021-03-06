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
        <div class="col-sm-8 col-xs-12">
        @if(!(empty($data)))
            <div class="panel panel-default border-panel card-view panel-refresh">
                <div class="refresh-container">
                    <div class="la-anim-1"></div>
                </div>
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">The Judges</h6>
                    </div>
                    <div class="pull-right">
                        <a href="{{route('app.judges.add.view')}}" class="btn btn-primary btn-sm">
                            Add user
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body row pa-0">

                        <div class="table-wrap">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php($no=0)
                                        @foreach($data as $item)
                                        @php($no++)
                                        <tr>
                                            <td>{{$no}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->email}}</td>
                                            <td>
                                                <a href="{{route('app.judges.edit.view', $item->id)}}" class="btn btn-info btn-sm">
                                                    Edit user
                                                </a>&nbsp;&nbsp;
                                                <a href="{{route('app.judges.delete', $item->id)}}" onclick="return confirm('Are you sure ?')" class="btn btn-warning btn-sm">
                                                    Delete user
                                                </a>
                                            </td>
                                        </tr>

                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                        {{-- <div class="ml-30">{{ $data->links() }}</div> --}}
                    </div>
                </div>
            </div>
        @else
            <div class="alert alert-warning alert-style-1">
                <i class="zmdi zmdi-alert-circle-o"></i> There is no data
            </div>
        @endif
        </div>

        <div class="row">
            <div class="col-sm-4 col-xs-12">
                <div class="col-sm-12 col-xs-12">
                    <div class="panel panel-default border-panel-reverse card-reverse card-view bg-grad-danger">
                        <div class="panel-heading">
                            <div class="text-center">
                                <h6 class="panel-title txt-light">Some Information</h6>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="sm-data-box-4 with-icon">
                                    <div class="relative">
                                        <div class="data-wrap-left">
                                            <i class="icon-note txt-light font-24"></i>
                                        </div>
                                        <div class="data-wrap-right txt-light">
                                            <p>Please upload your Receipt of Payment after making a transaction to our ATM : </p>

                                            <div class="pt-15 uppercase-font">
                                                <ul class="uo-list">
                                                    <li class="mb-10 ml-10"><span>ATM BRI :</span><span>41516020002 (A/N : Abi Fauzan)</span></li>
                                                    <li class="mb-10 ml-10"><span>ATM BRI :</span><span>41516020002 (A/N : Abi Fauzan)</span></li>
                                                </ul>

                                            </div>
                                            <button class="btn btn-light btn-anim txt-dark mt-20 pl-40 pr-40 mb-10" data-toggle="modal" data-target="#uploadPayment"><i class="fa fa-sign-out"></i><span class="btn-text"><strong>UPLOAD</strong></span></button>
                                        </div>
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
