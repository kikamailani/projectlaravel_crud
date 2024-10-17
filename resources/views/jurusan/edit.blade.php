@extends('layouts.templates')

@section('content')
    <form action="{{ route('jurusan.update', $jurusan['id']) }}" method="POST" class="card p-5">

        @csrf
        @method('PATCH')
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
            <label for="name" class="col-sm-2 col-form-label">Nama :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name"value="{{ $jurusan['name'] }}">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="nis" class="col-sm-2 col-form-label">Nis :</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="nis" name="nis"
value="{{ $jurusan['nis'] }}">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="type" class="col-sm-2 col-form-label">Jurusan di ganti :</label>

            <div class="col-sm-10">
                <select class="form-select" id="type" name="type">
                    <option selected disabled hidden>Pilih</option>
                    <option value="PPLG" {{ $jurusan['type'] == 'PPLG' ? 'selected' : '' }}>Pengembangan Perangkat Lunak
                        dan Gim</option>
                    <option value="TJKT" {{ $jurusan['type'] == 'TJKT' ? 'selected' : '' }}>Teknik Komputer Jaringan dan
                        Telekomunikasi</option>
                    <option value="DKV" {{ $jurusan['type'] == 'DKV' ? 'selected' : '' }}>Design Grafis Visual</option>
                    <option value="KLN" {{ $jurusan['type'] == 'KLN' ? 'selected' : '' }}>Kuliner</option>
                    <option value="HTL" {{ $jurusan['type'] == 'HTL' ? 'selected' : '' }}>Hotel</option>
                    <option value="MPLB" {{ $jurusan['type'] == 'MPLB' ? 'selected' : '' }}>Manajemen Perkantoran dan
                        Layanan Bisnis</option>
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-secondary">Edit Data</button>
    </form>
@endsection
