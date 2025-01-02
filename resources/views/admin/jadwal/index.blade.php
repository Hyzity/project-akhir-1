@extends('layouts.backend.app', [
    'title' => 'Tambah Jadwal',
    'contentTitle' => 'Jadwal',
])

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/dropify') }}/dist/css/dropify.min.css">
@endpush

@section('content')
    <x-alert></x-alert>
    <a href="{{ route('admin.jadwal.createKelas') }}" class="btn btn-primary btn-sm mb-5">Tambah Data</a>
    <div class="row">
        @foreach ($kelas as $p)
            <div class="col-lg-3 col-5" style="padding: 10px;">
                <a href="{{ route('admin.jadwal.showhari', $p->id) }}" >
                    <div class="small-box bg-info"">
                        <div class="inner mb-3">
                            <h3 style="color: white; font-size: 30px;">{{ $p->nama_kelas }}</h3><i
                                style="margin-bottom: 10px;" class="fas fa-school fa-2x"></i>
                        </div>
                        <a style="padding: 10px;" href="{{ route('admin.jadwal.showhari', $p->id) }}"
                            class="small-box-footer">Lebih lanjut <i class="fas fa-arrow-circle-right""></i></a>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    <!-- /.row -->
@stop

@push('js')
    <script type="text/javascript" src="{{ asset('plugins/dropify') }}/dist/js/dropify.min.js"></script>
    <script type="text/javascript">
        $('.dropify').dropify({
            messages: {
                default: 'Drag atau Drop untuk memilih gambar',
                replace: 'Ganti',
                remove: 'Hapus',
                error: 'error'
            }
        });
    </script>

    <style>
        .small-box {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            /* Menentukan sudut melengkung */
        }

        .small-box:hover .overlay {
            opacity: 1;
        }

        /* Tambahkan CSS untuk memperbesar kotak yang menampung tulisan "Kelas" dan ikon */
        .inner {
            display: flex;
            align-items: center;
            justify-content: center;
            /* Menengahkan tulisan "Kelas" dan ikon */
            padding: 20px;
            /* Perbesar kotak dengan menambahkan padding */
        }

        .inner h3 {
            margin-right: 10px;
            /* Jarak antara tulisan "Kelas" dan ikon */
        }
    </style>
@endpush
