<!-- Button trigger modal -->
<button type="button" class="btn btn-success btn-sm mt-3" data-toggle="modal" data-target="#exampleModalLong">
  Tambah Kategori Aktiva
</button>



<div class="card mb-4 mt-3">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Data Katagori
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i=1;foreach($kategori as $kat):?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $kat['nama_kategori']?></td>
                        <td>
                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modalEdit<?=$kat['id_kategori']?>">
                          edit
                        </button>
                            <a href="<?=base_url('admin/deleteKategori')?>/<?= $kat['id_kategori']?>" class="btn btn-danger btn-sm tombol-hapus">hapus</a>
                        </td>
                    </tr>
                <?php endforeach ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/addKategori')?>" method="post">
            <div class="form-group">
                <label for="">Nama Kategori</label>
                <input type="text" name="nama" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Deskripsi Kategori</label>
                <textarea name="deskripsi" id="" cols="30" rows="5" class="form-control"></textarea>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan Data</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php foreach($kategori as $editkat):?>
<div class="modal fade" id="modalEdit<?=$editkat['id_kategori']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/editKategori')?>" method="post">
            <div class="form-group">
                <label for="">Nama Kategori</label>
                <input type="hidden" name="id" class="form-control" value="<?=$editkat['id_kategori']?>">
                <input type="text" name="nama" class="form-control" value="<?=$editkat['nama_kategori']?>">
            </div>
            <div class="form-group">
                <label for="">Deskripsi Kategori</label>
                <textarea name="deskripsi" id="" cols="30" rows="5" class="form-control"><?=$editkat['deskripsi']?></textarea>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan Data</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php endforeach ?>