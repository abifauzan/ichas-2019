@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Addresssss') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="container">
    <div class="col-lg-10 col-lg-offset-1 mb-20">
        <div class="panel panel-primary card-view">
            <div class="panel-heading bg-grad-danger">
                <div class="pull-left">
                    <h6 class="panel-title txt-light">{{ __('Verify Your Email Address') }}</h6>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <p>{{ __('Before proceeding, please check your email for a verification link.') }}{{ __(' If you did not receive the email') }}, </p>
                    <p>&nbsp;</p>
                    <p><a href="{{ route('verification.resend') }}" class="btn btn-primary btn-sm">{{ __('click here to request another') }}</a>.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@if (session('resent'))

<div class="row">
    <div class="col-lg-10 col-lg-offset-1 mb-20">
        <div class="alert alert-warning alert-style-1">
            <i class="zmdi zmdi-alert-circle-o"></i> {{ __('A fresh verification link has been sent to your email address.') }}
        </div>
    </div>
</div>
@endif

@endsection
