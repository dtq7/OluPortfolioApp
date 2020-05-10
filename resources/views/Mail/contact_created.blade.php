@component('mail::message')
# You Have a Message from {{$contact->name}}




{{$contact->message}}

@component('mail::button', ['url' => url('/contactinfo/' . $contact->id)])
        View Message
@endcomponent


@endcomponent
