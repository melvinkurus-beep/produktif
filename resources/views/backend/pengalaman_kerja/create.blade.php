@extends('backend.layouts.template')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tambah Pengalaman Kerja</h3>
                </div>
                <form action="{{ route('pengalaman_kerja.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama Perusahaan</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Jabatan</label>
                            <input type="text" name="jabatan" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Tahun Masuk</label>
                            <input type="number" name="tahun_masuk" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Tahun Keluar</label>
                            <input type="number" name="tahun_keluar" class="form-control" required>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('pengalaman_kerja.index') }}" class="btn btn-default">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection