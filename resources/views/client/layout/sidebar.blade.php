<div class="col-md-2 menu-wrap">
    <nav class="menu">
        <div class="brand-logo text-center">
            <img src="{{URL::asset('client/thumb_logo.jpg')}}" class="logo">
            <h4 class="brand-name text-wh"> {{$branch_data->branch_name}}</h4>
        </div>
        <div class="icon-list">
            <a href="{{action('DashboardController@index')}}"><i class="flaticon-house266"></i><span>Dashboard</span></a>
            <a href="{{action('DashboardController@comments')}}"><i class="flaticon-comments16"></i><span>Comments</span></a>
            <a href="{{action('DashboardController@customers')}}"><i class="flaticon-business134"></i><span>Customers</span></a>
            <a href="promotion.html"><i class="flaticon-analytics2"></i><span>Promote</span></a>
            <a href="#"><i class="flaticon-money57"></i><span>Upgrade</span></a>
            <a href="#"><i class="flaticon-write57"></i><span>Contact Us</span></a>
            <a href="#"><i class="flaticon-agenda35"></i><span>Settings</span></a>
            <a href="{{url('logout')}}"><i class="flaticon-write57"></i><span>Logout</span></a>
        </div>
    </nav>
</div>