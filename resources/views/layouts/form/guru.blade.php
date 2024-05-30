<div class="modal modal-blur fade show" id="modal-report" tabindex="-1" role="dialog" aria-modal="true" style="display: none;">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Tambah Data Guru</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="btnCloseFormAddGuru()"></button>
          </div>
        <form action="/api/guru/create" method="post" enctype="application/x-www-form-urlencoded">
          <div class="step active">
            <div class="modal-body">
              <div class="mb-3">
                <label class="form-label">Full name</label>
                <input type="text" class="form-control" name="name" placeholder="Full name" required>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="mb-3">
                    <label class="form-label">Jenis Kelamin</label>
                    <select class="form-select" name="jenis_kelamin" required>
                      <option value="laki-laki" selected="">Laki-Laki</option>
                      <option value="perempuan">Perempuan</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="mb-3">
                    <label class="form-label">Agama</label>
                    <select class="form-select" name="agama" required>
                      <option value="islam" selected="">Islam</option>
                      <option value="kristen">Kristen</option>
                      <option value="hindu">Hindu</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-lg-6">
                  <div class="mb-3">
                    <label class="form-label">Tempat Tanggal lahir</label>
                    <input type="text" class="form-control" name="tempat_tanggal_lahir" required>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="mb-3">
                    <label class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir" required>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="mb-3">
                    <label class="form-label">Nomor Handphone</label>
                    <input type="text" class="form-control" name="no_hp" required>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email
                    " required>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div>
                    <label class="form-label">Alamat</label>
                    <textarea class="form-control" rows="3"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                Cancel
              </a>
              <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal" onclick="nextStep()">
                Next
              </a>
            </div>
          </div>
          <div class="step">
            <div class="modal-body">
              <div class="row">
                <div class="col-lg-6">
                  <div class="mb-3">
                    <label class="form-label">Jenis Kelamin</label>
                    <select class="form-select">
                      <option value="laki-laki" selected="">Laki-Laki</option>
                      <option value="perempuan">Perempuan</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="mb-3">
                    <label class="form-label">Agama</label>
                    <select class="form-select">
                      <option value="islam" selected="">Islam</option>
                      <option value="kristen">Kristen</option>
                      <option value="hindu">Hindu</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-lg-6">
                  <div class="mb-3">
                    <label class="form-label">Tempat</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="mb-3">
                    <label class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control">
                  </div>
                </div>
                
                <div class="col-lg-12">
                  <div>
                    <label class="form-label">Alamat</label>
                    <textarea class="form-control" rows="3"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                Cancel
              </a>
              <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal" onclick="prevStep()">
                Back
              </a>
              <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                Next
              </a>
              <button class="btn btn-link link-secondary" type="submit"></button>
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>