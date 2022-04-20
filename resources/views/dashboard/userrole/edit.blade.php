@extends('dashboard.layouts.main')
@section('container')

<div class="card o-hidden border-0 shadow-lg my-5 col-lg-6">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">


            <div class="col-lg-12">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Edit User Role</h1>
                    </div>
                    <form class="user" action="/dashboard/userrole/{{ $userrole->id }}" method="post">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <input type="text" name="role" class="form-control form-control-user @error('role') is-invalid @enderror" id="role" aria-describedby="role" placeholder="Nama jabatan... " 
                            value="{{ $userrole->role }}"> 
                        </div>
                        @error('role')
                        <p class=".text-danger">{{ $message  }}</p>
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