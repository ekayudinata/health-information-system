@extends('dashboard.layouts.main')

@section('container')


<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
  <div class="input-group">
      <input type="text" class="form-control border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
      <div class="input-group-append">
          <button class="btn btn-primary" type="button">
              <i class="fas fa-search fa-sm"></i>
          </button>
      </div>
  </div>
</form>

<form method="post" action="/dashboard/administration/listpatient">
  @csrf
  <div class="card-body">
    <div class="form-group">
      <label>Searching</label>
      <input type="text" class="form-control" placeholder="Input Nama Poli" name="name" required value="">
      @error('name')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
      </div>

  </div>
  <!-- /.card-body -->

  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Searching</button>
  </div>
</form>


<script>
  $(document).ready(function(){
    
            $('#wilayah').on('change',function(){
                var regionsId = $(this).val(); 
                if(regionsId){
                    $.ajax({
                        url:'/recruit/'+regionsId, 
                        type:'GET', 
                        data:{"_token":"{{ csrf_token() }}"}, 
                        dataType:"json", 
                        success:function(data){ 

                            if(data.length > 0){
                                $('#posisi').empty();
                                $('#posisi').append('<option hidden>Pilih Posisi</option>'); 
                                $.each(data, function(index, showdata){
                                $('select[name="workfield_id"]').append('<option value="'+ showdata.id +'">' + showdata.name+ '</option>');
                                })
                            }else{
                                $('#posisi').empty();
                                $('#posisi').append('<option>Tidak ada lowongan </option>'); 
                            }
                        }

                    }); 
                }
            })

   }
</script>

@endsection