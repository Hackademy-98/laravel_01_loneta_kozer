<div class="col-12 col-md-4 my-3">
    <div class="card" style="width: 18rem;">
  <img src="{{Storage::url($data->img)}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"title={{$data->title}}>{{$data->title}}</h5>
    {{-- <p class="card-text">{{$data["descripsion"]}}</p> --}}
    <a href="{{route('show.'.$route,["id" =>$data->id])}}" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>