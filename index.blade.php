<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="auth/css/style.css">
    <title>Listing Page</title>
  </head>

  <body>
    <div class="container">
        <header>
            <div class="bg-1">
                <div class="nav">
                    <nav>
                        <ul>
                            <li><a href="http://127.0.0.1:8000/"><span>Home</span></a></li>
                            <li><a href="#portofolio">Browse Topics</a></li>
                            <li><a href="#skills">How It Works</a></li>
                            <li><a href="#contact">Faqs</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="topic">
                    <p><a class="ini-text" href="#">Homepage</a> / Topic Listing</p>
                    <h1>Topics Listing</h1>
                </div>
            </div>
        </header>

            @include('siswaa.create')
      

            <div class="container" style="margin-top: 80px">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                DATA SISWA
                            </div>
                            <div class="card-body">
                                <button type="button" class="btn btn-primary custom-btn" data-toggle="modal" data-target="#exampleModal">
                                    Tambah Siswa
                                </button>
                                <table class="table table-bordered" id="myTable">
                                    <thead>
                                        <tr>
                                            <th scope="col">NO.</th>
                                            <th scope="col">NAMA LENGKAP</th>
                                            <th scope="col">NISN</th>
                                            <th scope="col">ALAMAT</th>
                                            <th scope="col">AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($siswaa as $index => $siswa)
                                        <tr>
                                            <td>{{ $siswaa->firstItem() + $index }}</td>
                                            <td>{{ $siswa->nama_lengkap }}</td>
                                            <td>{{ $siswa->nisn }}</td>
                                            <td>{{ $siswa->alamat }}</td>
                                            <td>
                                                <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#ModalEdit{{$siswa->id}}">Edit</a>
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('siswaa.destroy', $siswa->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                            @include('siswaa.edit')
                                        </tr>
                                        @empty
                                  <div class="alert alert-danger">
                                      Data Post belum Tersedia.
                                  </div>
                              @endforelseD:\New folder (2)\larabase-compro-main
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-right">
                                    {{ $siswaa->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
                                       

        {{-- @include('siswaa.footer') --}}


       
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>    
    <script>
        //message with toastr
        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script>
    
  </body>
</html>

