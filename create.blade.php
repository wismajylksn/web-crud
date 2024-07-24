
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Siswa</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
              <form action="{{ route('siswaa.store') }}" method="POST" enctype="multipart/form-data">                        
                @csrf

                <div class="form-group">
                    <label for="nama_lengkap" >Nama Lengkap</label>
                    <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" value="{{ old('nama_lengkap') }}" id="nama_lengkap" name="nama_lengkap" placeholder="Masukkan Nama Lengkap" required>
                
                    <!-- error message untuk title -->
                    @error('nama_lengkap')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="nisn" >NISN</label>
                    <input type="text" class="form-control @error('nisn') is-invalid @enderror" id="nisn" name="nisn" value="{{ old('nisn') }}" placeholder="Masukkan NISN" required>
                
                    <!-- error message untuk title -->
                    @error('nisn')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="alamat" >Alamat</label>
                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat') }}" placeholder="Masukkan Alamat" required>
                
                    <!-- error message untuk content -->
                    @error('alamat')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="modal-footer"><button type="submit" class="btn btn-primary">SIMPAN</button></div>
            </form> 
              </div>
            </div>
          </div>
        </div>