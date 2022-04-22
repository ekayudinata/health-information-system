@extends('dashboard.layouts.main')

@section('container')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        {{-- <h1 class="h3 mb-2 text-gray-800">{{ $title }}</h1> --}}
        <h1 class="h3 mb-2 text-gray-800">Laporan</h1>
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
              {{-- <h6 class="m-0 font-weight-bold text-primary">Tabel Data {{ $title }}</h6> --}}
              <h6 class="m-0 font-weight-bold text-primary">Form Laporan</h6>
          </div>

          {{-- <form method="post" action="/dashboard/employee/{{ $employee->id }}">
            @method('put')
            @csrf --}}
            <div class="card-body">
                <div class="form-group">
                    <label>Jenis Pembayaran</label>
                    <select name="#" class="form-control">
                      <option value="#">Masih Dummy Data</option>
                      <option value="Semua">Semua</option>
                      <option value="Umum">Umum</option>
                      <option value="BPJS">BPJS</option>
                      <option value="Asuransi">Asuransi</option>
                      <option value="Managedcare">Managedcare</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Poli</label>
                    <select name="#" class="form-control">
                      <option value="#">Masih Dummy Data</option>
                      <option value="Semua">Gigi</option>
                      <option value="Umum">Umum</option>
                    </select>
                </div>
                <div class="form-group">
                  <label>Tanggal Awal</label>
                  <div class="md-form md-outline input-with-post-icon datepicker" id="customDays">
                    <input placeholder="Select date" type="text" id="Customization" class="form-control">
                    {{-- <label for="Customization">Try me...</label> --}}
                    <i class="fas fa-calendar input-prefix" tabindex=0></i>
                  </div>
                </div>
                <div class="form-group">
                    <label>Tanggal Akhir</label>
                    <div class="md-form md-outline input-with-post-icon datepicker" id="customDays">
                      <input placeholder="Select date" type="text" id="Customization" class="form-control">
                      {{-- <label for="Customization">Try me...</label> --}}
                      <i class="fas fa-calendar input-prefix" tabindex=0></i>
                    </div>
                </div>
                
            </div>
            <!-- /.card-body -->
  
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          {{-- </form> --}}
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

<script>
$('.datepicker').datepicker({
    weekdaysShort: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
    showMonthsShort: true
  });
</script>

