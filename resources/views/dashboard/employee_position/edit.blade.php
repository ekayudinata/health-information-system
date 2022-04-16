@extends('dashboard.layouts.main')
@section('container')

<div class="card o-hidden border-0 shadow-lg my-5 col-lg-6">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">


            <div class="col-lg-12">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Buat Jabatan Baru</h1>
                    </div>
                    <form class="user" action="/dashboard/jabatankaryawan/{{ $dataemployee->id }}" method="post">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <input type="text" name="nameposition" class="form-control form-control-user @error('nameposition') is-invalid @enderror" id="nameEmployeePosition" aria-describedby="nameEmployeePosition" placeholder="Nama jabatan... " 
                            value="{{ $dataemployee->nameposition }}"> 
                        </div>
                        @error('nameposition')
                        <p class=".text-danger">{{ $message  }}</p>
                        @enderror

                        <button type="submit" class="btn btn-primary btn-user btn-lg">
                            Ubah
                        </button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection