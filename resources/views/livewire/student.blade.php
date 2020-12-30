<div>
  <style>
    nav svg {
      height: 20px;
    }
  </style>
  @include('livewire.create')
    <section>
      <br>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              @if(session()->has('message'))
                  <div class="alert alert-success">{{session('message')}}</div>
              @endif
              <div class="card-header">
                Students
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addStudentModal">
                  Add Student
                </button>
              </div>
              <div class="card-body">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Phone</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data['students'] as $student)
                    <tr>
                      <th scope="row">{{$loop->iteration}}</th>
                      <td>{{$student->name}}</td>
                      <td>{{$student->email}}</td>
                      <td>{{$student->phone}}</td>
                      <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#studentDeleted"><i class="fa fa-trash"></i></button>

                        <!-- Modal -->
                        <div class="modal fade" id="studentDeleted" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title" id="exampleModalLabel">Are You sure for Deleting This Item?</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <p class="alert alert-danger">This action cannot be undone !!!</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-danger" wire:click.prevent="delete({{$student->id}})">Save changes</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                {{$data['students']->links()}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>
