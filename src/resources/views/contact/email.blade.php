@component('mail::message')
# You've got Mail!

  **New Message**
  {{$name}} &lt;{{$email}}&gt;
   **Subject**
   {{$subject}}
   <br>
   {{$message}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
