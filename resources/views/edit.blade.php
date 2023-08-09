@extends('layouts.app')

@section('content')
    <h4 class="text-dark mb-3">Edit Kontak {{ $item->name }}</h4>

    <form action="{{ route('contacts.update', $item->id) }}" method="post">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name">Nama Kontak</label>
            <input type="text" name="name" id="name" value="{{ $item->name }}" class="form-control shadow-none"
                required>
        </div>
        <div class="mb-3">
            <label for="email">Alamat Email</label>
            <input type="email" name="email" id="email" value="{{ $item->email }}" class="form-control shadow-none"
                required>
        </div>
        <div class="mb-3">
            <label for="phone_number">Nomor Telepon</label>
            <input type="number" name="phone_number" id="phone_number" value="{{ $item->phone_number }}"
                class="form-control shadow-none" required>
        </div>
        <div class="d-flex gap-2">
            <button class="btn btn-primary px-3" type="submit">Simpan Perubahan</button>
            <a href="{{ route('contacts.index') }}" class="btn btn-secondary px-3">Batal & Kembali</a>
        </div>
    </form>
@endsection
