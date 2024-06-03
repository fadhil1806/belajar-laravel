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
                                        <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#modal-danger" onclick="openAlertDelete()">
                                            Delete
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <div class="modal modal-blur fade show" id="modal-delete" tabindex="-1" style="display: none;" aria-modal="true" role="dialog">
                                <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                                  <div class="modal-content">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    <div class="modal-status bg-danger"></div>
                                    <div class="modal-body text-center py-4">
                                      <!-- Download SVG icon from http://tabler-icons.io/i/alert-triangle -->
                                      <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-danger icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 9v4"></path><path d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z"></path><path d="M12 16h.01"></path></svg>
                                      <h3>Are you sure?</h3>
                                      <div class="text-secondary">Do you really want to remove 84 files? What you've done cannot be undone.</div>
                                    </div>
                                    <div class="modal-footer">
                                      <div class="w-100">
                                        <div class="row">
                                          <div class="col"><a href="#" class="btn w-100" data-bs-dismiss="modal" onclick="btnCloseDelete()">
                                              Cancel
                                            </a></div>
                                          <div class="col">
                                              <form action="{{ route('kelas.delete', $data->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger w-100" data-bs-dismiss="modal">Delete 84 items</button>
                                              </form>
                                         </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
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
            document.getElementById('modal-delete').style.display = 'none'
        }

        async function showModalAddSiswa() {
            document.getElementById('modal-add-siswa').style.display = 'block'
        }

        async function openAlertDelete() {
            document.getElementById('modal-delete').style.display = 'block'
        }
    </script>



</x-app-layout>
