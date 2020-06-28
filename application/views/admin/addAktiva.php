<div class="row mt-3">
    <div class="col-md-6">
        <div class="card card-body border-info">
            <h5>Tambah Aktiva Tetap</h5>
            <form action="<?=base_url('admin/tbhAktiva')?>" method="post">
                <div class="form-group mt-3">
                    <label for="">Nama Aktiva Tetap</label>
                    <input type="text" class="form-control" name="nama">
                </div>
                <div class="form-group mt-3">
                    <label for="">Kategori</label>
                    <select id="" class="form-control" name="kategori">
                    <option value="" selected disabled>- pilih kategori -</option>
                    <?php foreach($kategori as $kt):?>
                        <option value="<?= $kt['id_kategori']?>"><?= $kt['nama_kategori']?></option>
                    <?php endforeach?>
                    </select>
                </div>
                <div class="form-group mt-3">
                    <label for="">Diperoleh Tanggal</label>
                    <input type="date" class="form-control" name="tanggal">
                </div>
                <div class="form-group mt-3">
                    <label for="">Diperoleh dengan harga</label>
                    <input type="number" id="perolehan" class="form-control" name="harga">
                </div>
                <div class="form-group mt-3">
                    <label for="">Keterangan Lain</label>
                    <textarea name="keterangan" id="" cols="30" rows="10" class="form-control"></textarea>
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
                    <option value="lurus">Penyusutan Garis Lurus</option>
                    <option value="ganda">Penyusutan Saldo Menurun Ganda </option>
                </select>
            </div>
            <div class="form-group mt-3">
                <label for="">Umur Ekonomis | <small>( jumlah tahun )</small></label>
                <input type="number" id="umur" class="form-control" name="umur">
            </div>
            <div class="form-group" id="faktor" style="display:none">
                <label for="" id="labelFaktor">Residu</label>
                <input type="number" id="residu" class="form-control" name="residu">
            </div>
            <a href="#" class="btn btn-warning btn-block mb-3" id="btnHitung">Hitung Penyusutan</a>
            <ul>
                <li>Nilai Setelah Penyusutan <br>
                    <b id="hasil"></b>
                    <input type="hidden" name="penyusutan" id="penyusutan">
                </li>
            </ul>
        <button type="submit" class="btn btn-success btn-block">Simpan Data</button>
        </form>
        </div>
    </div>
</div>