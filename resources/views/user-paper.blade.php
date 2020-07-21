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

@if(!((Auth::user()->id_role==3)))
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

        @if(!(empty($checkPaper)))
            <div class="row">
                <div class="col-md-12">
                    @if($checkPaper->approval == 1)
                        <div class="alert alert-success alert-style-1">
                            <i class="zmdi zmdi-check"></i> Your Abstract Status : &nbsp;<span class="label label-success">Successfully approved</span><br><br>
                            <strong> *Please Upload your file and finish the payment </strong>
                        </div>
                    @elseif($checkPaper->approval == 0)
                        <div class="alert alert-warning alert-style-1">
                            <i class="zmdi zmdi-alert-circle-o"></i> Your Abstract Status : &nbsp;<span class="label label-warning">Waiting for Judges Approval</span>
                        </div>
                    @elseif($checkPaper->publish == 1)
                        <div class="alert alert-success alert-style-1">
                            <i class="zmdi zmdi-check"></i> Congratulation! Your Paper has been publish Status : &nbsp;<span class="label label-success">Successfully approved</span>
                        </div>
                    @endif
                </div>
            </div>
        @endif

        <!-- Modul Update File -->
        @if(!(empty($checkPaper)))
            @if(!(empty($checkPaper->file)))
                <div class="col-md-12 mb-30">
                    <div class="panel panel-primary card-view">
                        <div class="panel-heading bg-grad-info">
                            <div class="pull-left">
                                <h6 class="panel-title txt-light">Edit File Paper</h6>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                @if($datePaper <= $date)
                                    <div class="alert alert-warning alert-style-1">
                                        <i class="zmdi zmdi-alert-circle-o"></i> The deadline of submit paper is closed</span>
                                    </div>
                                @elseif($checkPaper->publish == 1)
                                    <div class="alert alert-success alert-style-1">
                                        <i class="zmdi zmdi-check"></i> Your paper has been published</span>
                                    </div>
                                @endif
                                <form action="{{route('edit.paper')}}" method="POST" enctype="multipart/form-data" class="pt-20 pr-20">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$checkPaper->id}}">
                                    <div class="form-group">
                                        <label for="">File</label>
                                        <input type="file" name="file" class="form-control" accept="application/pdf" required>
                                    </div>
                                    <span class="help-block">
                                        *Only Accept .pdf file<br>
                                        *The file may not be greater than 5 MB<br>
                                        Current File : <strong>{{$getCurrentFile[1]}}</strong></span>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-anim txt-white mt-20 pl-40 pr-40 mb-10" @if($datePaper <= $date || $checkPaper->publish == 1) disabled @endif><i class="fa fa-sign-out"></i><span class="btn-text"><strong>EDIT</strong></span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endif

        <!-- Modul Submit File -->
        @if(!(empty($checkPaper)))
            @if($checkPaper->approval == 1)
                <div class="col-md-12 mb-30">
                    <div class="panel panel-primary card-view">
                        <div class="panel-heading bg-grad-info">
                            <div class="pull-left">
                                <h6 class="panel-title txt-light">Submit File Paper</h6>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                @if(!(empty($checkPaper)))
                                    @if(!(empty($checkPaper->file)))
                                        <div class="alert alert-warning alert-style-1">
                                            <i class="zmdi zmdi-alert-circle-o"></i> You have already submit the file</span>
                                        </div>
                                    @elseif($datePaper <= $date)
                                        <div class="alert alert-warning alert-style-1">
                                            <i class="zmdi zmdi-alert-circle-o"></i> The deadline of submit paper is closed</span>
                                        </div>
                                    @endif
                                @endif
                                <form action="{{route('upload.paper')}}" method="POST" enctype="multipart/form-data" class="pt-20 pr-20">
                                    @csrf
                                    {{-- <input type="hidden" name="id_user" value="{{Auth::user()->id}}"> --}}
                                    <div class="form-group">
                                        <label for="">File</label>
                                        <input type="file" name="file" class="form-control" accept="application/pdf" required>
                                    </div>
                                    <span class="help-block">
                                        *Only Accept .pdf file<br>
                                        *The file may not be greater than 5 MB
                                    </span>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-anim txt-white mt-20 pl-40 pr-40 mb-10" @if(!(empty($checkPaper))) @if(!(empty($checkPaper->file)) || $datePaper <= $date) disabled @endif @endif><i class="fa fa-sign-out"></i><span class="btn-text"><strong>UPLOAD</strong></span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endif


        <!-- Modul Edit Abstract -->
        @if(!(empty($checkPaper)))
            <div class="col-md-12 mb-30">
                <div class="panel panel-primary card-view">
                    <div class="panel-heading bg-grad-info">
                        <div class="pull-left">
                            <h6 class="panel-title txt-light">Edit Abstract</h6>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            @if($dateAbstract <= $date)
                                <div class="alert alert-warning alert-style-1">
                                    <i class="zmdi zmdi-alert-circle-o"></i> The deadline of submit paper is closed</span>
                                </div>
                            @endif
                            <form action="{{route('edit.abstract')}}" method="POST" class="pt-20 pr-20">
                                @csrf
                                <input type="hidden" name="id" value="{{$checkPaper->id}}">
                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input type="text" name="title" class="form-control" value="{{$checkPaper->title_paper}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Abstract</label>
                                    <textarea name="abstract" class="form-control">{{$checkPaper->abstract_paper}}</textarea>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-anim txt-white mt-20 pl-40 pr-40 mb-10" @if($dateAbstract <= $date) disabled @endif><i class="fa fa-sign-out"></i><span class="btn-text"><strong>EDIT</strong></span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <!-- Modul Submit Abstract -->
        <div class="col-md-12">
            <div class="panel panel-primary card-view">
                <div class="panel-heading bg-grad-primary">
                    <div class="pull-left">
                        <h6 class="panel-title txt-light">Submit Abstract</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        @if(!(empty($checkPaper)))
                            <div class="alert alert-warning alert-style-1">
                                <i class="zmdi zmdi-alert-circle-o"></i> You have already submit the abstract</span>
                            </div>

                        @elseif($dateAbstract <= $date)
                            <div class="alert alert-warning alert-style-1">
                                <i class="zmdi zmdi-alert-circle-o"></i> The deadline of submit abstract is closed</span>
                            </div>
                        @endif
                        <form action="{{route('upload.abstract')}}" method="POST" class="pt-20 pr-20">
                            @csrf
                            {{-- <input type="hidden" name="id_user" value="{{Auth::user()->id}}"> --}}
                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" name="title" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Abstract</label>
                                <textarea name="abstract" class="form-control"></textarea>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-anim txt-white mt-20 pl-40 pr-40 mb-10" @if(!(empty($checkPaper)) || $dateAbstract <= $date) disabled @endif><i class="fa fa-sign-out"></i><span class="btn-text"><strong>SUBMIT</strong></span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>





    </div>

    <div class="col-sm-4 col-xs-12">

        <div class="col-sm-12 col-xs-12">
            <div class="panel panel-default border-panel-reverse card-reverse card-view bg-grad-danger">
                <div class="panel-heading">
                    <div class="text-center">
                        <h6 class="panel-title txt-light">Upload Paper</h6>
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
                                    <p>Please upload your Paper after making a payment </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if(!(empty($checkPaper)))
            @if($checkPaper->approval == 1 && !(empty($checkPaper->file)))
                <div class="col-sm-12 col-xs-12">
                    <div class="panel panel-primary card-view mt-20 ">
                        <div class="panel-heading bg-grad-primary">
                            <div class="text-center">
                                <h6 class="panel-title txt-light">Upload Payment</h6>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                @if(!(empty($checkTransaction)))
                                    @if($checkTransaction->status == 1)
                                        <div class="alert alert-success alert-style-1">
                                            <i class="zmdi zmdi-check"></i> Your payment has been confirmed</span>
                                        </div>
                                    @elseif($datePaymentConference <= $date)
                                        <div class="alert alert-warning alert-style-1">
                                            <i class="zmdi zmdi-alert-circle-o"></i> The deadline of payment is closed</span>
                                        </div>

                                    @endif
                                @elseif($datePaymentConference <= $date)
                                    <div class="alert alert-warning alert-style-1">
                                        <i class="zmdi zmdi-alert-circle-o"></i> The deadline of payment is closed</span>
                                    </div>

                                @endif
                                <form action="{{route('upload.payment.conference')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    {{-- <input type="hidden" name="id_user" value="{{Auth::user()->id}}"> --}}
                                    <div class="form-group">
                                        <label for="">Image</label>
                                        <input type="file" name="image" class="form-control" required>
                                    </div>
                                    <span class="help-block">
                                        *Only Accept .jpg, .jpeg, .png file<br>
                                        *The file may not be greater than 5 MB
                                    </span>

                                    <div class="form-group">
                                        <label for="">Note (Optional)</label>
                                        <textarea name="note" class="form-control"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary" @if(!(empty($checkTransaction))) @if($checkTransaction->status == 1 || $datePaymentConference == $date) disabled @endif @elseif($datePaymentConference == $date) disabled @endif>Upload Payment</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endif
    </div>


@endif

@endsection
