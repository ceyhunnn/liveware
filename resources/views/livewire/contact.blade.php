<div>
    <section>
      <br>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                Contact
              </div>
              <div class="card-body">
                <form wire:submit.prevent="store">

                  <div class="form-group">
                    <label for="name">Username</label>
                    <input class="form-control" type="text" required name="username" placehoder="Username" wire:model="username">
                    @error('username')
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

                  <div class="form-group">
                    <label for="msg">Message</label>
                    <textarea name="msg" class="form-control" required placeholder="Your Message" wire:model="msg"></textarea>
                    @error('msg')
                      <p class="text-danger">{{$message}}</p>
                    @enderror
                  </div>

                  <button type="submit" class="btn btn-outline-info">Send</button>

                </form>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <table class="table">
              @if(session()->has('success'))
                  <div class="alert alert-success">{{session('success')}}</div>
              @endif
              @if(session()->has('error'))
                <div class="alert alert-danger">{{session('error')}}</div>
              @endif
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Username</th>
                  <th scope="col">Email</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Message</th>
                </tr>
              </thead>
              <tbody>
                @foreach($data['messages'] as $message)
                <tr>
                  <th scope="row">{{$loop->iteration}}</th>
                  <td>{{$message->username}}</td>
                  <td>{{$message->email}}</td>
                  <td>{{$message->phone}}</td>
                  <td>{{substr($message->msg, 0, 10)}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
</div>
