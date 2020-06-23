<h4 class="mt-3">Laporan</h4>

<div class="row mt-3">
    <div class="col-md-4">
        <div class="card card-body border-primary">
            <h6>Total Aktiva Tetap</h6>
            <div class="text-center">
                <h3><b><?php foreach($countAktiva as $a):?>
                        <?= $a['aset']?>
                        <?php endforeach?>
                </b></h3>
            </div>
        </div>
    </div>
   
    <div class="col-md-4">
        <div class="card card-body border-primary">
            <h6>Total Kategori Aktiva</h6>
            <div class="text-center">
                <h3><b><?php foreach($countKategori as $k):?>
                            <?= $k['kat']?>
                            <?php endforeach?>
                    </b></h3>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card card-body border-primary">
            <h6>Total User</h6>
            <div class="text-center">
            <h3><b><?php foreach($countUser as $u):?>
                            <?= $u['user']?>
                            <?php endforeach?>
                    </b></h3>
            </div>
        </div>
    </div>
</div>