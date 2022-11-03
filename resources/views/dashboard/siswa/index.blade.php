@extends('dashboard.layouts.main')
@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <h1>Absen</h1>
        <form method="get" action="/dashboard/absensisiswa/show">
            <table class="table table-striped table-sm ">
                <thead>
                    <tr>
                        <th scope="col">nama</th>
                        <th scope="col">kehadiran</th>


                    </tr>
                </thead>
                <tbody>

                    {{-- {{ dd($siswa[1]->absensiSiswa['kehadiran']) }} --}}

                    @foreach ($siswa as $siswa)
                        <tr>

                            <td> <input type="text" value="{{ $siswa->nama }}" name="nama" id="nama"></td>


                            @foreach ($siswa->absens as $absen)
                        <tr>
                            <td> <input type="text" id="exampleInputEmail1" name="tanggal" value="{{ $absen->tanggal }}">
                            <td> <input type="text" id="exampleInputEmail1" name="tanggal"
                                    value="{{ $absen->kehadiran }}">
                        </tr>
                    @endforeach

                    </td>

                    <td> <button type="submit" class="btn btn-primary">edit</button></td>

                    </tr>
                    @endforeach
                </tbody>
                </body>
            </table>
        </form>
    </main>
@endsection
