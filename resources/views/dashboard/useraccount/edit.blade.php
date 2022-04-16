@extends('dashboard.layouts.main')

@section('container')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        {{-- <h1>{{ $title }}</h1> --}} <h1 class="h3 mb-2 text-gray-800">Ubah Role User</h1>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-6">

        
        {{-- @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success') }}
            </div>
        @endif --}}

        <div class="card shadow mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Ubah data role user</h6>
          </div>
          {{-- <form method="post" action="/dashboard/users/{{ $user->id }}">
            @method('put')
            @csrf --}}
            <div class="card-body">
              <div class="form-group">
                <label>Nama User</label>
                <input type="text" class="form-control" placeholder="Nama User" name="name" required value="">
                {{-- @error('name')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror --}}
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Email" name="email" required value="">
                {{-- @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror --}}
              </div>
              <!-- radio -->
              <div class="form-group">
                <label>Role</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="is_admin" value="0" required >
                  <label class="form-check-label">User</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="is_admin" value="1" >
                  <label class="form-check-label">Admin</label>
                </div>
                {{-- @error('is_admin')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror --}}
              </div>
              <div class="form-group">
                <label>Pekerjaan</label>
                <select name="" class="form-control">
                    <option value="">option1</option>
                    <option value="">option2</option>
                </select>
             </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          {{-- </form> --}}
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection