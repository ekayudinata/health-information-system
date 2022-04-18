@extends('dashboard.layouts.main')

@section('container')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        {{-- <h1>{{ $title }}</h1> --}} <h1 class="h3 mb-2 text-gray-800">Tambah Pekerjaan</h1>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah data Pekerjaan</h6>
          </div>
          <form method="post" action="/dashboard/employee">
            @csrf
            <div class="card-body">
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" placeholder="Nama User" name="name" required value="">
                    {{-- @error('name')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror --}}
                  </div>
                  
                  <div class="form-group">
                    <label>Alamat</label>
                    <input type="email" class="form-control" placeholder="Input Alamat" name="" required value="">
                    {{-- @error('email')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror --}}
                  </div>
                  <div class="form-group">
                    <label>No Telp</label>
                    <input type="email" class="form-control" placeholder="Input No Telp" name="" required value="">
                    {{-- @error('email')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror --}}
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label>Posisi</label>
                    <select name="" class="form-control">
                        <option value="">Staf IT</option>
                        <option value="">option2</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Status Pekerjaan</label>
                    <select name="" class="form-control">
                      <option value="">DW</option>
                      <option value="">option2</option>
                      <option value="">option2</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="radio1" value="0" required >
                      <label class="form-check-label">Laki-Laki</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="radio1" value="1" >
                      <label class="form-check-label">Perempuan</label>
                    </div>
                    {{-- @error('is_admin')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror --}}
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