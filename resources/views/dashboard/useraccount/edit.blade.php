
@extends('dashboard.layouts.main')

@section('container')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        {{-- <h1>{{ $title }}</h1> --}} <h1 class="h3 mb-2 text-gray-800">{{ $title }}</h1>
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
              <h6 class="m-0 font-weight-bold text-primary">{{ $title }}</h6>
          </div>
          <form method="post" action="/dashboard/useraccount/{{ $user->id }}">
            @method('put')
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label>Nama User</label>
                <input type="text" class="form-control" placeholder="Nama User" name="name" required value="{{ old('name', $user->name) }}">
                {{-- @error('name')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror --}}
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" placeholder="Email" name="email" required value="{{ old('email', $user->email) }}">
                {{-- @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror --}}
              </div>
              <!-- radio -->
              <div class="form-group">
                <label>Role</label>
                <select name="user_role_id" class="form-control">
                  <option value="">Pilih Role</option>
                    @foreach ($userroles as $userrole)
                    @if (old('user_role_id') == $userrole->id)
                  <option value="{{ $userrole->id }}" selected>{{ $userrole->role }}</option>
                    @else
                  <option value="{{ $userrole->id }}">{{ $userrole->role }}</option>
                    @endif
                    @endforeach
                </select>
                {{-- <div class="form-check">
                  <input class="form-check-input" type="radio" name="" value="0" required >
                  <label class="form-check-label">User</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="is_admin" value="1" >
                  <label class="form-check-label">Admin</label>
                </div> --}}
                {{-- @error('is_admin')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror --}}
              </div>
              <div class="form-group">
                <label>Pegawai</label>
                <select name="employee_id" class="form-control">
                  <option value="">Pilih Pegawai</option>
                    @foreach ($employees as $employee)
                    @if (old('employee_id') == $employee->id)
                  <option value="{{ $employee->id }}" selected>{{ $employee->name }}</option>
                    @else
                  <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                    @endif
                    @endforeach
                </select>
             </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
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