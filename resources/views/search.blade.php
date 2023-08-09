@extends('layouts.app')

@section('content')
    <div class="d-flex align-items-center justify-content-between mb-3">
        <h4 class="text-dark">Pencarian Kontak {{ $key }}</h4>
        <a href="{{ route('contacts.index') }}" class="btn btn-secondary px-4">Kembali</a>
    </div>
    <form action="{{ route('contacts.search') }}" method="get" class="mb-3">
        <input type="search" name="search" id="search" placeholder="Cari Kontak . . ." class="form-control shadow-none">
    </form>

    @if ($contacts->count() > 0)
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Nomor Telepon</th>
                        <th>Alamat Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $key => $item)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->phone_number }}</td>
                            <td>{{ $item->email }}</td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a href="{{ route('contacts.edit', $item->id) }}"
                                        class="btn btn-warning btn-sm px-3">Edit</a>
                                    <form action="{{ route('contacts.destroy', $item->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm px-3" onclick="return confirm('Are you sure?')"
                                            type="submit">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <p class="mb-0 text-secondary">Pencarian tidak ditemukan</p>
    @endif
@endsection
