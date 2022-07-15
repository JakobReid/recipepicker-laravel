<x-layout>
    @foreach ($recipes as $recipe)
    <x-recipe-card :recipe="$recipe" />
    @endforeach
</x-layout>