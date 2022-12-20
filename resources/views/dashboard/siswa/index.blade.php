@extends('dashboard.layouts.main')
@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <h1>Siswa</h1>
        <form method="get" action="/dashboard/absensisiswa/show">
            <table class="table table-striped table-sm ">
                <thead>
                    <tr>
                        <th scope="col">nama</th>



                    </tr>
                </thead>
                <tbody>

                    {{-- {{ dd($siswa[1]->absensiSiswa['kehadiran']) }} --}}

                    @foreach ($siswa as $siswa)
                       
                        <tr>
                            <td> <input type="text" value="{{ $siswa->nama_siswa }}" name="nama" id="nama"></td> 
                            <td> <input type="text" value="{{ $siswa->kelas->kelas }}" name="nama" id="nama"></td>      
                        </tr>
                        
                    @endforeach
                </tbody>
                </body>
            </table>
        </form>
    </main>
@endsection
