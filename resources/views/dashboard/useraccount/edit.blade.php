
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
      <div class="col-md-6">

        
        {{-- @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success') }}
            </div>
        @endif --}}

        <div class="card shadow mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Form {{ $title }}</h6>
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
                    @foreach ($userroles as $userrole)
                    @if (old('user_role_id', $user->user_role_id) == $userrole->id)
                  <option value="{{ $userrole->id }}" selected>{{ $userrole->role }}</option>
                    @else
                  <option value="{{ $userrole->id }}">{{ $userrole->role }}</option>
                    @endif
                    @endforeach
                </select>

                {{-- <select class="form-control" name="status">
                  <option value="{{ $candidate->status }}" selected>{{ $candidate->status }}</option>
                  <option value="" disabled>------------</option>
                  <option value="Belum Diproses">Belum Diproses</option>
                  <option value="Screening">Screening</option>
                  <option value="Interview">Interview</option>
                  <option value="Interview Lanjutan">Interview Lanjutan</option>
                  <option value="Diterima">Diterima</option>
                  <option value="Ditolak">Ditolak</option>
                </select> --}}

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
                    @foreach ($employees as $employee)
                    @if (old('employee_id', $user->employee_id) == $employee->id)
                  <option value="{{ $employee->id }}" selected>{{ $employee->name }}</option>
                    @else
                  <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                    @endif
                    @endforeach
                </select>
             </div>
             <div class="form-group">
              <label>Lokasi Standbay</label>
              <select name="clinic_id" class="form-control">
                <option value="">Pilih Lokasi Standbay [get data clinic]</option>
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