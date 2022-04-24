@extends('dashboard.layouts.main')

@section('container')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        {{-- <h1 class="h3 mb-2 text-gray-800">{{ $title }}</h1> --}}
        <h1 class="h3 mb-2 text-gray-800">Pelayanan</h1>
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
              <h6 class="m-0 font-weight-bold text-primary">Tabel Data Pelayanan</h6>
          </div>
          <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No. Antrian</th>
                                <th>Nama</th>
                                <th>Dokter</th>
                                <th>Poliklinik</th>
                                <th>Jenis Pasien</th>
                                <th>Status Pelayanan</th>
                                <th>Status Pembayaran</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>MILCA AKILA</td>
                                <td>DR. ROMY KAMALUDDIN, S.KED., M. BIOMED (AAM)</td>
                                <td>UMUM</td>
                                <td>BPJS</td>
                                <td><button class="btn btn-danger btn-sm">BELUM DILAYANI</button></td>
                                <td><button class="btn btn-danger btn-sm">BELUM BAYAR</button></td>
                                <td><a href="/dashboard/service/action/create" class="btn btn-primary btn-sm">LAYANI</a></td>
                            </tr>
                        {{-- @foreach ($patients as $patient)
                        <tr>
                            <td>{{ $patient->medic_record_number }}</td>
                            <td>{{ $patient->name }}</td>
                            <td>{{ $patient->phone }}</td>
                            <td>{{ $patient->address }}</td>
                            <td>{{ $patient->birth_date }}</td>
                            <td>{{ $patient->type }}</td>
                            <td>
                            <a href="/dashboard/patients/{{ $patient->id }}/edit" class="btn btn-warning btn-circle btn-sm"><i class="fas fa-pen"></i></a>
                            <form action="/dashboard/patients/{{ $patient->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger btn-circle btn-sm" onclick="return confirm('Anda yakin?')"><i class="fas fa-trash"></i></button>
                            </form>
                            </td>
                        </tr>
                        @endforeach --}}
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