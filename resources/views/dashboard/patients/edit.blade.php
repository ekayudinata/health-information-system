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
        <form method="post" action="/dashboard/patients/{{ $patient->id }}">
          @method('put')
          @csrf
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Form {{ $title }}</h6>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label>Jenis Pasien</label>
                    {{-- <select name="type" class="form-control">  
                      @foreach ($patients as $patient)
                      @if (old('type', $patient->type))
                    <option value="{{ $patient->type }}" selected>{{ $patient->type }}</option>
                      @else
                    <option value="{{ $patient->type }}">{{ $patient->type }}</option>
                      @endif
                      @endforeach
                  </select> --}}
                    <select name="type" class="form-control">
                      <option value="{{ $patient->type }}" selected>{{ $patient->type }}</option>
                      <option value="" disabled>------------</option>
                      <option value="Umum">Umum</option>
                      <option value="BPJS">BPJS</option>
                      <option value="Managedcare">Managedcare</option>
                      <option value="Asuransi">Asuransi</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Nama Pasien</label>
                    <input type="text" class="form-control" placeholder="Input Nama Pasien" name="name" required value="{{ old('name', $patient->name) }}">
                  </div>
                  <div class="form-group">
                    <label>No KTP</label>
                    <input type="text" class="form-control" placeholder="Input No KTP" name="id_card_number" required value="{{ old('id_card_number', $patient->id_card_number) }}">
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" placeholder="Input Alamat" name="address" required value="{{ old('address', $patient->address) }}">
                  </div>
                  <div class="form-group">
                    <label>No Telp</label>
                    <input type="text" class="form-control" placeholder="Input No Telp" name="phone" required value="{{ old('phone', $patient->phone) }}">
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-6">
                  <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="text" class="form-control" placeholder="YYYY-MM-DD" name="birth_date" value="{{ old('birth_date', $patient->birth_date) }}">
                    {{-- @error('name')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror --}}
                  </div>
                  <div class="form-group">
                    <label>No BPJS</label>
                    <input type="number" class="form-control" placeholder="Input No BPJS" name="bpjs_number" required value="{{ old('bpjs_number', $patient->bpjs_number) }}">
                  </div>
                  <div class="form-group">
                    <label>Faskes BPJS</label>
                    <input type="text" class="form-control" placeholder="Input Faskes BPJS" name="bpjs_medic" required value="{{ old('bpjs_medic', $patient->bpjs_medic) }}">
                  </div>
                  <div class="form-group">  
                    <label>Jenis Kelamin</label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender" value="L" required {{ old('gender', $patient->gender) == 'L'? 'checked' : ''}}>
                      <label class="form-check-label">Laki-laki</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender" value="P" {{ old('gender', $patient->gender) == 'P'? 'checked' : ''}}>
                      <label class="form-check-label">Perempuan</label>
                    </div>
                    {{-- @error('gender')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror --}}
                  </div>
                  <div class="form-group">
                    <label>Kebangsaan</label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="nationality" value="WNI" required {{ old('nationality', $patient->nationality) == 'WNI'? 'checked' : ''}}>
                      <label class="form-check-label">WNI</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="nationality" value="WNA" {{ old('nationality', $patient->nationality) == 'WNA'? 'checked' : ''}}>
                      <label class="form-check-label">WNA</label>
                    </div>
                    {{-- @error('nationality')
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
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
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