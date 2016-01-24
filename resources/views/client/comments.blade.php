@extends('client.layout.app')

@section('content')
    @include('client.layout.sidebar')
    <div class="col-md-10 col-md-offset-2">
        <div class="container">

            <div class="component">
                <h2>Customer Details</h2>
                <table>
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>No. of Visits</th>
                        <th>Total Spent</th>
                        <th> Send </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td class="user-name">{{$user['name']}}</td><td class="user-email">{{$user['email']}}</td>
                            <td class="user-mobile">{{$user['phone']}}</td><td class="user-visit">{{$user['total_visit']}}</td>
                            <td class="total-spent">{{$user['total_spent']}}</td>
                            <td class="send"><button class="btn btn-small btn-send">EMAIL</button><button class="btn btn-small btn-send">SMS</button></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div><!-- /container -->
        </div>
    </div>

@endsection