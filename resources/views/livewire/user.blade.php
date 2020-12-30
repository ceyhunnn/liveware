<div>
  <style>
    nav svg {
      height: 20px;
    }
  </style>
    <section>
      <br>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                </tr>
              </thead>
              <tbody>
                @foreach($data['users'] as $user)
                <tr>
                  <th scope="row">{{$loop->iteration}}</th>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
            {{$data['users']->links()}}
          </div>
        </div>
      </div>
    </section>
</div>
