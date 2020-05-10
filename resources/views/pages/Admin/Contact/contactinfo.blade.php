@extends('layouts.master1')
@section('content')

    <div>
    @if(count($contacts) > 0)
        @foreach ($contacts as $contact )
            <p>{{$contact->name}}<p>
            <p>{{$contact->email}}</p>
            <p>{{$contact->subject}}</p>
             <p>{{$contact->message}}</p>
        @endforeach
    @endif
        
        
    </div>

@endsection