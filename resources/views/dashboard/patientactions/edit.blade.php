@extends('dashboard.layouts.main')
@section('container')

<div class="card o-hidden border-0 shadow-lg my-5 col-lg-6">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">


            <div class="col-lg-12">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Edit {{ $title }}</h1>
                    </div>
                    <form class="user" action="/dashboard/patientactions/{{ $patientaction->id }}" method="post">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <input type="text" name="action" class="form-control form-control-user @error('action') is-invalid @enderror" id="action" aria-describedby="action" placeholder="Nama jabatan... " 
                            value="{{ $patientaction->action }}"> 
                            {{-- <input type="text" class="form-control" placeholder="Nama User" name="action" required value="{{ old('action', $patientaction->action) }}"> --}}
                        </div>
                        @error('action')
                        <p class=".text-danger">{{ $message}}</p>
                        @enderror

                        <button type="submit" class="btn btn-primary btn-user btn-lg"><i class="fas fas fa-pen"></i>
                            Ubah
                        </button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection