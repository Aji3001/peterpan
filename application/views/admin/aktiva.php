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
                        <th>Tanggal Pembuatan</th>
                        <th>Nama Aktiva</th>
                        <th>Kategori</th>
                        <th>Tgl Pembelian</th>
                        <th>Tahun Penyusutan</th>
                        <th>Umur Ekonomis</th>
                        <th>Harga Perolehan <small>( Rp. )</small></th>
                        <th>Metode Penyusutan</th>
                        <th>Residu</th>
                        <th>Penyusutan <small>( Rp. )</small></th>
                        <th>Akumulasi Penyusutan <small>( Rp. )</small></th>
                        <th>Harga Buku <small>( Rp. )</small></th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i=1;foreach($aktiva as $akt):?>
                    <tr>
                        <td><?=$i++?></td>
                        <td><?=$akt['tgl_dibuat']?></td>
                        <td><?=$akt['nama_aset']?></td>
                        <td><?=$akt['nama_kategori']?></td>
                        <td><?=$akt['tanggal']?></td>
                        
                        <td><?php
                            $date = DateTime::createFromFormat("Y-m-d", $akt['tgl_dibuat']);
                            echo $date->format("Y")+$akt['umur_ekonomis'];
                        
                        ?></td>
                        <td><?=$akt['umur_ekonomis']?></td>
                        <td><?=$money_number = number_format($akt['harga_perolehan'],0,',','.');?></td>
                        <td><?php if($akt['metode_penyusutan']=="lurus"){echo 'garis lurus';}else{echo 'saldo menurun ganda';};?></td>
                        <td><?=number_format($akt['residu'],0,',','.');?></td>
                        <td><?=number_format($akt['nilai_setelah_penyusutan'],0,',','.');?></td>
                        <td><?=number_format($akt['nilai_setelah_penyusutan']*$akt['umur_ekonomis'],0,',','.');?></td>
                        <td><?=number_format($akt['harga_perolehan']-($akt['nilai_setelah_penyusutan']*$akt['umur_ekonomis']),0,',','.');?></td>
                        
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