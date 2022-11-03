@extends('dashboard.layouts.main')
@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <form method="get" action="/dashboard/posts">
            {{ $absensiSiswa[0]->nama }}
            <table class="table table-striped table-sm ">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Pelajaran</th>
                        <th scope="col">Kehadiran</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Tanggal</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($absensiSiswa as $absen)
                        <tr>
                            <td> <input type="text" value="{{ $absen->id }}" name="nama" id="nama"></td>
                            <td> <input type="text" value="{{ $absen->nama }}" name="nama" id="nama"></td>
                            <td> <input type="text" value="{{ $absen->kelas }}" name="nama" id="nama"></td>
                            <td> <input type="text" value="{{ $absen->pelajaran }}" name="nama" id="nama"></td>
                            <td>
                                <div class="icheck-primary d-inline">
                                    <input type="checkbox" id="kehadiran" name="kehadiran" value="{{ $absen->kehadiran }}"
                                        checked>

                                </div>
                            </td>
                            <td>
                                <input type="text" id="exampleInputEmail1" name="keterangan"
                                    value="{{ $absen->keterangan }}">
                            </td>
                            <td>
                                <input type="text" id="exampleInputEmail1" name="tanggal" value="{{ $absen->tanggal }}">
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </body>
            </table>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </main>
@endsection
