<x-layout title="{{$serie['name']}}">
    <h1>Le Mie Serie Preferite !</h1>
    <h2>Pagina 1</h2>
   
  
<div class="conatainer">
    <div class="row">
        <div class="col-12 my-0">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="{{$serie['img']}}" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body d-flex flex-column justify-content-between">
                      <h5 class="card-title">{{$serie['name']}}</h5>
                      <p class="card-text">{{$serie['descripsion']}}</p>
                      <p class="card-text"><small class="text-body-secondary">{{$serie['year']}}</small></p>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>

</x-layout>