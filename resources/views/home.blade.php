@extends('layouts.app')

@section('content')
@php
$date = Carbon\Carbon::now()->toDateString();
$datePayment = $helper_payment->date_end;
$dateAbstract = $helper_abstract->date_end;
$datePaper = $helper_paper->date_end;
$datePaymentConference = $helper_payment_conference->date_end;
if(!(empty($checkPaper))) {
    $getCurrentFile = explode('/', $checkPaper->file);
}

@endphp
<div class="container">
<!-- Admin Role -->
@if(Auth::user()->id_role == 1)
    <div class="col-lg-10 col-lg-offset-1">
        <div class="panel panel-primary card-view">
            <div class="panel-heading bg-grad-primary">
                <div class="pull-left">
                    <h6 class="panel-title txt-light">Dashboard</h6>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <p>Welcome, Admin</p>
                </div>
            </div>
        </div>
    </div>
<!-- User Seminar Role -->
@elseif(Auth::user()->id_role == 2)
    <div class="col-lg-10 col-lg-offset-1 mb-20">
        <div class="panel panel-primary card-view">
            <div class="panel-heading bg-grad-danger">
                <div class="pull-left">
                    <h6 class="panel-title txt-light">Dashboard</h6>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <p>Welcome, <strong> {{Auth::user()->name}}</strong><br><br>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia dolore perferendis, odio accusantium quibusdam, similique temporibus delectus magni quas omnis velit, nobis saepe itaque aspernatur laudantium! Consequuntur alias totam exercitationem.
                    </p>
                </div>
            </div>
        </div>
    </div>

    @if(!(empty($checkUserSeminar)))
        <div class="col-lg-10 col-lg-offset-1 mb-20">
            <div class="panel panel-primary card-view">
                <div class="panel-heading bg-grad-danger">
                    <div class="pull-left">
                        <h6 class="panel-title txt-light">Your PIN Entrance</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <p>Please show this PIN to the committee as your access to enter the seminar
                        </p>
                        <h2 class="text-center mt-20 mb-20" style="font-weight:100; letter-spacing:0.1em">{{$checkUserSeminar->pin_entrance}}</h2>
                    </div>
                </div>
            </div>
        </div>
    @endif
<!-- User Conference Role -->
@elseif(Auth::user()->id_role == 3)

    <div class="col-lg-10 col-lg-offset-1 mb-20">
        <div class="panel panel-primary card-view">
            <div class="panel-heading bg-grad-danger">
                <div class="pull-left">
                    <h6 class="panel-title txt-light">Dashboard</h6>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <p>Welcome, <strong> {{Auth::user()->name}}</strong><br><br>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia dolore perferendis, odio accusantium quibusdam, similique temporibus delectus magni quas omnis velit, nobis saepe itaque aspernatur laudantium! Consequuntur alias totam exercitationem.
                    </p>
                </div>
            </div>
        </div>
    </div>

    @if(!(empty($checkUserConference)))
        <div class="col-lg-10 col-lg-offset-1 mb-20">
            <div class="panel panel-primary card-view">
                <div class="panel-heading bg-grad-danger">
                    <div class="pull-left">
                        <h6 class="panel-title txt-light">Your PIN Entrance</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <p>Please show this PIN to the committee as your access to enter the seminar
                        </p>
                        <h2 class="text-center mt-20 mb-20" style="font-weight:100; letter-spacing:0.1em">{{$checkUserConference->pin_entrance}}</h2>
                    </div>
                </div>
            </div>
        </div>
    @endif

<!-- User Judge Role -->
@elseif(Auth::user()->id_role == 4)

    <div class="col-lg-10 col-lg-offset-1">
        <div class="panel panel-primary card-view">
            <div class="panel-heading bg-grad-primary">
                <div class="pull-left">
                    <h6 class="panel-title txt-light">Dashboard</h6>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <p>Welcome, {{Auth::user()->name}}</p>
                </div>
            </div>
        </div>
    </div>

@endif
</div>

@endsection
