<x-app-layout>
    <x-slot name="header">
    </x-slot>
    @include('inc.form')
    <div class="container">
        <form class="card mt-4" action="{{ route('kelas.edit', $kelas_siswa->id) }}" method="POST">
            @csrf
            @method('put')
            <div class="card-header">
                <h3 class="card-title">Add Data Siswa</h3>
            </div>
            <div class="card-body">
                <div class="mb-3 row">
                    <label class="col-3 col-form-label required">Nama Siswa</label>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Enter nam" name="nama"
                            value="{{ $kelas_siswa->nama }}">
                        @error('nama_siswa')
                            <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="card-footer text-end">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

</x-app-layout>
