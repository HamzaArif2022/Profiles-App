@props(['nom', 'table'])

<x-master title="test " >
    <h1>for test {{ $nom }} </h1>
    @foreach ($table as $tab)
        <h1>{{ $tab }}</h1>
    @endforeach
    <x-test :nom='$nom' />

</x-master>
