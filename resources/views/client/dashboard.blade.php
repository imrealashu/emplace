@extends('client.layout.app')
@section('content')
    <div class="col-md-2 menu-wrap">
        <nav class="menu">
            <div class="brand-logo text-center">
                <img src="{{URL::asset('client/thumb_logo.jpg')}}" class="logo">
                <h4 class="brand-name text-wh"> {{$branch_data->branch_name}}</h4>
            </div>
            <div class="icon-list">
                <a href="index.html"><i class="flaticon-house266"></i><span>Dashboard</span></a>
                <a href="comments.html"><i class="flaticon-comments16"></i><span>Comments</span></a>
                <a href="customers.html"><i class="flaticon-business134"></i><span>Customers</span></a>
                <a href="promotion.html"><i class="flaticon-analytics2"></i><span>Promote</span></a>
                <a href="#"><i class="flaticon-money57"></i><span>Upgrade</span></a>
                <a href="#"><i class="flaticon-write57"></i><span>Contact Us</span></a>
                <a href="#"><i class="flaticon-agenda35"></i><span>Settings</span></a>
                <a href="{{url('logout')}}"><i class="flaticon-write57"></i><span>Logout</span></a>
            </div>
        </nav>
    </div>
    <div class="col-md-10 col-md-offset-2">
        <div class="container">

            <div class="component">
                <h2>Total Visits</h2>
                <div class="col-md-2 col-md-offset-3 text-center">
                    <div class="radial-progress" data-score="5">
                        <div class="circle">
                            <div class="mask full">
                                <div class="fill fill-blue"></div>
                            </div>
                            <div class="mask half">
                                <div class="fill fill-blue"></div>
                                <div class="fill fill-blue fix"></div>
                            </div>
                        </div>
                        <div class="inset"><span class='big'>{{$total_visit}}</span></div>
                    </div>
                    <div class="visit text-center"> Visits </div>
                </div>
                <div class="col-md-2 col-md-offset-2 text-center">
                    <div class="radial-progress" data-score="5">
                        <div class="circle">
                            <div class="mask full">
                                <div class="fill fill-green"></div>
                            </div>
                            <div class="mask half">
                                <div class="fill fill-green"></div>
                                <div class="fill fill-green fix"></div>
                            </div>
                        </div>
                        <div class="inset"><span class='big'>{{$returning_user}}</span></div>
                    </div>
                    <div class="visit text-center"> Repeating Customer </div>
                </div>
            </div>
            <div class="component">
                <h2>Feedback Survey</h2>
                <div class="overall-feed">
                    <div class="col-md-2 col-md-offset-1 text-center margin20">
                        <div class="radial-progress" data-score="3">
                            <div class="circle">
                                <div class="mask full">
                                    <div class="fill fill-red"></div>
                                </div>
                                <div class="mask half">
                                    <div class="fill fill-red"></div>
                                    <div class="fill fil-red fix"></div>
                                </div>
                            </div>
                            <div class="inset"><span class='big'>{{printf('%.1f',$average_rating->food/10)}}</span> / 10</div>
                        </div>
                        <div class="visit text-center"> Food </div>
                    </div>
                    <div class="col-md-2 col-md-offset-2 text-center margin20">
                        <div class="radial-progress" data-score="4">
                            <div class="circle">
                                <div class="mask full">
                                    <div class="fill fill-blue"></div>
                                </div>
                                <div class="mask half">
                                    <div class="fill fill-blue"></div>
                                    <div class="fill fill-blue fix"></div>
                                </div>
                            </div>
                            <div class="inset"><span class='big'>{{printf('%.1f',$average_rating->service/10)}}</span> / 10</div>
                        </div>
                        <div class="visit text-center"> Service </div>
                    </div>
                    <div class="col-md-2 col-md-offset-2 text-center margin20">
                        <div class="radial-progress" data-score="4.6">
                            <div class="circle">
                                <div class="mask full">
                                    <div class="fill fill-green"></div>
                                </div>
                                <div class="mask half">
                                    <div class="fill fill-green"></div>
                                    <div class="fill fill-green fix"></div>
                                </div>
                            </div>
                            <div class="inset"><span class='big'>{{printf('%.1f',$average_rating->ambiance/10)}}</span> / 10</div>
                        </div>
                        <div class="visit text-center"> Ambience </div>
                    </div>
                </div>
                <table class="feedback shadow">
                    <thead>
                    <tr>
                        <th><h4> Service </h4></th>
                        <th><i class="flaticon-smiley10"></i><h4> Awesome </h4></th>
                        <th><i class="flaticon-emoticon82"></i><h4> Good </h4></th>
                        <th><i class="flaticon-emoticon11"></i><h4> Average </h4></th>
                        <th><i class="flaticon-emoticon148"></i><h4> Bad </h4></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th>
                            <i class="flaticon-coffee26"></i>
                            <div class="visit"> Food </div>
                        </th>
                        <td>
                            <div class="radial-progress-small" data-score="5">
                                <div class="circle">
                                    <div class="mask full">
                                        <div class="fill fill-blue"></div>
                                    </div>
                                    <div class="mask half">
                                        <div class="fill fill-blue"></div>
                                        <div class="fill fill-blue fix"></div>
                                    </div>
                                </div>
                                <div class="inset"><span class='big'>{{$awesome_food}}</span></div>
                            </div>
                        </td>

                        <td>
                            <div class="radial-progress-small" data-score="1.8">
                                <div class="circle">
                                    <div class="mask full">
                                        <div class="fill fill-green"></div>
                                    </div>
                                    <div class="mask half">
                                        <div class="fill fill-green"></div>
                                        <div class="fill fill-green fix"></div>
                                    </div>
                                </div>
                                <div class="inset"><span class='big'>{{$good_food}}</span></div>
                            </div>
                        </td>
                        <td>
                            <div class="radial-progress-small" data-score="0.9">
                                <div class="circle">
                                    <div class="mask full">
                                        <div class="fill fill-yellow"></div>
                                    </div>
                                    <div class="mask half">
                                        <div class="fill fill-yellow"></div>
                                        <div class="fill fill-yellow fix"></div>
                                    </div>
                                </div>
                                <div class="inset"><span class='big'>{{$average_food}}</span></div>
                            </div>
                        </td>
                        <td>
                            <div class="radial-progress-small" data-score="0.4">
                                <div class="circle">
                                    <div class="mask full">
                                        <div class="fill fill-red"></div>
                                    </div>
                                    <div class="mask half">
                                        <div class="fill fill-red"></div>
                                        <div class="fill fill-red fix"></div>
                                    </div>
                                </div>
                                <div class="inset"><span class='big'>{{$bad_food}}</span></div>
                            </div>
                        </td>

                    </tr>
                    <tr>
                        <th>
                            <i class="flaticon-covered16"></i>
                            <div class="visit"> Service </div>
                        </th>
                        <td>
                            <div class="radial-progress-small" data-score="0.6">
                                <div class="circle">
                                    <div class="mask full">
                                        <div class="fill fill-blue"></div>
                                    </div>
                                    <div class="mask half">
                                        <div class="fill fill-blue"></div>
                                        <div class="fill fill-blue fix"></div>
                                    </div>
                                </div>
                                <div class="inset"><span class='big'>{{$awesome_service}}</span></div>
                            </div>
                        </td>
                        <td>
                            <div class="radial-progress-small" data-score="4.1">
                                <div class="circle">
                                    <div class="mask full">
                                        <div class="fill fill-green"></div>
                                    </div>
                                    <div class="mask half">
                                        <div class="fill fill-green"></div>
                                        <div class="fill fill-green fix"></div>
                                    </div>
                                </div>
                                <div class="inset"><span class='big'>{{$good_service}}</span></div>
                            </div>
                        </td>
                        <td>
                            <div class="radial-progress-small" data-score="1.3">
                                <div class="circle">
                                    <div class="mask full">
                                        <div class="fill fill-yellow"></div>
                                    </div>
                                    <div class="mask half">
                                        <div class="fill fill-yellow"></div>
                                        <div class="fill fill-yellow fix"></div>
                                    </div>
                                </div>
                                <div class="inset"><span class='big'>{{$average_service}}</span></div>
                            </div>
                        </td>
                        <td>
                            <div class="radial-progress-small" data-score="0.8">
                                <div class="circle">
                                    <div class="mask full">
                                        <div class="fill fill-red"></div>
                                    </div>
                                    <div class="mask half">
                                        <div class="fill fill-red"></div>
                                        <div class="fill fill-red fix"></div>
                                    </div>
                                </div>
                                <div class="inset"><span class='big'>{{$bad_service}}</span></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <i class="flaticon-five19"></i>
                            <div class="visit">Ambience</div>
                        </th>
                        <td>
                            <div class="radial-progress-small" data-score="5">
                                <div class="circle">
                                    <div class="mask full">
                                        <div class="fill"></div>
                                    </div>
                                    <div class="mask half">
                                        <div class="fill"></div>
                                        <div class="fill fix"></div>
                                    </div>
                                </div>
                                <div class="inset"><span class='big'>{{$awesome_ambiance}}</span></div>
                            </div>
                        </td>
                        <td>
                            <div class="radial-progress-small" data-score="1">
                                <div class="circle">
                                    <div class="mask full">
                                        <div class="fill"></div>
                                    </div>
                                    <div class="mask half">
                                        <div class="fill"></div>
                                        <div class="fill fix"></div>
                                    </div>
                                </div>
                                <div class="inset"><span class='big'>{{$good_ambiance}}</span></div>
                            </div>
                        </td>
                        <td>
                            <div class="radial-progress-small" data-score="1">
                                <div class="circle">
                                    <div class="mask full">
                                        <div class="fill"></div>
                                    </div>
                                    <div class="mask half">
                                        <div class="fill"></div>
                                        <div class="fill fix"></div>
                                    </div>
                                </div>
                                <div class="inset"><span class='big'>{{$good_ambiance}}</span></div>
                            </div>
                        </td>
                        <td>
                            <div class="radial-progress-small" data-score="1">
                                <div class="circle">
                                    <div class="mask full">
                                        <div class="fill"></div>
                                    </div>
                                    <div class="mask half">
                                        <div class="fill"></div>
                                        <div class="fill fix"></div>
                                    </div>
                                </div>
                                <div class="inset"><span class='big'>{{$bad_ambiance}}</span></div>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection