@component('mail::message')
# Weanio Packge Email

There is new querey from {{$name}}
<br>
Message:

{{$message}}


@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
Weanio
@endcomponent
