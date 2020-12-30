<div class="post">
  <br>
  <textarea wire:keydown.enter="message($event.target.value)"></textarea>
  <br>
  <form wire:submit.prevent="sum">
    <input type="number" name="num1" wire:model="num1" placeholder="Number 1"><br>
    <input type="number" name="num2" wire:model="num2" placeholder="Number 2"><br>
    <button type="submit" name="button">Submit</button>
  </form>
  <br>
  Sum :: {{$sum}} <br>
  Meessage :: {{$message}} <br>
</div>

<style>
  .post {
    width: auto;
    height: auto;
    background-color: red;
    transition: 500ms;
  }
  .post:hover {
    background-color: yellow;
    color: #000;
    transition: 500ms;
  }
</style>
