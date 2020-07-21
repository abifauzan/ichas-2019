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
            <div class="panel panel-default border-panel card-view">

                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">Search Pin Registrant</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body row ml-20 mr-20 mt-20">

                            <form action="{{route('seach.pin')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="pin">Input Pin</label>
                                    <input type="text" name="pin" maxlength="6" class="form-control" placeholder="Input Pin" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Select Role</label>
                                    <label class="radio-inline"><input type="radio" name="role" value="1" checked required>Seminar</label>
                                    <label class="radio-inline"><input type="radio" name="role" value="2" required>Conference</label>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </form>

                    </div>
                </div>
            </div>
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

    @if(isset($data) && !(empty($data)))
    <div class="row">
        <!-- Find Pin User -->

        <div class="col-sm-8 col-xs-12">
            <div class="panel panel-default border-panel card-view">

                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">Detail User</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body row ml-20 mr-20 mt-20">

                        <div class="col-lg-12 mb-20">
                            <div class="col-lg-2">Name</div>
                            <div class="col-lg-10">{{$data->user->name}}</div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-lg-12 mb-20">
                            <div class="col-lg-2">Email</div>
                            <div class="col-lg-10">{{$data->user->email}}</div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-lg-12 mb-20">
                            <div class="col-lg-2">Role</div>
                            <div class="col-lg-10">{{$data->user->role->name}}</div>
                            <div class="clearfix"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

@endif
@endsection
