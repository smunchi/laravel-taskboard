<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">@if(isset($title)){{$title}}@endif</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{route('admin-dashboard')}}">{{__('Home')}}</a></li>
                    <li><span>@if(isset($title)){{$title}}@endif</span></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6 clearfix">
            <div class="user-profile pull-right">
                <img class="avatar user-thumb" src="{{asset('assets/backend/images/author/avatar.png')}}" alt="avatar">
                <h4 class="user-name dropdown-toggle" data-toggle="dropdown">{{Auth::user()->first_name.' '.Auth::user()->last_name}} <i class="fa fa-angle-down"></i></h4>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">{{__('Log Out')}}</a>
                </div>
            </div>
        </div>
    </div>
</div>