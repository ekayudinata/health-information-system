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
                  <label>No Invoice</label>
                  <input type="text" class="form-control" placeholder="No Invoice" name="#" required value="" disabled>
                </div>
                <div class="form-group col-md-6">
                  <label>Alamat</label>
                  <input type="text" class="form-control" placeholder="Alamat" name="address" required value="" disabled>
                </div>
                <div class="form-group col-md-6">
                  <label>Dokter Pemeriksa</label>
                  <input type="text" class="form-control" placeholder="Dokter Pemeriksa" name="address" required value="" disabled>
                </div>
              </div>
              <!-- /.row -->
              
              <!-- /.row --> 
            </div>
            <div class="card-footer">
                <div class="form-row">
                    <div class="form-group col-md-6">
                       <label><strong><b>OMSA MEDIC</b></strong></label>
                       <br>
                       <label>JL. PULAU KAWE</label>
                        {{-- <input type="text" class="form-control" placeholder="YYYY-MM-DD" name="birth_date" required value="" disabled> --}}
                    </div>
                    <div class="form-group col-md-6 text-right">
                        <label>(0361) 4747 650</label>
                        <br>
                        <label>FINANCE@DRROMYASC.COM</label>
                        {{-- <input type="text" class="form-control" placeholder="Jenis Kelamin" name="gender" required value="" disabled> --}}
                    </div>
                  </div> 
              {{-- <button type="submit" class="btn btn-primary">Simpan</button>
              <button type="submit" class="btn btn-success">Cetak Medical Report</button>
              <button type="submit" class="btn btn-primary">Rekam Medis</button> --}}
            </div>
          </div>
          <!-- /.card -->
        </form>
        <!-- .form -->
        <form action="#" method="">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-file-invoice-dollar" aria-hidden="true"></i>
                {{ $title }}
              </h6>
            </div>
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Item</th>
                                    <th>Tipe</th>
                                    <th>Harga Satuan (Rp)</th>
                                    <th>Qty</th>
                                    <th>Sub Total (Rp)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>DOCTOR CONSULTATION B	</td>
                                    <td>TINDAKAN UMUM</td>
                                    <td>100.000</td>
                                    <td>1</td>
                                    <td>100.000</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>GRAND TOTAL (Rp)</td>
                                    <td>
                                        <input type="text" class="form-control" placeholder="100.000" name="#" required value="" disabled>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>DISKON (%)</td>
                                    <td>
                                        <input type="text" class="form-control" placeholder="0" name="#" required value="">
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>PAYABLE (RP)</td>
                                    <td>
                                        <input type="text" class="form-control" placeholder="100.000" name="#" required value="" disabled>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>JENIS PASIEN</td>
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
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>JENIS PEMBAYARAN</td>
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
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>JENIS PEMBAYARAN LAIN-LAIN</td>
                                    <td>
                                        <input type="text" class="form-control" placeholder="Input jenis pembayaran lain-lain" name="#" required value="">
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>BANK</td>
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
                                </tr>
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="float-right">
                    <a href="#" target="_blank" class="btn btn-success" style="color: white">
                        <i class="fa fa-print" aria-hidden="true"></i> Cetak
                      </a>
                    <button type="button" class="btn btn-primary" onclick="">
                      <i class="fa fa-save" aria-hidden="true"></i> Simpan
                    </button>
                </div>
            </div>
          </div>
        </form>
        <!-- /.form -->
        
        <!-- /.form -->
      {{-- </div>  --}}
      <!-- /.col -->
    <!-- /.row -->
    </div>
  <!-- /.container-fluid -->  
</section>
<!-- /.content -->
@endsection