@extends('dashboard.layouts.main')

@section('container')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="h3 mb-2 text-gray-800">{{ $title }}</h1>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        {{-- @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success') }}
            </div>
        @endif --}}

        <div class="card shadow mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Ubah {{ $title }}</h6>
          </div>
          <form method="post" action="/dashboard/users/{{ $employee->id }}">
            @method('put')
            @csrf
            <div class="card-body">
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" placeholder="Nama User" name="name" required value="{{ old('name', $employee->name) }}">
                    @error('name')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                  
                  <div class="form-group">
                    <label>Alamat</label>
                    <input type="email" class="form-control" placeholder="Input Alamat" name="address" required value="{{ old('address', $employee->address) }}">
                    @error('address')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label>No Telp</label>
                    <input type="email" class="form-control" placeholder="Input No Telp" name="phone" required value="{{ old('phone', $employee->phone) }}">
                    @error('phone')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label>Posisi</label>
                    <select name="employeeposition_id" class="form-control">  
                        <option value="{{ $employee->employeeposition_id }}" selected>{{ $employee->employeeposition_id }}</option>
                        <option value="" disabled>------------</option>
                        <option value="Staf IT">Staf IT</option>
                        <option value="">option2</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Status Pekerjaan</label>
                    <select name="work_status" class="form-control">
                      <option value="{{ $employee->work_status }}" selected>{{ $employee->work_status }}</option>
                      <option value="" disabled>------------</option>
                      <option value="DW">DW</option>
                      <option value="">option2</option>
                      <option value="">option2</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender" value="L" required {{ old('gender', $employee->gender) == 'L'? 'checked' : ''}}>
                      <label class="form-check-label">Laki-Laki</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender" value="P" {{ old('gender', $employee->gender) == 'P'? 'checked' : ''}}>
                      <label class="form-check-label">Perempuan</label>
                    </div>
                    @error('gender')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>
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