
@extends('layouts.index')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($messages as $message)
                <div class="container">
                    <fieldset>
                        @foreach($users as $user)
                            @if($user->id == $message->user_id)
                                <b>{{ $user->name }}</b>
                            @endif
                        @endforeach
                    <p>{{ $message->messages }}</p>
                    </fieldset>
                    <hr>
                </div>

            @endforeach

            {{--@foreach($users as $user)
                <div class="container">
                <h3>{{ $user->name }}</h3>
                @foreach($user->messages as $message)
                <div>{{ $message->messages }}</div>
                @endforeach
                </div>
            @endforeach--}}
        </div>
    </div>
@endsection

