@component('mail::message')
# Introduction

The body of your message.
-one

-two

-three

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

@component('maill::panel', ['url' => ''])
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto et, temporibus dolor. Veritatis atque quas adipisci voluptatem porro voluptatum quae quo rem fuga. Totam voluptates asperiores porro voluptas odit, esse.
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
