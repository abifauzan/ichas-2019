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
    @if(!(empty($userTransactions)))
        <div class="panel panel-default border-panel card-view panel-refresh">
            <div class="refresh-container">
                <div class="la-anim-1"></div>
            </div>
            <div class="panel-heading">
                <div class="pull-left">
                    <h6 class="panel-title txt-dark">Approved Transaction</h6>
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
                            <table class="table table-hover table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Role</th>
                                        <th>Email</th>
                                        <th>Note</th>
                                        <th>Date Uploaded</th>
                                        <th>Image</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php($no=0)
                                    @foreach($userTransactions as $item)
                                    @php($no++)
                                    <tr>
                                        <td>{{$no}}</td>
                                        <td>{{$item->user->name}}</td>
                                        <td>{{$item->user->role->name}}</td>
                                        <td>{{$item->user->email}}</td>
                                        <td>
                                            @if(empty($item->note))
                                                -
                                            @else
                                                {{$item->note}}
                                            @endif
                                        </td>
                                        <td>{{$item->created_at}}</td>
                                        <td>
                                            <a class="image-popup-no-margins" href="{{asset($item->image)}}">
                                                <img src="{{asset($item->image)}}" width="80">
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <div class="ml-30">{{ $userTransactions->links() }}</div>
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

@section('style')
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <style>
        /* padding-bottom and top for image */
        .mfp-no-margins img.mfp-img {
            padding: 0;
        }
        /* position of shadow behind the image */
        .mfp-no-margins .mfp-figure:after {
            top: 0;
            bottom: 0;
        }
        /* padding for main container */
        .mfp-no-margins .mfp-container {
            padding: 0;
        }


        /*

        for zoom animation
        uncomment this part if you haven't added this code anywhere else

        */


        .mfp-with-zoom .mfp-container,
        .mfp-with-zoom.mfp-bg {
            opacity: 0;
            -webkit-backface-visibility: hidden;
            -webkit-transition: all 0.3s ease-out;
            -moz-transition: all 0.3s ease-out;
            -o-transition: all 0.3s ease-out;
            transition: all 0.3s ease-out;
        }

        .mfp-with-zoom.mfp-ready .mfp-container {
                opacity: 1;
        }
        .mfp-with-zoom.mfp-ready.mfp-bg {
                opacity: 0.8;
        }

        .mfp-with-zoom.mfp-removing .mfp-container,
        .mfp-with-zoom.mfp-removing.mfp-bg {
            opacity: 0;
        }

    </style>
@endsection

@section('script')
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script>
    $('.image-popup-no-margins').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		closeBtnInside: false,
		fixedContentPos: true,
		mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
		image: {
			verticalFit: true
		},
		zoom: {
			enabled: true,
			duration: 300 // don't foget to change the duration also in CSS
		}
	});
    </script>
@endsection

