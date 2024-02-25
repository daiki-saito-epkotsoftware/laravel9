<x-app>
  <x-slot name="title">
    adminlogin
  </x-slot>

  <h1 class="text-2xl">web日報登録</h1>

  <form class="border rounded bg-white form-login" action="{{ url('admin/user_list')}}">
  {{ csrf_field() }}
  <h1 class="my-3">login</h1>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</x-app>

