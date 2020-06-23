<a href="<?=base_url('admin/addAktiva')?>" class="btn btn-sm btn-success mt-3">Tambah Aktiva Tetap</a>
<div class="card mb-4 mt-3">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Data Aktiva Tetap
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Aset</th>
                        <th>Diperoleh tgl</th>
                        <th>Harga <small>( Rp. )</small></th>
                        <th>Metode Penyusutan</th>
                        <th>Hasil <small>( Rp. )</small></th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i=1;foreach($aktiva as $akt):?>
                    <tr>
                        <td><?=$i++?></td>
                        <td><?=$akt['nama_aset']?></td>
                        <td><?=$akt['tanggal']?></td>
                        <td><?=$akt['harga_perolehan']?></td>
                        <td><?php if($akt['metode_penyusutan']=="lurus"){echo 'garis lurus';}else{echo 'saldo menurun ganda';};?></td>
                        <td><?=$akt['nilai_setelah_penyusutan']?></td>
                        <td>
                            <a href="<?=base_url('admin/editAktiva')?>/<?=$akt['id_aset']?>" class="btn btn-info btn-sm">edit</a>  
                            <a href="<?=base_url('admin/deleteAktiva')?>/<?=$akt['id_aset']?>" class="btn btn-danger btn-sm tombol-hapus">hapus</a>  
                        </td>
                    </tr>
                <?php endforeach?>
                </tbody>
            </table>
        </div>
    </div>
</div>