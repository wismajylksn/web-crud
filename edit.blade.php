
<div class="modal fade" id="ModalEdit{{$siswa->id}}" tabindex="-1" role="dialog" aria-labelledby="ModalEditLabel{{$siswa->id}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="editForm{{$siswa->id}}" action="{{ route('siswaa.update', $siswa->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalEditLabel{{$siswa->id}}">Edit Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" value="{{ $siswa->id }}">
                    <div class="form-group">
                        <label for="edit-nama{{$siswa->id}}">Nama Lengkap:</label>
                        <input type="text" id="nama_lengkap{{$siswa->id}}" name="nama_lengkap" class="form-control" value="{{ $siswa->nama_lengkap }}" required>
                    </div>
                    <div class="form-group">
                        <label for="edit-nisn{{$siswa->id}}">NISN:</label>
                        <input type="text" id="nisn{{$siswa->id}}" name="nisn" class="form-control" value="{{ $siswa->nisn }}" required>
                    </div>
                    <div class="form-group">
                        <label for="edit-alamat{{$siswa->id}}">Alamat:</label>
                        <input type="text" id="alamat{{$siswa->id}}" name="alamat" class="form-control" value="{{ $siswa->alamat }}" required>
                    </div>
                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>