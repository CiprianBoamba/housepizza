@extends('layouts.layout')

@section('content')
<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
          

            <div class=" mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                   <h1 class="underline text-gray-600">Pizzas List</h1>
                 
                </div>
                <div class="flex justify-center">
                 
                   
                <p>param-name:{{$name}}</p>
                <p>param-age:{{$age}}</p>
                </div>
              
                <div class="flex justify-center">
                <!-- @for($i=0 ;$i <= 5; $i++)
                <p>the value of i is {{$i}}</p>
                @endfor -->

                 @for($i=0 ; $i < count($pizzas); $i++)
                <p>type is: {{$pizzas[$i]['type']}} </p>
                @endfor

              
                </div>

                @foreach($pizzas as $pizza)
                <div>
                {{$loop-> index}} {{$pizza['type']}} - {{$pizza['base']}}
                @if($loop->first)
                <span>first in the loop</span>
                @endif
                @if($loop->last)
                <span>last in the loop</span>
                @endif
                 </div>
                @endforeach

               
            </div>
</div>

@endsection