
@extends('layouts.index')

@section('content')
    @if(session('msg'))
        <div class="alert alert-danger">
            {{ session ('msg') }}
        </div>
    @endif
<form class="col-12" method="post" action="{{ route('messages.store') }}">
    @csrf
   <div class="form-group">
        <label for="exampleFormControlTextarea1">Оставте свое сообщение</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
    </div>
    <div>
    <button type="submit" class="btn btn-primary mb-2">Отправить</button>
    </div>
</form>
@endsection
