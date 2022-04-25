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
      <div class="col-12"> --}}
        <form method="post" action="/dashboard/patients">
          @csrf
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Form {{ $title }}</h6>
            </div>
            <div class="card-body">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>Nama Pasien</label>
                  <input type="text" class="form-control" placeholder="Nama Pasien" name="name" required value="" disabled>
                </div>
                <div class="form-group col-md-6">
                  <label>No RM</label>
                  <input type="text" class="form-control" placeholder="No RM" name="medic_record_number" required value="" disabled>
                </div>
                <div class="form-group col-md-12">
                  <label>Alamat</label>
                  <input type="text" class="form-control" placeholder="Alamat" name="address" required value="" disabled>
                </div>
                <div class="form-group col-md-4">
                  <label>Tanggal Lahir</label>
                  <input type="text" class="form-control" placeholder="YYYY-MM-DD" name="birth_date" required value="" disabled>
                </div>
                <div class="form-group col-md-4">
                  <label>Umur</label>
                  <input type="text" class="form-control" placeholder="Umur" name="#" required value="" disabled>
                </div>
                <div class="form-group col-md-4">
                  <label>Jenis Kelamin</label>
                  <input type="text" class="form-control" placeholder="Jenis Kelamin" name="gender" required value="" disabled>
                </div>
              </div>
              <!-- /.form-row -->
              <form action="#">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label>Keluhan Utama</label>
                    <textarea class="form-control" name="main_complaint" rows="2" cols="50" placeholder="Input Keluhan Utama"></textarea>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Alergi</label>
                    <textarea class="form-control" name="allergy" rows="2" cols="50" placeholder="Input Alergi"></textarea>
                  </div>
                  <div class="form-group col-md-4">
                    <label>Past Medical History</label>
                    <textarea class="form-control" name="past_medical_history" rows="3" cols="50" placeholder="Input Past Medical History"></textarea>
                  </div>
                  <div class="form-group col-md-4">
                    <label>Treatment So Far</label>
                    <textarea class="form-control" name="treatment_so_far" rows="3" cols="50" placeholder="Input Treatment So Far"></textarea>
                  </div>
                  <div class="form-group col-md-4">
                    <label>Riwayat Sakit</label>
                    <textarea class="form-control" name="medical_history" rows="3" cols="50" placeholder="Input Riwayat Sakit"></textarea>
                  </div>
                </div>
                <!-- /.form-row -->
                <div class="form-row">
                  <div class="form-group col-md-2">
                    <label>TK</label>
                    <input type="text" class="form-control" placeholder="TK" name="level_of_consciousness" required value="">
                  </div>
                  <div class="form-group col-md-2">
                    <label>RR</label>
                    <input type="text" class="form-control" placeholder="RR" name="respiration" required value="">
                  </div>
                  <div class="form-group col-md-2">
                    <label>TD</label>
                    <input type="text" class="form-control" placeholder="TD" name="blood_pressure" required value="">
                  </div>
                  <div class="form-group col-md-2">
                    <label>Suhu</label>
                    <input type="text" class="form-control" placeholder="Suhu" name="temperature" required value="">
                  </div>
                  <div class="form-group col-md-2">
                    <label>Nadi</label>
                    <input type="text" class="form-control" placeholder="Nadi" name="pulse" required value="">
                  </div>
                  <div class="form-group col-md-2">
                    <label>SAT O2</label>
                    <input type="text" class="form-control" placeholder="SAT O2" name="o2_saturation" required value="">
                  </div>
                </div>
                <!-- /.form-row -->
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label>Penampilan Umum</label>
                    <input type="text" class="form-control" placeholder="Input Penampilan Umum" name="general_appearance" required value="">
                  </div>
                  <div class="form-group col-md-4">
                    <label>Mata</label>
                    <textarea class="form-control" name="eye" rows="2" cols="50" placeholder="Input Keluhan Mata"></textarea>
                  </div>
                  <div class="form-group col-md-4">
                    <label>Telinga</label>
                    <textarea class="form-control" name="ear" rows="2" cols="50" placeholder="Input Keluhan Telinga"></textarea>
                  </div>
                  <div class="form-group col-md-4">
                    <label>Hidung</label>
                    <textarea class="form-control" name="nose" rows="2" cols="50" placeholder="Input Keluhan Hidung"></textarea>
                  </div>
                  <div class="form-group col-md-4">
                    <label>Tenggorokan</label>
                    <textarea class="form-control" name="throat" rows="2" cols="50" placeholder="Input Keluhan Tenggorokan"></textarea>
                  </div>
                  <div class="form-group col-md-4">
                    <label>Tongsil</label>
                    <textarea class="form-control" name="tonsil" rows="2" cols="50" placeholder="Input Keluhan Tongsil"></textarea>
                  </div>
                  <div class="form-group col-md-4">
                    <label>Jantung</label>
                    <textarea class="form-control" name="heart" rows="2" cols="50" placeholder="Input Keluhan Jantung"></textarea>
                  </div>
                  <div class="form-group col-md-4">
                    <label>Paru-Paru</label>
                    <textarea class="form-control" name="lungs" rows="2" cols="50" placeholder="Input Keluhan Paru-Paru"></textarea>
                  </div>
                  <div class="form-group col-md-4">
                    <label>Perut</label>
                    <textarea class="form-control" name="stomach" rows="2" cols="50" placeholder="Input Keluhan Perut"></textarea>
                  </div>
                  <div class="form-group col-md-4">
                    <label>Extrimitas</label>
                    <textarea class="form-control" name="extrimitas" rows="2" cols="50" placeholder="Input Keluhan Extrimitas"></textarea>
                  </div>
                  <div class="form-group col-md-12">
                    <label>Status Lokalis</label>
                    <textarea class="form-control" name="localist_status" rows="2" cols="50" placeholder="Input Status Lokalis"></textarea>
                  </div>
                  <div class="form-group col-md-12">
                    <label>Gula Darah/Asam Urat/Kolesterol</label>
                    <input type="text" class="form-control" placeholder="Input Gula Darah/Asam Urat/Kolesterol" name="random_blood_glucose" required value="">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Tinggi Badan</label>
                    <input type="text" class="form-control" placeholder="Input Tinggi Badan" name="height" required value="">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Berat Badan</label>
                    <input type="text" class="form-control" placeholder="Input Berat Badan" name="weight" required value="">
                  </div>
                </div>
                <!-- /.form-row -->
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label>Diagnosis</label>
                    <select name="patient_action_id" class="form-control">
                      <option value="" selected>Masih Dummy</option>
                      <option value="">option1</option>
                      <option value="">option2</option>
                      <option value="">option3</option>
                      <option value="">option14</option>
                    </select>
                    <br>
                    <label>Keterangan Diagnosis</label>
                    <input type="text" class="form-control" placeholder="Input Keterangan Diagnosis" name="diagnostic_information" required value="">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Manajemen dan Prosedur</label>
                    <textarea class="form-control" name="management_and_procedures" rows="5 " cols="50" placeholder="Input Manajemen dan Prosedur"></textarea>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Pengobatan dan Diagnosis</label>
                    <textarea class="form-control" name="treatment_and_dosage" rows="5 " cols="50" placeholder="Input Pengobatan dan Diagnosis"></textarea>
                  </div>
                  <div class="form-group col-md-6">
                    <label><b> Rekomendasi</b></label>
                    <textarea class="form-control" name="recommendation" rows="5 " cols="50" placeholder="Input Rekomendasi"></textarea>
                  </div>
                  <div class="form-group col-md-12">
                    <label>Buta Warna</label>
                    <input type="text" class="form-control" placeholder="Input Buta Warna" name="color_blind" required value="">
                  </div>
                  <div class="form-group col-md-12">
                    <label>Fit To Fly</label>
                    <input type="text" class="form-control" placeholder="Input Fit To Fly" name="fit_to_flay" required value="">
                  </div>
                  <div class="form-group col-md-12">
                    <label>Hasil Pemeriksaan Penunjang</label>
                    <div class="alert alert-danger" role="alert">
                      <h4 class="alert-heading"><i class="fas fa-xmark"></i> Hasil Pemeriksaan Belum Tersimpan</h4>
                      <p>Silahkan input hasil pemeriksaan dengan tombol di bawah!</p>
                    </div>
                    <input type="file" class="form-control" placeholder="Input Hasil Pemeriksaan Penunjang" name="additional_data" required value="">
                  </div>
                </div>
                <!-- /.form-row -->
              </form>
              
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Simpan</button>
              <button type="submit" class="btn btn-success">Cetak Medical Report</button>
              <button type="submit" class="btn btn-primary">Rekam Medis</button>
          </div>
              <!-- /.row -->
        </div>
            <!-- /.card body -->
           
          {{-- </div> --}}
          <!-- /.card -->
        </form>
        <!-- /.form -->
      {{-- </div> --}}
      <!-- /.col -->
    
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->  
</section>
<!-- /.content -->
@endsection