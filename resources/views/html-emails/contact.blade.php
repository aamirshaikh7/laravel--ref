@component ('mail::message')
# Access the Latest Course Now !

[Laravel-8]({{ $course }})

@component ('mail::button', ['url' => 'https://more-course.com'])
    Access More
@endcomponent

Thanks,<br>
{{ config('app.name') }}

@endcomponent