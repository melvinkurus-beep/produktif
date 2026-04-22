@extends('backend.layouts.template') @section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Pengalaman Kerja</h3>
                    <a href="{{ route('pengalaman_kerja.create') }}" class="btn btn-primary float-right">Tambah Data</a>
                </div>
                <div class="card-body">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Perusahaan</th>
                                <th>Jabatan</th>
                                <th>Tahun Masuk</th>
                                <th>Tahun Keluar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengalaman_kerja as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->jabatan }}</td>
                                <td>{{ $item->tahun_masuk }}</td>
                                <td>{{ $item->tahun_keluar }}</td>

                                <td>
                                <form action="{{ route('pengalaman_kerja.destroy', $item->id) }}" method="POST">
        
                                     <a href="{{ route('pengalaman_kerja.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
        
                                     @csrf
                                        @method('DELETE')
                                     <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
        
                                 </form>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection