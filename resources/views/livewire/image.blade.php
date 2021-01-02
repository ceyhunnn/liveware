<div>
    <section>
      <br>
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <div class="card">
              <div class="card-header">
                Photos
              </div>
              <div class="card-body">
                @if(session()->has('message'))
                    <div class="alert alert-success">{{session('message')}}</div>
                @endif
                <form wire:submit.prevent="uploadImage" id="photos-upload" enctype="multipart/form-data">

                  <div class="form-group">
                    <label for="photos">Photos</label>
                    <input class="form-control" type="file" required name="photos" wire:model="photos" multiple>
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
