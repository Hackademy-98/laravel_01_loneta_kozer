<x-layout title="Serie TV">
    <h1>Le Mie Serie Preferite !</h1>
 
<div class="container">
    <div class="row">
    @foreach($serieTV as $serie)
    <x-card :data="$serie" route="series"/>
@endforeach
    </div>
</div>



</x-layout>