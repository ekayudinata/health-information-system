@extends('dashboard.layouts.main')

@section('container')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        {{-- <h1>{{ $title }}</h1> --}} <h1 class="h3 mb-2 text-gray-800">Tambah {{ $title }}</h1>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Edit Data {{ $title }}</h6>
          </div>
          
          <form method="post" action="/dashboard/polis/{{ $poli->id }}">
            @method('put')
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label>Nama Poli</label>
                <input type="text" class="form-control" placeholder="Input Nama Poli" name="name" required value="{{ $poli->name }}">
                @error('name')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Update Poli</button>
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