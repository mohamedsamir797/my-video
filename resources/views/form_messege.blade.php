<form action="{{ route('form.messege') }}" method="post">
 @csrf
  <div class="field half first">
    <label for="name">Name</label>
    <input name="name" id="name" type="text" placeholder="Name">
    @error('name')
    <p style="color:white;font-size:20px;">{{ $errors->first('name')}}</p>
    @enderror
  </div>
  <div class="field half">
    <label for="email">Email</label>
    <input name="email" id="email" type="email" placeholder="Email">
    @error('email')
    <p style="color:white;font-size:20px;">{{ $errors->first('email')}}</p>
    @enderror
  </div>
  <div class="field">
    <label for="message">Message</label>
    <textarea name="messege" id="message" rows="6" placeholder="Message"></textarea>
    @error('messege')
    <p style="color:white;font-size:20px;">{{ $errors->first('messege')}}</p>
    @enderror
  </div>
  <ul class="actions">
    <li><input value="Send Message" class="button alt" type="submit"></li>
  </ul>
</form>
