@extends('dashboard.layouts.main')
@section('container')
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
        <div class="col-12">

          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Form Data {{ $title }}</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Poli</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($polis as $poli)
                          <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $poli->name }}</td>
                              <td>
                                <a href="/dashboard/polis/{{ $poli->id }}/edit  " class="btn btn-warning btn-circle btn-sm"><i class="fas fa-pen"></i></a>
                                {{-- <a href="#" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a> --}}
                             
                                <form action="/dashboard/polis/{{ $poli->id }}" method="post" class="d-inline">
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