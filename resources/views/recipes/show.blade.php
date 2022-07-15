<x-layout>
    <h2>{{$recipe->title}}</h2>

    <h4>Ingredients:</h4>
    <ul>
        @foreach ($recipe->ingredient as $ingredient)
        <li>{{$ingredient->name}}</li>
        @endforeach
    </ul>

    <h4>Instructions:</h4>
    <ol>
        @php
        $methods = $recipe->method->sortBy('step_number');
        @endphp

        @foreach ($methods as $method)
        <li>{{$method->instruction}} - {{$method->step_number}}</li>
        @endforeach
    </ol>

    <a href="/">Back</a>
</x-layout>