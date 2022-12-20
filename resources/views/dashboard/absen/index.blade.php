@extends('dashboard.layouts.main')
@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <h1>Absen</h1>
        <form method="get" action="/dashboard/absen/show">
            <table class="table table-striped table-sm ">
                <thead>
                    <tr>
                        <th scope="col">tanggal </th>
                        <th scope="col">kehadiran</th>


                    </tr>
                </thead>
                <tbody>

                    {{-- {{ dd($siswa[1]->absensiSiswa['kehadiran']) }} --}}

                    @foreach ($absen as $absen)
                        <tr>

                            <td> <input type="text" value="{{ $absen->tanggal }}" name="tanggal" id="tanggal"></td>


                            </td>

                            <td><a href="/dashboard/absen/{{ $absen->tanggal }}"> <span data-feather="eye"
                                class=""></span></a>
                        </tr>
                    @endforeach
                </tbody>
                </body>
            </table>
        </form>
    </main>
@endsection
