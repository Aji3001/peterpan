<?php foreach($aktiva as $akt):?>
<div class="row mt-3">
    <div class="col-md-6">
        <div class="card card-body border-info">
            <h5>Edit Aktiva Tetap</h5>
            <form action="<?=base_url('admin/do_editAktiva')?>" method="post">
                <div class="form-group mt-3">
                    <label for="">Nama Aktiva Tetap</label>
                    <input type="hidden" class="form-control" name="id" value="<?=$akt['id_aset']?>">
                    <input type="text" class="form-control" name="nama" value="<?=$akt['nama_aset']?>">
                </div>
                <div class="form-group mt-3">
                    <label for="">Kategori</label>
                    <select id="" class="form-control" name="kategori">
                    <option value="" selected disabled>- pilih kategori -</option>
                    <?php foreach($kategori as $kt):?>
                        <option value="<?= $kt['id_kategori']?>" <?php if($kt['id_kategori']==$akt['id_kategori']){echo'selected';}?>><?= $kt['nama_kategori']?></option>
                    <?php endforeach?>
                    </select>
                </div>
                <div class="form-group mt-3">
                    <label for="">Diperoleh Tanggal</label>
                    <input type="date" class="form-control" name="tanggal" value="<?=$akt['tanggal']?>">
                </div>
                <div class="form-group mt-3">
                    <label for="">Diperoleh dengan harga</label>
                    <input type="number" id="perolehan" class="form-control" name="harga" value="<?=$akt['harga_perolehan']?>">
                </div>
                <div class="form-group mt-3">
                    <label for="">Keterangan Lain</label>
                    <textarea name="keterangan" id="" cols="30" rows="10" class="form-control"><?=$akt['keterangan']?></textarea>
                    <script>
                        CKEDITOR.replace( 'keterangan' );
                    </script>
                </div>
                
         
        </div>
    </div>
    <div class="col-md-6">
        <div class="card card-body border-warning">
            <h5>Metode Penyusutan</h5>
            <div class="form-group mt-3">
                <label for="">Pilih Metode Penyusutan</label>
                <select id="metode" class="form-control" name="metode">
                    <option value="" selected disabled>-pilih metode-</option>
                    <option value="lurus" <?php if($akt['metode_penyusutan']=="lurus"){echo'selected';}?> >Penyusutan Garis Lurus</option>
                    <option value="ganda" <?php if($akt['metode_penyusutan']=="ganda"){echo'selected';}?>>Penyusutan Saldo Menurun Ganda </option>
                </select>
            </div>
            <div class="form-group mt-3">
                <label for="">Umur Ekonomis | <small>( jumlah bulan )</small></label>
                <input type="number" id="umur" class="form-control" name="umur" value="<?=$akt['umur_ekonomis']?>">
            </div>
            <div class="form-group" id="faktor" <?php if($akt['metode_penyusutan']=="ganda"){echo'style="display:none"';}?>>
                <label for="" id="labelFaktor">Residu</label>
                <input type="number" id="residu" class="form-control" name="residu" value="<?=$akt['residu']?>">
            </div>
            <a href="#" class="btn btn-warning btn-block mb-3" id="btnHitung">Hitung Penyusutan</a>
            <ul>
                <li>Nilai Setelah Penyusutan <br>
                    <b id="hasil"><?=$akt['nilai_setelah_penyusutan']?></b>
                    <input type="hidden" name="penyusutan" id="penyusutan" value="<?=$akt['nilai_setelah_penyusutan']?>">
                </li>
            </ul>
        <button type="submit" class="btn btn-success btn-block">Simpan Data</button>
        </form>
        </div>
    </div>
</div>
<?php endforeach?>