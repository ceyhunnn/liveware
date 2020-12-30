<!-- Modal -->
<div wire:ignore.self class="modal fade" id="addStudentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Student</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>

          <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" type="text" required name="name" placehoder="Name" wire:model="name">
            @error('name')
              <p class="text-danger">{{$message}}</p>
            @enderror
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="email" required name="email" placehoder="Email" wire:model="email">
            @error('email')
              <p class="text-danger">{{$message}}</p>
            @enderror
          </div>

          <div class="form-group">
            <label for="phone">Phone</label>
            <input class="form-control" type="text" required name="phone" placehoder="Phone" wire:model="phone">
            @error('phone')
              <p class="text-danger">{{$message}}</p>
            @enderror
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary"  wire:click.prevent="store">Save changes</button>
      </div>
    </div>
  </div>
</div>
