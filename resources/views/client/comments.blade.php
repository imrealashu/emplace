@extends('client.layout.app')

@section('content')
    @include('client.layout.sidebar')
    <div class="col-md-10 col-md-offset-2">
        <div class="container">
            <div class="component">
                <h2>Customer Comments</h2>
                <div class="row margintop20 no-padding">
                    @foreach($comments as $comment)
                    <div class="col-md-4 user-comment no-padding">
                        <div class="head-feedback">
                            <div class="col-md-4 no-padding text-center">
                                <i {!! feedback_smiley($comment->food) !!} ></i> <h5> Food </h5>
                            </div>
                            <div class="col-md-4 no-padding text-center">
                                <i {!! feedback_smiley($comment->service) !!}></i> <h5> Service </h5>
                            </div>
                            <div class="col-md-4 no-padding text-center">
                                <i {!! feedback_smiley($comment->ambiance) !!}></i> <h5> Ambience </h5>
                            </div>
                        </div>
                        <p>{{$comment->comment}} </p>
                    </div>
                    @endforeach
                </div>

            </div><!-- /container -->
        </div>
    </div>


@endsection