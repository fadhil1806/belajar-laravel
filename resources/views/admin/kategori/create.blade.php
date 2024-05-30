<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<form action="{{route('kategori.perform')}}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nama Kategory</label>
      <input type="text" class="form-control" name="nama_kategori">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>