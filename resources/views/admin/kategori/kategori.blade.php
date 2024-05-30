<x-app-layout>
    @include('inc.form')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kategori') }}
        </h2>
    </x-slot>

    <button class="btn btn-primary"><a href="{{route('kategori.add')}}" class="text-white">Add Kategori</a></button>
    <div class="py-">
        <table class="table card-table table-vcenter text-nowrap datatable">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @forelse ($kategori as $item)
                       
              <tr>
                <td><span class="text-secondary">{{$i++}}</span></td>
                <td>{{$item->nama_kategori}}</td>
                <td class="text-end">
                    <form action="{{route('kategori.delete', $item->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure? ')">
                            Delete
                        </button>
                    </form>
                </td>
                <td class="text-end">
                      <a class="btn btn-primary" href="{{route('kategori.edit', $item->id)}}">
                        Edit
                      </a>
                    </div>
                </td>
 
              </tr>
              @empty
              <tr>
                <td>
                    tidak ada data
                </td>
              </tr>
              @endforelse
            </tbody>
          </table>
    </div>
</x-app-layout>

