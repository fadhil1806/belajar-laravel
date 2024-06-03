<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kelas') }}
        </h2>
    </x-slot>
    @include('inc.form')
    <div class="container mt-4">
        <button class="btn btn-primary mb-2" onclick="showModalAddSiswa()">Add Data</button>
        <div class="card">
            <div class="table-responsive">
                <table class="table table-vcenter table-mobile-md card-table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th class="w-1"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($kelas_siswa as $data)
                            <tr>
                                <td data-label="Nama">
                                    <div class="d-flex py-1 align-items-center">
                                        <div class="flex-fill">
                                            <div class="font-weight-medium">{{ $data->nama }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-list flex-nowrap">
                                        <a class="btn" href="{{ route('kelas.update', $data->id) }}">
                                            Edit
                                        </a>
                                        <form action="{{ route('kelas.delete', $data->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button id="btn-delete" class="btn" onclick="openAlertDelete()">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td>
                                    Nothing data
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal modal-blur fade show" id="modal-add-siswa" tabindex="-1" role="dialog" aria-modal="true"
        style="display: none;">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Data Siswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        onclick="closeModalAddSiswa()"></button>
                </div>
                <form class="card mt-4" action="{{ route('kelas.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" placeholder="Enter name" name="nama"
                                value="{{ old('nama') }}">
                            @error('nama')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                            Cancel
                        </a>
                        <button href="#" class="btn btn-primary ms-auto" data-bs-dismiss="modal" type="submit">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M12 5l0 14"></path>
                                <path d="M5 12l14 0"></path>
                            </svg>
                            Create new report
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @session('success')
        <div class="alert alert-important alert-success alert-dismissible" role="alert"
            style="position: absolute; bottom: 0; right: 0" id="alert-success">
            <div class="d-flex">
                <div>
                    <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M5 12l5 5l10 -10"></path>
                    </svg>
                </div>
                <div>
                    {{ session('success') }}
                </div>
            </div>
            <a class="btn-close" data-bs-dismiss="alert" aria-label="close" onclick="btnCloseSuccess()"></a>
        </div>
    @endsession
    @session('delete')
        <div class="alert alert-important alert-danger alert-dismissible" role="alert"
            style="position: absolute; bottom: 0; right: 0" id="alert-delete">
            <div class="d-flex">
                <div>
                    <!-- Download SVG icon from http://tabler-icons.io/i/alert-circle -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                        <path d="M12 8v4"></path>
                        <path d="M12 16h.01"></path>
                    </svg>
                </div>
                <div>
                    {{ session('delete') }}
                </div>
            </div>
            <a class="btn-close" data-bs-dismiss="alert" aria-label="close" onclick="btnCloseDelete()"></a>
        </div>
    @endsession
    <script>
        async function closeModalAddSiswa() {
            document.getElementById('modal-add-siswa').style.display = 'none';
        }
        async function btnCloseSuccess() {
            document.getElementById('alert-success').style.display = 'none'
        }
        async function btnCloseDelete() {
            document.getElementById('alert-delete').style.display = 'none'
        }

        async function showModalAddSiswa() {
            document.getElementById('modal-add-siswa').style.display = 'block'
        }
    </script>

</x-app-layout>
