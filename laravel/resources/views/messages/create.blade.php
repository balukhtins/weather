
@extends('layouts.index')

@section('content')
<form class="col-12" method="post" action="{{ route('messages.store') }}">
    @csrf
   <div class="form-group">
        <label for="exampleFormControlTextarea1">Enter your message</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
    </div>
    <div>
    <button type="submit" class="btn btn-primary mb-2">Send</button>
    </div>
</form>
@endsection
