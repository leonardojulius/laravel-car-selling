<h1>Hello From Laravel Course</h1>

@if (false)
    This will be displayed
@endif

@if (count($cars) > 1)
<p>There is more than 1 car</p>
@endif

@if(count($cars)>0)
<p>There is at least one car</p>
@else
<p>There are no cars</p>
@endif



@if(count($cars)>0)
<p>There is at least one car</p>
@elseif(count($cars) === 1)
<p>There is exactly one car</p>
@else
<p>There are no cars</p>
@endif


@unless(false)
<p>unless</p>
@endunless

@if(true)
<p>unless</p>
@endif

2:07
@isset($cars)
<p>isset</p>
@endisset

{{-- Directives -@isset, @empty --}}

@empty($cars)
<p>empty</p>
@endempty

{{--Directives @auth, @guest --}}

@auth
<p>User is authenticated</p>
@endauth

@guest
<p>User is guest</p>
@endguest


{{--Directives @switch --}}

@switch($country)
    @case('ph')
        <p>Ph</p>
        @break
    @case('uk')
        <p>United Kingdom</p>
        @break
    @case('us')
        <p>USA</p>
        @break
    @default
        <p>Unknown Country</p>
@endswitch

{{--Loop Directives--}}

@for($i = 0; $i<5; $i++)
    <p> {{$i + 1}}</p>
@endfor

@foreach($cars as $car)
    <p>Model : {{ $car->model }}</p>
@endforeach


@forelse($cars as $car)
   <p>Model: {{$car->model}}</p>
@empty
    <p>There are no cars</p>
@endforelese


{{--Directives - @while --}}

@while(false)

@endwhile

2:09 Directives - @continue

@foreach ([1,2,3,4,5]as $n)
@continue($n==2)
    <p>{{$n}}</p>
@endforeach
