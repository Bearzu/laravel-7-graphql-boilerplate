@component('mail::message')
# Introduction

You have been invited to join {{ $organization->name }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
