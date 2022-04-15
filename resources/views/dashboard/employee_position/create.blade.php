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
                    <form class="user">
                        <div class="form-group">
                            <input type="email" class="form-control form-control-user"
                                id="exampleInputEmail" aria-describedby="emailHelp"
                                placeholder="Nama jabatan... ">
                        </div>
                       
                        <a href="#" class="btn btn-primary btn-user btn-lg"><i class="fas fa-plus-circle"></i> 
                             Tambah
                        </a>
                        
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection