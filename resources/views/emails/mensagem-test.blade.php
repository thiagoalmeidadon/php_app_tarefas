@component('mail::message')
# Introdução

Corpo mensagem

@component('mail::button', ['url' => ''])
Texto
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
