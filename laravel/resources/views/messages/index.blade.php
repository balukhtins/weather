
@extends('layouts.index')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($messages as $message)
                <div class="container">
                    {{ $message->messages }}
                <hr>
                </div>

            @endforeach
        </div>
    </div>
@endsection
