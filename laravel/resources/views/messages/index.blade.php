
@extends('layouts.index')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($messages as $message)
                <div class="container">
                    <fieldset>
                    <b>{{ $message->user->name }}</b>
                    <p>{{ $message->messages }}</p>
                    </fieldset>
                    <hr>
                </div>
            @endforeach
        </div>
        {{ $messages->links() }}
    </div>
@endsection

