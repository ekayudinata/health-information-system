@extends('dashboard.layouts.main')

@section('container')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        {{-- <h1>{{ $title }}</h1> --}} <h1 class="h3 mb-2 text-gray-800">Role User</h1>
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
              <h6 class="m-0 font-weight-bold text-primary">Tabel data role user</h6>
          </div>
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                          <tr>
                              <th>#</th>
                              <th>Nama</th>
                              <th>Email</th>
                              <th>Role</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td>1</td>
                            <td>Adipa Agastya</td>
                            <td>adipa@omsamedic.com</td>
                            <td>Admin</td>
                            <td>
                              <a href="/dashboard/useraccount/{useraccount}/edit" class="btn btn-warning btn-circle btn-sm"><i class="fas fa-pen"></i></a>
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