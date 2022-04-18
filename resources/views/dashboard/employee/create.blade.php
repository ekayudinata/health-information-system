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
        <div class="card shadow mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah {{ $title }}</h6>
          </div>
          <form method="post" action="/dashboard/employee">
            @csrf
            <div class="card-body">
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" placeholder="Nama User" name="name" @error('name') is-invalid @enderror required value="{{ old('name') }}">
                    @error('name')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <input type="address" class="form-control" placeholder="Input Alamat" name="address" @error('address') is-invalid @enderror required value="{{ old('address') }}">
                    @error('address')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label>No Telp</label>
                    <input type="phone" class="form-control" placeholder="Input No Telp" name="phone" @error('phone') is-invalid @enderror required value="{{ old('phone') }}">
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
                      <option value="">Pilih Posisi</option>
                        @foreach ($employeepositions as $employeeposition)
                        @if (old('employeeposition_id') == $employeeposition->id)
                      <option value="{{ $employeeposition->id }}" selected>{{ $employeeposition->name_position }}</option>
                        @else
                      <option value="{{ $employeeposition->id }}">{{ $employeeposition->name_position }}</option>
                        @endif
                        @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Status Pekerjaan</label>
                    <select name="work_status" class="form-control">
                      <option value="DW">DW</option>
                      <option value="Trainning">Trainning</option>
                      <option value="Kontrak">Kontrak</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender" value="L" required {{ old('gender') == 'L'? 'checked' : ''}}>
                      <label class="form-check-label">Laki-Laki</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender" value="P" {{ old('gender') == 'P'? 'checked' : ''}}>
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