<x-layout title="Films">
    <h1 class="text-danger">Film Interessanti da Vedere!</h1>
    <h2 class="text-danger">ATENTTI suscita emozioni POSITIVI</h2>
   

<div class="container">
  <div class="row">
  @foreach($films as $film)
   {{-- <x-card title="{{$film['data']}}" path="{{$film['img']}}"/> --}}

   <x-card :data="$film" route="films"/>
    @endforeach
  </div>
</div>

</x-layout>
