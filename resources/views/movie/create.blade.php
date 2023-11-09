<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{ route('store.movie')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="title" class="form-label">Title</label>
                      <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ old('title')}}">
                      @error('title')
                      <p class="text-danger">{{ $message }}</p>
                      @enderror
                     </div>
                     <div class="mb-3">
                        <label for="year" class="form-label">Year</label>
                        <input name="year" type="number" class="form-control  @error('year') is-invalid @enderror" id="year" value="{{ old('year')}}">
                        @error('year')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                       </div>
                    
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                      <textarea name="description" id="description" class="form-control  @error('description') is-invalid @enderror" cols="30" {{ old('decsription')}}></textarea>
                      @error('description')
                      <p class="text-danger">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="mb-3">
                        <input class="form-control  @error('img') is-invalid @enderror" type="file" name="img">
                        @error('img')
                       <p class="text-danger">{{ $message }}</p> 
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>