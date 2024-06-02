<x-app-layout>
    <x-slot name="header">
    </x-slot>
    @include('inc.form')
    <div class="container">
        <form class="card mt-4" action="{{ route('siswa.edit', $siswa->id) }}" method="POST">
            @csrf
            @method('put')
            <div class="card-header">
                <h3 class="card-title">Add Data Siswa</h3>
            </div>
            <div class="card-body">
                <div class="mb-3 row">
                    <label class="col-3 col-form-label required">Nama Siswa</label>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Enter name" name="nama_siswa"
                            value="{{ $siswa->nama_siswa }}">
                        @error('nama_siswa')
                            <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-3 col-form-label">Kelas</label>
                    <div class="col">
                        <select class="form-select" name="kelas_siswa" id="select_siswa">
                            <option value="10" @if ($siswa->kelas_siswa === 10) selected @endif>10</option>
                            <option value="11" @if ($siswa->kelas_siswa === 11) selected @endif>11</option>
                            <option value="12" @if ($siswa->kelas_siswa === 12) selected @endif>12</option>
                        </select>
                        @error('kelas_siswa')
                            <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-3 col-form-label required">Domisli</label>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Enter name" rows="4"
                            name="domisli_siswa" value="{{ $siswa->domisli_siswa }}">
                        @error('domisli_siswa')
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
