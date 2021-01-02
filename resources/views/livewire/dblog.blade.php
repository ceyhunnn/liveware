<div>
    <section>
      <br>
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <div class="card">
              <div class="card-header">
                Dblog Add
              </div>
              <div class="card-body">
                @if(session()->has('message'))
                    <div class="alert alert-success">{{session('message')}}</div>
                @endif
                <form wire:submit.prevent="dblogadd" id="form-upload" enctype="multipart/form-data">

                  <div class="form-group">
                    <label for="title">Title</label>
                    <input class="form-control" type="text" required name="title" placehoder="Title" wire:model="title">
                    @error('title')
                      <p class="text-danger">{{$message}}</p>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="photo">Photo</label>
                    <input class="form-control" type="file" required name="photo" wire:model="photo">
                    @error('photo')
                      <p class="text-danger">{{$message}}</p>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control" required name="content" wire:model="content" ></textarea>
                    @error('content')
                      <p class="text-danger">{{$message}}</p>
                    @enderror
                  </div>

                  <button type="submit" class="btn btn-outline-info"><i class="fa fa-plus"></i> Add</button>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>
