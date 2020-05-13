@component('mail::message')
# Welcome to Coding 11!

Vous vous êtes inscrit à notre newsletter! <br>

Dès qu'un nouvel article sera publié, vous serez notifiés.

{{-- Btn pour rediriger vers article --}}
@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{-- {{ config('app.name') }} --}}
#### La Team Coding11
@endcomponent
