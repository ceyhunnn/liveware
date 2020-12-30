<div class="blog">
  <h1>Blah DBlog</h1>
  <form action="" method="post">
    <label for="">Username</label><br>
    <input type="text" wire:model="name" value=""><br>
    <label for="">Message</label><br>
    <textarea name="name" wire:model="message" rows="8" cols="80"></textarea><br>
    <label for="">Status</label><br>
    Single<input type="radio" wire:model="status" value="Single">
    Married <input type="radio" wire:model="status" value="Married"><br>
    <label for="">Color</label><br>
    Red <input type="checkbox" wire:model="colors" name="" value="Red">
    Blue <input type="checkbox" wire:model="colors" name="" value="Blue">
    Orange <input type="checkbox" wire:model="colors" name="" value="Orange"><br>
    <label for="">Favorite Company</label><br>
    <select wire:model="company">
      <option value="">Select</option>
      <option value="Apple">Apple</option>
      <option value="Huawei">Huawei</option>
      <option value="Samsung">Samsung</option>
    </select>


  </form>
  <br>
  Username:: {{$name}} <br>
  Message:: {{$message}} <br>
  Status:: {{$status}} <br>
  Color::
   <ul>
      @foreach($colors as $color)
            <li>{{$color}}</li>
          @endforeach
   </ul>
   <br>
  Company:: {{$company}} <br>

</div>
<br>

<style>
  .blog {
    width: auto;
    height: auto;
    background-color: red;
    transition: 500ms;
  }
</style>
