@extends('layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        @include('partials.header')
        <div class="btn-toolbar mb-2 mb-md-0">
            <button type="button" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center" data-bs-toggle="modal"
                data-bs-target="#addModal">
                <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                    </path>
                </svg>
                Tambah Vitamin
            </button>

        </div>
    </div>

    @if ($vitamins->isEmpty())
        <h6 class="text-center">Data Vitamin Belum ada</h6>
    @else
        @include('partials.table_settings')

        <div class="card card-body border-0 shadow table-wrapper table-responsive">
            <table id="vitamin-table" class="table table-hover display">
                <thead>
                    <tr>
                        <th class="border-gray-200">Nama Vitamin</th>
                        <th class="border-gray-200">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($vitamins as $vitamin)
                        <tr>
                            <td>{{ $vitamin->name }}</td>
                            <td>
                                <button class="btn-edit btn btn-sm btn-secondary animate-up-3" data-bs-toggle="modal"
                                    data-bs-target="#editModal" data-id="{{ $vitamin->id }}">
                                    <svg data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Data Vitamin"
                                        class="icon icon-xs" fill="none" stroke="currentColor" stroke-width="1.5"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10">
                                        </path>
                                    </svg>
                                </button>

                                <button class="btn-delete btn btn-sm btn-danger animate-up-3" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal" data-id="{{ $vitamin->id }}">
                                    <svg data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus Data Vitamin"
                                        class="icon icon-xs" fill="none" stroke="currentColor" stroke-width="1.5"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0">
                                        </path>
                                    </svg>
                                </button>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif

@endsection

@push('modals')
    <form action="/obat/vitamin" method="post" autocomplete="off">
        @csrf
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="h6 modal-title">Tambah Vitamin</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name">Nama Vitamin</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Masukkan Nama Vitamin" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-secondary">Tambah</button>
                        <button type="button" class="btn btn-link text-gray-600 ms-auto"
                            data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form method="post" autocomplete="off">
                    @method('patch')
                    @csrf
                    <div class="modal-header bg-secondary">
                        <h2 class="h6 modal-title">Edit Data Vitamin</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name">Nama Kader</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Masukkan Nama Kader" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-secondary">Update</button>
                        <button type="button" class="btn btn-link text-gray-600 ms-auto"
                            data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="editModal"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form method="post" autocomplete="off">
                    @method('delete')
                    @csrf
                    <div class="modal-header bg-danger">
                        <h2 class="h6 modal-title text-white">Hapus Data Vitamin</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Tekan tombol <b class="text-danger">Hapus</b> dibawah untuk mengkonfirmasi penghapusan data
                        vitamin
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger">Hapus</button>
                        <button type="button" class="btn btn-link text-gray-600 ms-auto"
                            data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endpush

@push('scripts')
    <script>

        $('.btn-edit').click(function() {
            const id = $(this).data('id')

            $('#editModal form').attr('action', '/obat/vitamin/' + id)
            fetch('/fetch/get-vitamin/' + id)
                .then(response => {
                    return response.json()
                })
                .then(data => {
                    $('#editModal #name').val(data.name)
                })
        })

        $('.btn-delete').click(function() {
            const id = $(this).data('id')
            $('#deleteModal form').attr('action', '/obat/vitamin/' + id)
        })
    </script>
@endpush
