<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="POST" action= "{{ route('store.serie')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="title" class="form-label">Title</label>
                      <input name="title" type="text" class="form-control" id="title">
                     </div>
                     <div class="mb-3">
                        <label for="year" class="form-label">Year</label>
                        <input name="year" type="number" class="form-control" id="year">
                       </div>
                    
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                      <textarea name="description" id="description" class="form-control" cols="30"></textarea>
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="file" name="img">

                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>