<li>
    <a class="@if(Request::segment(1) == 'dashboard') {{'active'}} @else {{''}} @endif" href="{{route('home')}}"><div class="pull-left"><span class="right-nav-text">Dashboard</span></div><div class="clearfix"></div></a>
</li>
@if(Auth::user()->id_role == 1)

    <li>
        <a class="@if(Request::segment(1) == 'admin' && Request::segment(3) == 'seminar') {{'active'}} @else {{''}} @endif" href="{{route('registrant.seminar')}}"><div class="pull-left"><span class="right-nav-text">Registrant Seminar</span></div><div class="clearfix"></div></a>
    </li>
    <li>
        <a class="@if(Request::segment(1) == 'admin' && Request::segment(3) == 'conference') {{'active'}} @else {{''}} @endif" href="{{route('registrant.conference')}}"><div class="pull-left"><span class="right-nav-text">Registrant Conference</span></div><div class="clearfix"></div></a>
    </li>
    <li>
        <a class="@if(Request::segment(1) == 'admin' && Request::segment(2) == 'transaction') {{'active'}} @else {{''}} @endif" href="javascript:void(0);" data-toggle="collapse"><div class="pull-left"><i class="ti-dashboard mr-20"></i><span class="right-nav-text">Transaction</span></div><div class="pull-right"><i class="ti-angle-down"></i></div><div class="clearfix"></div></a>
        <ul id="dashboard_dr" class="collapse collapse-level-1">
            <li>
                <a class="@if(Request::segment(1) == 'admin' && Request::segment(2) == 'transaction' && Request::segment(3) == 'incoming') {{'active'}} @else {{''}} @endif" href="{{route('transaction.incoming')}}"><div class="pull-left"><span class="right-nav-text">Incoming Transaction</span></div><div class="clearfix"></div></a>
            </li>
            <li>
                <a class="@if(Request::segment(1) == 'admin' && Request::segment(2) == 'transaction' && Request::segment(3) == 'approved') {{'active'}} @else {{''}} @endif" href="{{route('transaction.approved')}}"><div class="pull-left"><span class="right-nav-text">Approved Transaction</span></div><div class="clearfix"></div></a>
            </li>
        </ul>
    </li>
    <li>
        <a class="@if(Request::segment(1) == 'admin' && Request::segment(2) == 'pin') {{'active'}} @else {{''}} @endif" href="{{route('pin')}}"><div class="pull-left"><span class="right-nav-text">Check Registrant Pin</span></div><div class="clearfix"></div></a>
    </li>
    <li>
        <a class="@if(Request::segment(1) == 'admin' && Request::segment(2) == 'setting') {{'active'}} @else {{''}} @endif" href="{{route('setting')}}"><div class="pull-left"><span class="right-nav-text">Setting</span></div><div class="clearfix"></div></a>
    </li>
    <li>
        <a class="@if(Request::segment(1) == 'admin' && Request::segment(2) == 'judges') {{'active'}} @else {{''}} @endif" href="{{route('app.judges')}}"><div class="pull-left"><span class="right-nav-text">The Judges</span></div><div class="clearfix"></div></a>
    </li>
{{-- @endif --}}
<!-- Registrant Conference -->
@elseif(Auth::user()->id_role == 2)
    <li>
        <a class="@if(Request::segment(1) == 'transaction') {{'active'}} @else {{''}} @endif" href="{{route('user.transaction')}}"><div class="pull-left"><span class="right-nav-text">Transaction</span></div><div class="clearfix"></div></a>
    </li>
    <li>
        <a class="@if(Request::segment(1) == 'e-certificate') {{'active'}} @else {{''}} @endif" href="{{route('user.certificate')}}"><div class="pull-left"><span class="right-nav-text">E-Certificate</span></div><div class="clearfix"></div></a>
    </li>

<!-- Registrant Call of Paper -->
@elseif(Auth::user()->id_role == 3)
    <li>
        <a class="@if(Request::segment(1) == 'paper') {{'active'}} @else {{''}} @endif" href="{{route('user.paper')}}"><div class="pull-left"><span class="right-nav-text">Submit Paper</span></div><div class="clearfix"></div></a>
    </li>
    <li>
        <a class="@if(Request::segment(1) == 'transaction') {{'active'}} @else {{''}} @endif" href="{{route('user.transaction')}}"><div class="pull-left"><span class="right-nav-text">Transaction</span></div><div class="clearfix"></div></a>
    </li>
    <li>
        <a class="@if(Request::segment(1) == 'e-certificate') {{'active'}} @else {{''}} @endif" href="{{route('user.certificate')}}"><div class="pull-left"><span class="right-nav-text">E-Certificate</span></div><div class="clearfix"></div></a>
    </li>


<!-- The Judge -->
@elseif(Auth::user()->id_role == 4)
    <li>
        <a class="@if(Request::segment(1) == 'judge' && Request::segment(2) == 'incoming' && Request::segment(3) == 'abstract') {{'active'}} @else {{''}} @endif" href="{{route('incoming.abstract')}}"><div class="pull-left"><span class="right-nav-text">Incoming Abstract</span></div><div class="clearfix"></div></a>
    </li>
    <li>
        <a class="@if(Request::segment(1) == 'judge' && Request::segment(2) == 'all' && Request::segment(3) == 'paper') {{'active'}} @else {{''}} @endif" href="{{route('all.paper')}}"><div class="pull-left"><span class="right-nav-text">All Paper</span></div><div class="clearfix"></div></a>
    </li>
@endif
{{--
<li>
    <a class="@if(Request::segment(2) == 'faq' ) {{'active'}} @else {{''}} @endif" href="{{route('faq')}}"><div class="pull-left"><span class="right-nav-text">About Event</span></div><div class="clearfix"></div></a>
</li> --}}
