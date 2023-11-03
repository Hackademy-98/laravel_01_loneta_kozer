<x-layout>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-8 mb-3">
                <form method="POST" action="{{route('send.email')}}">
                  @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input name="username" type="text" class="form-control" id="name" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="email" class="form-label">Email address</label>
                      <input name="email" type="email" class="form-control" id="email"aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                     
                      <label class="form-label" for="message">Message</label>
                      <textarea name="message" class="form-control"  id="message" cols="30" rows="10"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
  
</x-layout>