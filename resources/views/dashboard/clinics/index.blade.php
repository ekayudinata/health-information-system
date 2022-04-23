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
              <h6 class="m-0 font-weight-bold text-primary">Tabel Data {{ $title }}</h6>
          </div>
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                          <tr>
                              <th>#</th>
                              <th>Nama</th>
                              <th>Alamat</th>
                              <th>No Telp</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                      @foreach ($clinics as $clinic)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $clinic->name }}</td>
                            <td>{{ $clinic->address }}</td>
                            <td>{{ $clinic->phone }}</td>
                            <td>
                              <a href="/dashboard/clinics/{{ $clinic->id }}/edit" class="btn btn-warning btn-circle btn-sm"><i class="fas fa-pen"></i></a>
                              <form action="/dashboard/clinics/{{ $clinic->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger btn-circle btn-sm" onclick="return confirm('Anda yakin?')"><i class="fas fa-trash"></i></button>
                              </form>
                            </td>
                        </tr>
                      @endforeach
                      </tbody>
                  </table>
              </div>
              <!-- /.table -->
          </div>
          <!-- /.card-body -->
        </div>
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