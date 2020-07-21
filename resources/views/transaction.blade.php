@extends('layouts.app')

@section('content')
@if(!((Auth::user()->id_role==3) || (Auth::user()->id_role == 2)))
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
        <div class="row">
        @if(!(count($datas) == 0))
            @if($datas[0]->status == 1)
                <div class="alert alert-success alert-style-1">
                    <i class="zmdi zmdi-check"></i> Your Payment Status : &nbsp;<span class="label label-success">Successfully Paid</span>
                </div>
            @elseif($datas[0]->status == 0)
                <div class="alert alert-warning alert-style-1">
                    <i class="zmdi zmdi-alert-circle-o"></i> Your Payment Status : &nbsp;<span class="label label-warning">Waiting for Admin Confirmation</span>
                </div>
            @endif
        @else
        <div class="alert alert-warning alert-style-1">
            <i class="zmdi zmdi-alert-circle-o"></i> Please upload your Receipt of Payment
        </div>
        @endif
        </div>

        @if(!(count($datas) == 0))
            <div class="panel panel-default border-panel card-view panel-refresh">
                <div class="refresh-container">
                    <div class="la-anim-1"></div>
                </div>
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">Your Payment History</h6>
                    </div>
                    <div class="pull-right">
                        <a href="#" class="pull-left inline-block refresh mr-15">
                            <i class="zmdi zmdi-replay"></i>
                        </a>
                        <a href="#" class="pull-left inline-block full-screen mr-15">
                            <i class="zmdi zmdi-fullscreen"></i>
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
                                            <th width="170px">Receipt of Payment</th>
                                            <th width="40%">Note</th>
                                            <th>Date Uploaded</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($datas as $data)
                                        <tr>
                                            <td>
                                                @php($image = $data->image)
                                                <a href="{{asset($image)}}" target="_blank">
                                                    <img src="{{asset($image)}}" style="width:170px">
                                                </a>
                                            </td>
                                            <td style="vertical-align: top">
                                            @if(empty($data->note))
                                                -
                                            @else
                                                {{$data->note}}
                                            @endif
                                            </td>
                                            <td style="vertical-align: top">{{$data->created_at}}</td>

                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

    </div>
    <div class="col-sm-4 col-xs-12">
        <div class="col-sm-12 col-xs-12">
            <div class="panel panel-default border-panel-reverse card-reverse card-view bg-grad-danger">
                <div class="panel-heading">
                    <div class="text-center">
                        <h6 class="panel-title txt-light">Upload Receipt of Payment</h6>
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
                                <?php
                                    if(count($datas) > 0) {
                                        if($datas[0]->status == 1) {
                                            $disabled = 'disabled';
                                        } else {
                                            $disabled = '';
                                        }

                                    } else {
                                        $disabled = '';
                                    }
                                ?>
                                <button class="btn btn-light btn-anim txt-dark mt-20 pl-40 pr-40 mb-10" data-toggle="modal" data-target="#uploadPayment" {{$disabled}}><i class="fa fa-sign-out"></i><span class="btn-text"><strong>UPLOAD</strong></span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

<div id="uploadPayment" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ route('upload.payment') }}">
        @csrf
        <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h5 class="modal-title" id="myLargeModalLabel">Upload Receipt of Payment</h5>
            </div>
            <div class="modal-body">
                <div class="form-wrap">
                    <div class="form-group">
                        <label for="paymentReceipt" class="col-sm-3 control-label">Payment Receipt*</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="icon-picture"></i></div>
                                <input type="file" name="image" class="form-control" id="paymentReceipt" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-sm-3 control-label">Note</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="icon-note"></i></div>
                                <textarea name="note" id="description" class="form-control" placeholder="Enter Note. (Optional)"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-sm-3 control-label"></label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <button type="submit" class="btn btn-info text-left mr-10">Upload</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger text-left" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
    </form>
</div>

@endif
@endsection

@section('script')
    @include('sweet::alert')
@endsection

