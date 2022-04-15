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
                              <th>No. RM</th>
                              <th>Nama</th>
                              <th>Telepon</th>
                              <th>Alamat</th>
                              <th>Tgl. Lahir</th>
                              <th>Aksi</th>
                          </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td>U# 1874</td>
                            <td>SOLAGRACIA ROSMALINDA SARMATUA</td>
                            <td>0895343281065</td>
                            <td>JL. BY PASS NGURAH RAI</td>
                            <td>2000-11-11</td>
                            <td>
                              <a href="#" class="btn btn-warning btn-circle btn-sm"><i class="fas fa-pen"></i></a>
                              <a href="#" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                      </tbody>
                {{-- @foreach ($users as $user)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->is_admin == 1 ? 'Admin' : 'User' }}</td>
                  <td>
                      <a href="/dashboard/users/{{ $user->id }}/edit" class="badge bg-warning p-2"><i class="fas fa-pen"></i></a>
                      <form action="/dashboard/users/{{ $user->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0 p-2" onclick="return confirm('Anda yakin?')"><i class="fas fa-trash"></i></button>
                      </form>
                  </td>
                </tr>
                @endforeach --}}
            </table>
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