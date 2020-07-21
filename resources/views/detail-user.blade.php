@extends('layouts.app')

@section('content')
    @if(isset($searchSeminar) && count($searchSeminar) > 0)
    <!-- Find Pin User -->
    <div class="col-md-12" style="margin-top:40px;">
        <div class="card ">
            <div class="card-header bg-primary text-white">User Detail</div>
            <div class="card-body">
                Pin with {{ $searchSeminar->pin_entrance }} and user {{ $searchSeminar->user->name }}
            </div>
        </div>
    </div>
    @endif

    @if(isset($searchConference) && count($searchConference) > 0)
    <!-- Find Pin User -->
    <div class="col-md-12" style="margin-top:40px;">
        <div class="card ">
            <div class="card-header bg-primary text-white">User Detail</div>
            <div class="card-body">
                Pin with {{ $searchConference->pin_entrance }} and user {{ $searchConference->user->name }}
            </div>
        </div>
    </div>
    @endif
@endsection
