@extends('layouts.app')

@section('content')
@if(!(Auth::user()->id_role==4) )
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
            @if(count($datas) == 0)
                <div class="alert alert-warning alert-style-1">
                    <i class="zmdi zmdi-alert-circle-o"></i> There is no data</span>
                </div>
            @endif
        </div>

        @if(count($datas) > 0)
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">All Papers</h6>
                    </div>

                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body row pa-0">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th style="width:45%">Title</th>
                                    <th style="width:20%">Author</th>
                                    <th>View File</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php($no=0)
                                @foreach($datas as $data)
                                @php($no++)
                                    <tr>
                                        <td>{{$no}}</td>
                                        <td>{{$data->title_paper}}</td>
                                        <td>{{$data->user->name}}</td>
                                        <td>
                                                <a href="{{url($data->file)}}" class="btn btn-primary btn-sm btn-rounded" data-toggle="tooltip" data-placement="top" title="View File"><span><i class="fa fa-search"></i></span></a>&nbsp;&nbsp;&nbsp;
                                        </td>
                                        <td>
                                            <span data-toggle="modal" data-target="#detail{{$no}}">
                                                <button class="btn btn-success btn-icon-anim btn-circle" data-toggle="tooltip" data-placement="top" title="Read Detail"><i class="fa fa-book"></i></button>
                                            </span>&nbsp;&nbsp;
                                        </td>
                                    </tr>
                                    <!-- Detail Modal -->
                                    <div id="detail{{$no}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h5 class="modal-title" id="myLargeModalLabel">Read Detail</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="col-lg-12 mb-20">
                                                        <div class="col-lg-2">Title</div>
                                                        <div class="col-lg-10">{{$data->title_paper}}</div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="col-lg-12 mb-20">
                                                        <div class="col-lg-2">Abstract</div>
                                                        <div class="col-lg-10">{{$data->abstract_paper}}</div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="col-lg-12 mb-20">
                                                        <div class="col-lg-2">Author</div>
                                                        <div class="col-lg-10">{{$data->user->name}}</div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="col-lg-12 mb-20">
                                                        <div class="col-lg-2">Email</div>
                                                        <div class="col-lg-10">{{$data->user->email}}</div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="col-lg-12 mb-20">
                                                        <div class="col-lg-2">Date Submit</div>
                                                        <div class="col-lg-10">{{$data->created_at}}</div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger text-left" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                @endforeach

                            </tbody>
                        </table>
                        {{$datas->links()}}
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


@section('script')
    @include('sweet::alert')
@endsection

