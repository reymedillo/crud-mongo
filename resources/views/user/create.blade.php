<form method="post" action="{{route('user.register')}}">
<div class="form-group">
  <label for="email">Email address</label>
  <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
  @if($errors->has('email'))
  {{$errors->first('email')}}
  @endif
</div>
<div class="form-group">
  <label for="username">User Name</label>
  <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
  @if($errors->has('username'))
  {{$errors->first('username')}}
  @endif
</div>
<div class="form-group">
  <label for="password">Password</label>
  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
  @if($errors->has('password'))
  {{$errors->first('password')}}
  @endif
</div>
<div class="form-group">
  <label for="repassword">Retype Password</label>
  <input type="password" class="form-control" id="repassword" name="repassword" placeholder="Retype Password">
  @if($errors->has('repassword'))
  {{$errors->first('repassword')}}
  @endif
</div>
<input type="hidden" name="_token" value="{{csrf_token()}}">
<button type="submit" class="btn btn-info">Submit</button>
</form>