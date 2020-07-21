@extends('layouts.app')

@section('content')
@php

    if(Auth::user()->id_role == 2) {
        $action = 'print.certificate';
    } else {
        $action = 'print.certificate.conference';
    }

@endphp
@if(!((Auth::user()->id_role==3) || (Auth::user()->id_role == 2)))
<div class='row'>
    <div class="alert alert-danger">
        <p> You are not allowed to access this page &nbsp;
            <a href="/" class="btn btn-sm btn-warning">Back to Website</a>
        </p>
    </div>
</div>
@else

@if($helper->status == 0)
    <div class="row">
        <div class="alert alert-warning alert-style-1">
            <i class="zmdi zmdi-alert-circle-o"></i> E-Certificate is not available, please come back later.
        </div>
    </div>
@else
<div class="row">
        <div class="col-sm-8 col-xs-12">
            <div class="row">
            @if(!(empty($data)))
                @if($data->status_certificate == 0)
                    <div class="alert alert-warning alert-style-1">
                        <i class="zmdi zmdi-alert-circle-o"></i> Your E-Certificate is ready to print</span>
                    </div>
                @elseif($data->status_certificate == 1)
                    <div class="alert alert-success alert-style-1">
                        <i class="zmdi zmdi-check"></i> You already printed your E-Certificate.
                    </div>
                @endif
            @else
                <div class="alert alert-warning alert-style-1">
                    <i class="zmdi zmdi-alert-circle-o"></i> E-Certificate is not available, please come back later.
                </div>
            @endif
            </div>

        </div>
    @if(!(empty($data)))
        <div class="col-sm-4 col-xs-12">
            <div class="col-sm-12 col-xs-12">
                <div class="panel panel-default border-panel-reverse card-reverse card-view bg-grad-danger">
                    <div class="panel-heading">
                        <div class="text-center">
                            <h6 class="panel-title txt-light">Print E-Certificate</h6>
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
                                        <p>Print Your E-Certificate </p>
                                        <form action="{{ route($action) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-light btn-anim txt-dark mt-20 pl-40 pr-40 mb-10"><i class="fa fa-sign-out"></i><span class="btn-text"><strong>PRINT</strong></span></button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    </div>
@endif



@endif
@endsection


@section('script')
    @include('sweet::alert')
@endsection

