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
                <a href="/dashboard/administration/create" type="button" class="btn btn-primary"> <i class="fa fa-plus-circle" aria-hidden="true"></i> Pasien Baru</a>
                <a href="" type="button" class="btn btn-primary float-right"> <i class="fa fa-list-ul" aria-hidden="true"></i> Pasien Lama</a>
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
                      @foreach ($administrations as $administration)
                      <tr>

                          <td>{{  $loop->iteration  }}</td>
                          <td>{{ $loop->iteration  }}</td>
                          <td>{{  $loop->iteration  }}</td>
                          <td>{{  $loop->iteration }}</td>
                          <td>{{  $loop->iteration  }}</td>

                          <td>
                            <a href="/dashboard/patients/{{ $patient->id }}/edit" class="btn btn-warning btn-circle btn-sm"><i class="fas fa-pen"></i></a>
                            <form action="/dashboard/patients/{{ $patient->id }}" method="post" class="d-inline">
                              @method('delete')
                              @csrf
                              <button type="button" class="btn btn-danger btn-circle btn-sm" data-toggle="modal" data-target="#exampleModal">
                                <i class="fas fa-trash"></i>
                              </button>
  
                

                            </form>
                          </td>
                      </tr>
                      @endforeach
                    </tbody>
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