<form action="" method="post">
    <div class="modal fade text-left" id="ModalCreateBuku" tabindex="-1" aria-hidden="true" role="dialog">
        <div class="modal-dialog modal-lg" role="document" aria-hidden="true"> 
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Tambah Data Buku</h4>
                    <button class="close" aria-label="Close" data-dismiss="modal" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/buku" method="post">
                        @csrf
                        <div class="card-body">
                          <div class="form-group">
                            <label>Judul Buku</label>
                            <input type="text" class="form-control" name="judul" placeholder="Masukkan Judul Buku">
                          </div>
                          <div class="form-group">
                            <label>Tanggal Terbit</label>
                            <input type="date" class="form-control" name="tanggal_terbit" placeholder="Masukkan Tanggal Terbit">
                          </div>
                          <div class="form-group">
                            <label>Pencipta</label>
                            <input type="text" class="form-control" name="pencipta" placeholder="Masukkan Nama Pencipta">
                          </div>
                          <div class="form-group">
                            <label>Harga</label>
                            <input type="Number" class="form-control" name="harga" placeholder="Masukkan Harga">
                          </div>
                        </div>
                        <!-- /.card-body -->
        
                        <div class="card-footer">
                          <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
</form>