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

        <div class="col-sm-4 col-xs-12">
            <div class="col-sm-12 col-xs-12">
                <div class="panel panel-primary card-view">
                    <div class="panel-heading bg-grad-danger">
                        <div class="pull-left">
                            <h6 class="panel-title txt-light">Activate Modul E-Certificate</h6>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            @if($helper[0]->status == 0)
                                <div class="alert alert-info alert-style-1 mb-0">
                                    <i class="zmdi zmdi-info-outline"></i>Status : Inactive
                                </div>
                                <br>
                                <form action="{{route('registrant.ecertificate.activate')}}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-primary btn-anim txt-white pl-40 pr-40 "><i class="zmdi zmdi-check"></i><span class="btn-text"><strong>Activate</strong></span></button>
                                </form>
                            @elseif($helper[0]->status == 1)
                                <div class="alert alert-success alert-style-1 mb-0">
                                    <i class="zmdi zmdi-check"></i>Status : Active
                                </div>
                                <br>
                                <form action="{{route('registrant.ecertificate.inactivate')}}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-info btn-anim txt-white pl-40 pr-40 "><i class="zmdi zmdi-info-outline"></i><span class="btn-text"><strong>DeActivate</strong></span></button>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-4 col-xs-12">
            <div class="col-sm-12 col-xs-12">
                <div class="panel panel-primary card-view">
                    <div class="panel-heading bg-grad-danger">
                        <div class="pull-left">
                            <h6 class="panel-title txt-light">Deadline Payment of Seminar</h6>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <form action="{{route('deadline')}}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{$helper[1]->id}}">
                                <div class="form-group">
                                    <input type="date" name="date" class="form-control" placeholder="Input Date" value="{{$helper[1]->date_end}}" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-anim txt-white pl-40 pr-40 mt-15"><i class="zmdi zmdi-check"></i><span class="btn-text"><strong>Edit</strong></span></button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-4 col-xs-12">
            <div class="col-sm-12 col-xs-12">
                <div class="panel panel-primary card-view">
                    <div class="panel-heading bg-grad-danger">
                        <div class="pull-left">
                            <h6 class="panel-title txt-light">Deadline Payment of Conference</h6>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <form action="{{route('deadline')}}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{$helper[4]->id}}">
                                <div class="form-group">
                                    <input type="date" name="date" class="form-control" placeholder="Input Date" value="{{$helper[4]->date_end}}" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-anim txt-white pl-40 pr-40 mt-15"><i class="zmdi zmdi-check"></i><span class="btn-text"><strong>Edit</strong></span></button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4 col-xs-12 mt-20">
            <div class="col-sm-12 col-xs-12">
                <div class="panel panel-primary card-view">
                    <div class="panel-heading bg-grad-danger">
                        <div class="pull-left">
                            <h6 class="panel-title txt-light">Deadline Submit Abstract</h6>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <form action="{{route('deadline')}}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{$helper[2]->id}}">
                                <div class="form-group">
                                    <input type="date" name="date" class="form-control" placeholder="Input Date" value="{{$helper[2]->date_end}}" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-anim txt-white pl-40 pr-40 mt-15"><i class="zmdi zmdi-check"></i><span class="btn-text"><strong>Edit</strong></span></button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-4 col-xs-12 mt-20">
            <div class="col-sm-12 col-xs-12">
                <div class="panel panel-primary card-view">
                    <div class="panel-heading bg-grad-danger">
                        <div class="pull-left">
                            <h6 class="panel-title txt-light">Deadline Submit Paper</h6>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <form action="{{route('deadline')}}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{$helper[3]->id}}">
                                <div class="form-group">
                                    <input type="date" name="date" class="form-control" placeholder="Input Date" value="{{$helper[3]->date_end}}" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-anim txt-white pl-40 pr-40 mt-15"><i class="zmdi zmdi-check"></i><span class="btn-text"><strong>Edit</strong></span></button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-4 col-xs-12 mt-20">
            <div class="col-sm-12 col-xs-12">
                <div class="panel panel-primary card-view">
                    <div class="panel-heading bg-grad-danger">
                        <div class="pull-left">
                            <h6 class="panel-title txt-light">Deadline Early Bird Payment</h6>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <form action="{{route('deadline')}}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{$helper[5]->id}}">
                                <div class="form-group">
                                    <input type="date" name="date" class="form-control" placeholder="Input Date" value="{{$helper[5]->date_end}}" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-anim txt-white pl-40 pr-40 mt-15"><i class="zmdi zmdi-check"></i><span class="btn-text"><strong>Edit</strong></span></button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @endif
@endsection
