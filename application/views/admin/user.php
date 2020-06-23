<button type="button" class="btn btn-success btn-sm mt-3" data-toggle="modal" data-target="#exampleModalLong">
  Tambah Pengguna
</button>


<div class="card mb-4 mt-3">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Data User
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i=1; foreach($user as $us):?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $us['nama_user']?></td>
                        <td><?= $us['username']?></td>
                        <td>
                            <button type="button" <?php if($us['id_user']!=$this->session->userdata('id_user')){echo 'style="display:none"';} ?> class="btn btn-info btn-sm" data-toggle="modal" data-target="#editUser<?=$us['id_user']?>">
                              edit
                            </button>

                            <a href="<?=base_url('admin/deleteUser')?>/<?=$us['id_user']?>" class="btn btn-danger btn-sm tombol-hapus <?php if($us['id_user']==$this->session->userdata('id_user')){echo 'disabled';} ?>">hapus</a>
                        </td>
                    </tr>
                <?php endforeach?>  
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
        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Pengguna</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/addUser')?>" method="post">
            <div class="form-group">
                <label for="">Nama </label>
                <input type="text" name="nama" class="form-control" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="">Username </label>
                <input type="text" name="username" class="form-control" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="">Password </label>
                <input type="password" id="txtNewPassword" class="form-control" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="">Ulangi Password </label>
                <input type="password" id="txtConfirmPassword" name="password" class="form-control" autocomplete="off">
            <div id="divCheckPasswordMatch"></div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" id="tbhUser" disabled class="btn btn-primary">Simpan Data</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php foreach($user as $edituser):?>
<div class="modal fade" id="editUser<?=$edituser['id_user']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Pengguna</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/editUser')?>" method="post">
            <div class="form-group">
                <label for="">Nama </label>
                <input type="hidden" name="id" class="form-control" autocomplete="off" value="<?=$edituser['id_user']?>">
                <input type="text" name="nama" class="form-control" autocomplete="off" value="<?=$edituser['nama_user']?>">
            </div>
            <div class="form-group">
                <label for="">Username </label>
                <input type="text" name="username" class="form-control" autocomplete="off" value="<?=$edituser['username']?>">
            </div>
            <h6>- Ganti Pasword <small><i>( opsional )</i></small> -</h6>
            
            <div class="form-group">
                <label for="">Password Baru</label>
                <input type="password" name="password" class="form-control " autocomplete="off">
            
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