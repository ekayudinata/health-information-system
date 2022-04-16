@extends('dashboard.layouts.main')

@section('container')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        {{-- <h1>{{ $title }}</h1> --}} <h1 class="h3 mb-2 text-gray-800">Tambah Role User</h1>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <form action="#">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah data role user</h6>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label>Jenis Pasien</label>
                    <input type="text" class="form-control" placeholder="Jenis Pasien" name="name" required value="">
                    {{-- @error('name')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror --}}
                  </div>
                  <div class="form-group">
                    <label>No RM</label>
                    <input type="text" class="form-control" placeholder="Input No RM" name="name" required value="">
                  </div>
                  <div class="form-group">
                    <label>Nama Pasien</label>
                    <input type="text" class="form-control" placeholder="Input Nama Pasien" name="name" required value="">
                  </div>
                  <div class="form-group">
                    <label>No KTP</label>
                    <input type="text" class="form-control" placeholder="Input No KTP" name="name" required value="">
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" placeholder="Input Alamat" name="name" required value="">
                  </div>
                  <div class="form-group">
                    <label>No Telp</label>
                    <input type="text" class="form-control" placeholder="Input No Telp" name="name" required value="">
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-6">
                  <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="text" class="form-control" placeholder="2022-04-16" name="name" value="" disabled>
                    {{-- @error('name')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror --}}
                  </div>
                  <div class="form-group">
                    <label>No BPJS</label>
                    <input type="text" class="form-control" placeholder="Input No BPJS" name="name" required value="">
                  </div>
                  <div class="form-group">
                    <label>Faskes BPJS</label>
                    <input type="text" class="form-control" placeholder="Input Faskes BPJS" name="name" required value="">
                  </div>
                  <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="is_admin" value="0" required >
                      <label class="form-check-label">Laki-laki</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="is_admin" value="1" >
                      <label class="form-check-label">Perempuan</label>
                    </div>
                    {{-- @error('is_admin')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror --}}
                  </div>
                  <div class="form-group">
                    <label>Kebangsaan</label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="is_admin" value="0" required >
                      <label class="form-check-label">WNI</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="is_admin" value="1" >
                      <label class="form-check-label">WNA</label>
                    </div>
                    {{-- @error('is_admin')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror --}}
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.card body -->
          </div>
          <!-- /.card -->
        </form>
        <!-- /.form -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->  
</section>
<!-- /.content -->
@endsection