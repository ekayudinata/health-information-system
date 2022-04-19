@extends('dashboard.layouts.main')
@section('container')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          {{-- <h1>{{ $title }}</h1> --}} <h1 class="h3 mb-2 text-gray-800">User Role</h1>
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
           
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($userroles as $userrole)
                          <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $userrole->role }}</td>
                              <td>
                                <a href="/dashboard/userrole/{{ $userrole->id  }}/edit" class="btn btn-warning btn-circle btn-sm"><i class="fas fa-pen"></i></a>
                                {{-- <a href="#" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a> --}}
                             
                                <form action="/dashboard/userrole/{{  $userrole->id }}" method="post" class="d-inline">
                                  @method('delete')
                                  @csrf

                                  <button type="button" class="btn btn-danger btn-circle btn-sm" data-toggle="modal" data-target="#exampleModal">
                                    <i class="fas fa-trash"></i>
                                  </button>

                                   <!-- Modal -->
                                   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                         <h4>Yakin hapus data ini ? </h4>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          <button type="submit" class="btn btn-danger">Hapus</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

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