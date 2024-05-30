<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Dashboard Guru</title>
    <!-- CSS files -->
    <link href="./dist/css/tabler.min.css?1684106062" rel="stylesheet"/>
    <link href="./dist/css/tabler-flags.min.css?1684106062" rel="stylesheet"/>
    <link href="./dist/css/tabler-payments.min.css?1684106062" rel="stylesheet"/>
    <link href="./dist/css/tabler-vendors.min.css?1684106062" rel="stylesheet"/>
    <link href="./dist/css/demo.min.css?1684106062" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('dist/css/tabler.min.css')}}">
    <style>
      .step {
          display: none;
      }
      .step.active {
          display: block;
      }
  </style>
  </head>
  <body >
    
    <script src="./dist/js/demo-theme.min.js?1684106062"></script>
   
    

    <div class="col-12 mt-4">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Invoices</h3>
        </div>
        <div class="card-body border-bottom py-3">
          <div class="d-flex">
            <div class="text-muted">
              Show
              <div class="mx-2 d-inline-block">
                <input type="text" class="form-control form-control-sm" value="8" size="3" aria-label="Invoices count" fdprocessedid="jja9gra">
              </div>
              entries
            </div>
            <div class="ms-auto text-muted">
              <div class="row g-2">
                <div class="col">
                  <input type="text" class="form-control" placeholder="Search for…" fdprocessedid="rlxono">
                </div>
                <div class="col-auto">
                  <a href="#" class="btn btn-icon" aria-label="Button">
                    <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path><path d="M21 21l-6 -6"></path></svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table card-table table-vcenter text-nowrap datatable">
            <thead>
              <tr>
                <th class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select all invoices"></th>
                <th class="w-1">No. <!-- Download SVG icon from http://tabler-icons.io/i/chevron-up -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm icon-thick" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M6 15l6 -6l6 6"></path></svg>
                </th>
                <th>Nama</th>
                <th>Agama</th>
                <th>No. Hp</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Mapel</th>
                <th>No. Rekening</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                <td><span class="text-muted">001402</span></td>
                <td>Fadhil Rabbani</td>
                <td>Islam</td>
                <td>089514563365</td>
                <td>fadhil8637@smk.belajar.id</td>
                <td>Laki-Laki</td>
                <td>Web development</td>
                <td>0166-01-020870-53-8</td>
                <td><span class="badge bg-success me-1"></span>Aktif</td>
              </tr>
              <tr>
                <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                <td><span class="text-muted">001402</span></td>
                <td>Abdullah Aziz</td>
                <td>Islam</td>
                <td>08978821221</td>
                <td>aziz@smk.id</td>
                <td>Laki-Laki</td>
                <td>Web development</td>
                <td>0166-01-020870-53-8</td>
                <td><span class="badge bg-warning me-1"></span>Aktif</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="card-footer d-flex align-items-center">
          <p class="m-0 text-muted">Showing <span>1</span> to <span>8</span> of <span>16</span> entries</p>
          <ul class="pagination m-0 ms-auto">
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M15 6l-6 6l6 6"></path></svg>
                prev
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item">
              <a class="page-link" href="#">
                next <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M9 6l6 6l-6 6"></path></svg>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    
  </body>
</html>