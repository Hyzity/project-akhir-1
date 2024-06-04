@extends('layouts.backend.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Pesan Masuk</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Pesan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($kritiksaran as $kritiksaran)
                                    <tr>
                                        <td>{{ $kritiksaran->nama }}</td>
                                        <td>{{ $kritiksaran->email }}</td>
                                        <td>{{ $kritiksaran->isi }}</td>
                                        <td>
                                            <form action="{{ route('admin.kritiksaran.destroy', $kritiksaran->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Hapus</button>
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
