@extends('dashboard.layouts.main')

@section('container')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        {{-- <h1>{{ $title }}</h1> --}} <h1 class="h3 mb-2 text-gray-800">Ubah {{ $title }}</h1>
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
              <h6 class="m-0 font-weight-bold text-primary">Ubah Data {{ $title }}</h6>
          </div>
          <form method="post" action="/dashboard/useraccount">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label>Nama Poli</label>
                <input type="text" class="form-control" placeholder="Input Nama Poli" name="name" required value="">
                {{-- @error('name')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror --}}
              </div>
              <div class="form-group">
                <label>Nama Dokter</label>
                <select name="employee_id" class="form-control">
                  <option value="">Pilih Dokter</option>
                    {{-- @foreach ($employees as $employee)
                    @if (old('employee_id') == $employee->id)
                  <option value="{{ $employee->id }}" selected>{{ $employee->name }}</option>
                    @else
                  <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                    @endif
                    @endforeach --}}
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