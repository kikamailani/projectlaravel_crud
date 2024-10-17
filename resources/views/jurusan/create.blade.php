@extends('layouts.templates')

@section('content')
    <form action="{{ route('jurusan.store') }}" method="POST" class="card p-5">

        @csrf
        @if (Session::get('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Nama Siswa :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama"
                    value="{{ old('name') }}">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="nis" class="col-sm-2 col-form-label">Nis :</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="nis" name="nis" placeholder="Masukkan Nis"
                    value="{{ old('nis') }}">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="type" class="col-sm-2 col-form-label">Jurusan :</label>
            <div class="col-sm-10">
                <select class="form-select" id="type" name="type">
                    <option selected disabled hidden>Pilih</option>
                    <option value="PPLG" {{ old('type') == 'PPLG' ? 'selected' : '' }}>Pengembangan Perangkat Lunak dan
                        Gim</option>
                    <option value="TJKT" {{ old('type') == 'TJKT' ? 'selected' : '' }}>Teknik Komputer Jaringan dan
                        Telekomunikasi</option>
                    <option value="DKV" {{ old('type') == 'DKV' ? 'selected' : '' }}>Design Grafis Visual</option>
                    <option value="KLN" {{ old('type') == 'KLN' ? 'selected' : '' }}>Kuliner</option>
                    <option value="HTL" {{ old('type') == 'HTL' ? 'selected' : '' }}>Hotel</option>
                    <option value="MPLB" {{ old('type') == 'MPLB' ? 'selected' : '' }}>Manajemen Perkantoran dan Layanan
                        Bisnis</option>
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-secondary">Tambah Data</button>
    </form>
@endsection
