<div class="col-12 col-md-4 my-3">
    <div class="card" style="width: 18rem;">
  <img src="{{$data["img"]}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"title={{$data['name']}}>{{$data["name"]}}</h5>
    <p class="card-text">{{$data["descripsion"]}}</p>
    <a href="{{route('show.'.$route,["name" =>$data["name"]])}}" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>