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
    {{-- <div class="row">
      {{-- <div class="col-12"> --}} 
        <form method="post" action="/dashboard/patients">
          @csrf
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-diagnoses" aria-hidden="true"></i>
                Form {{ $title }}
              </h6>
            </div>
            <div class="card-body">
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label>Nama Pasien</label>
                  <input type="text" class="form-control" placeholder="Nama Pasien" name="name" required value="" disabled>
                </div>
                <div class="form-group col-md-4">
                  <label>No RM</label>
                  <input type="text" class="form-control" placeholder="No RM" name="medic_record_number" required value="" disabled>
                </div>
                <div class="form-group col-md-4">
                  <label>Dokter Pemeriksa</label>
                  <input type="text" class="form-control" placeholder="Dokter Pemeriksa" name="#" required value="" disabled>
                </div>
                <div class="form-group col-md-12">
                  <label>Alamat</label>
                  <input type="text" class="form-control" placeholder="Alamat" name="address" required value="" disabled>
                </div>
                <div class="form-group col-md-3">
                  <label>Tanggal Lahir</label>
                  <input type="text" class="form-control" placeholder="YYYY-MM-DD" name="birth_date" required value="" disabled>
                </div>
                <div class="form-group col-md-3">
                  <label>Umur</label>
                  <input type="text" class="form-control" placeholder="Umur" name="#" required value="" disabled>
                </div>
                <div class="form-group col-md-3">
                  <label>Jenis Kelamin</label>
                  <input type="text" class="form-control" placeholder="Jenis Kelamin" name="gender" required value="" disabled>
                </div>
                <div class="form-group col-md-3">
                  <label>Kebangsaan</label>
                  <input type="text" class="form-control" placeholder="Kebangsaan" name="nationality" required value="" disabled>
                </div>
              </div>
              <!-- /.row -->
            </div>
            {{-- <div class="card-footer">
              <button type="submit" class="btn btn-primary">Simpan</button>
              <button type="submit" class="btn btn-success">Cetak Medical Report</button>
              <button type="submit" class="btn btn-primary">Rekam Medis</button>
            </div> --}}
          </div>
          <!-- /.card -->
        </form>
        <!-- .form -->
        <form action="#" method="">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><i class="icon fas fa-pills" aria-hidden="true"></i>
                OBAT, ALKES, VAKSIN, DLL
              </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <div class="row">
                  <div class="col-sm-12">
                    <table class="table" id="" width="100%" cellspacing="0" role="grid" aria-describedby="" style="width: 100%;">
                      <thead>
                        <tr>
                            <th>No</th>
                            <th>Item</th>
                            <th>Harga (Rp)</th>
                            <th>Qty</th>
                            <th>Subtotal (Rp)</th>
                            <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>#</td>
                          <td>
                            <select name="#" class="form-control">
                              {{-- @foreach ($userroles as $userrole)
                              @if (old('user_role_id', $user->user_role_id) == $userrole->id) --}}
                            <option value="" selected>masih dummy</option>
                              {{-- @else --}}
                            <option value="">option1</option>
                            <option value="">option2</option>
                            <option value="">option3</option>
                              {{-- @endif
                              @endforeach --}}
                          </select>
                          </td>
                          <td>
                            <input type="text" class="form-control" placeholder="0" name="#" required value="" disabled>
                          </td>
                          <td>
                            <input type="text" class="form-control" placeholder="0" name="#" required value="">
                          </td>
                          <td>
                            <input type="text" class="form-control" placeholder="0" name="#" required value="" disabled>
                          </td>
                          <td>
                            <button type="button" class="btn btn-primary" onclick="">
                              <i class="fa fa-save" aria-hidden="true"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>ONDANSENTRON 4MG INJ</td>
                          <td>86.800</td>
                          <td>1</td>
                          <td>86.800</td>
                          <td>
                            <button type="button" class="btn btn-danger" onclick="">
                              <i class="fas fa-trash" aria-hidden="true"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>Nilai (Rp)</td>
                          <td>86.800</td>
                          <td></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
        <!-- /.form -->
        <!-- .form -->
        <form action="#" method="">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><i class="icon fas fa-diagnoses" aria-hidden="true"></i>
                Tindakan
              </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <div class="row">
                  <div class="col-sm-12">
                    <table class="table" id="" width="100%" cellspacing="0" role="grid" aria-describedby="" style="width: 100%;">
                      <thead>
                        <tr>
                            <th>No</th>
                            <th>Item</th>
                            <th>Harga (Rp)</th>
                            <th>Qty</th>
                            <th>Subtotal (Rp)</th>
                            <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>#</td>
                          <td>
                            <select name="#" class="form-control">
                              {{-- @foreach ($userroles as $userrole)
                              @if (old('user_role_id', $user->user_role_id) == $userrole->id) --}}
                            <option value="" selected>masih dummy</option>
                              {{-- @else --}}
                            <option value="">option1</option>
                            <option value="">option2</option>
                            <option value="">option3</option>
                              {{-- @endif
                              @endforeach --}}
                          </select>
                          </td>
                          <td>
                            <input type="text" class="form-control" placeholder="0" name="#" required value="" disabled>
                          </td>
                          <td>
                            <input type="text" class="form-control" placeholder="0" name="#" required value="">
                          </td>
                          <td>
                            <input type="text" class="form-control" placeholder="0" name="#" required value="" disabled>
                          </td>
                          <td>
                            <button type="button" class="btn btn-primary" onclick="">
                              <i class="fa fa-save" aria-hidden="true"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>DOCTOR CONSULTATION A</td>
                          <td>100.000</td>
                          <td>1</td>
                          <td>100.000</td>
                          <td>
                            <button type="button" class="btn btn-danger" onclick="">
                              <i class="fas fa-trash" aria-hidden="true"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>Nilai (Rp)</td>
                          <td>100.000</td>
                          <td></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
        <!-- /.form -->
        <!-- .form -->
        <form action="#" method="">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><i class="icon fas fa-vials" aria-hidden="true"></i>
                Laboratorium
              </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <div class="row">
                  <div class="col-sm-12">
                    <table class="table" id="" width="100%" cellspacing="0" role="grid" aria-describedby="" style="width: 100%;">
                      <thead>
                        <tr>
                            <th>No</th>
                            <th>Item</th>
                            <th>Harga (Rp)</th>
                            <th>Qty</th>
                            <th>Subtotal (Rp)</th>
                            <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>#</td>
                          <td>
                            <select name="#" class="form-control">
                              {{-- @foreach ($userroles as $userrole)
                              @if (old('user_role_id', $user->user_role_id) == $userrole->id) --}}
                            <option value="" selected>masih dummy</option>
                              {{-- @else --}}
                            <option value="">option1</option>
                            <option value="">option2</option>
                            <option value="">option3</option>
                              {{-- @endif
                              @endforeach --}}
                          </select>
                          </td>
                          <td>
                            <input type="text" class="form-control" placeholder="0" name="#" required value="" disabled>
                          </td>
                          <td>
                            <input type="text" class="form-control" placeholder="0" name="#" required value="">
                          </td>
                          <td>
                            <input type="text" class="form-control" placeholder="0" name="#" required value="" disabled>
                          </td>
                          <td>
                            <button type="button" class="btn btn-primary" onclick="">
                              <i class="fa fa-save" aria-hidden="true"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>ACA IGG</td>
                          <td>150.000</td>
                          <td>1</td>
                          <td>150.000</td>
                          <td>
                            <button type="button" class="btn btn-danger" onclick="">
                              <i class="fas fa-trash" aria-hidden="true"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>Nilai (Rp)</td>
                          <td>150.000</td>
                          <td></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="alert alert-success float-right">
            <h4><i class="icon fas fa-file-invoice-dollar" aria-hidden="true"></i> Grand Total Rp.336.800</h4>
          </div>
        </form>
        {{-- <div class="modal-footer">
          <div class="alert alert-success">
            <h4><i class="icon fas fa-file-invoice-dollar" aria-hidden="true"></i> Grand Total Rp.336.800</h4>
          </div>
        </div> --}}
        
        <!-- /.form -->
      {{-- </div>  --}}
      <!-- /.col -->
    <!-- /.row -->
    </div>
  <!-- /.container-fluid -->  
</section>
<!-- /.content -->
@endsection