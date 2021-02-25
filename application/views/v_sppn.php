<html>
<head>
    <title>SPPN</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/v_sppn.css">
</head>
<body>-
<div class="container">
    <br><br><br>
    <div class="row">
        <div class="col-sm-4 py-2">
            <div class="card card-body h-100">
                <h3 class="card-title">Data Diri</h3>
                <?php foreach($sppn as $row): ?>
                <p> Nama : <?php echo $row->NAMA; ?>  </p>
                <p> NUPTK : <?php echo $row->NUPTK; ?>  </p>
                <p> NRG : <?php echo $row->NRG; ?>  </p>
                <p>Tempat/Tanggal lahir : <?php echo $row->TEMPAT_LAHIR; ?>/<?php echo $row->TANGGAL_LAHIR; ?>  </p>
                <?php endforeach; ?>  
            </div>
        </div>
        <div class="col-sm-4 py-2">
            <div class="card h-100 card-body">
                <?php foreach($sppn as $row): ?>
                    <h3 class="card-title">Tempat Penugasan</h3>
                    <p class="card-text"><?php echo $row->TEMPAT_TUGAS; ?></p>
                    <p class="card-text">Kecamatan : <?php echo $row->KECAMATAN; ?></p>
                    <p class="card-text">Kabupaten/Kota : <?php echo $row->KABKOT; ?></p>
                    <p class="card-text">Provinsi : <?php echo $row->PROVINSI; ?></p>
                <?php endforeach; ?>  
            </div>
        </div>
        <div class="col-sm-4 py-2">
            <div class="card h-100 card-body">
                <h3 class="card-title">Rekening</h3>
                <p class="card-text">Nama Bank : <?php echo $row->NAMA_BANK; ?></p>
                <p class="card-text">No. Rekening : <?php echo $row->NO_REK; ?></p>
                <p class="card-text">Nama Rekening : <?php echo $row->NAMA_REK; ?></p>
            </div>
        </div>
        <div class="col-sm-4 py-2">
            <div class="card text-white" style="background-color:#0e3f5f">
                <div class="card-body">
                    <h3 class="card-title">Triwulan 1</h3>
                    <?php foreach($sppn as $row): ?>
                        <p class="card-text">Triwulan 1 : Rp.<?php echo $row->TOTAL; ?>,-</p>
                        <p class="card-text">Status : <?php echo $row->STATUS; ?></p>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="col-sm-4 py-2">
            <div class="card text-white" style="background-color:#0e3f5f">
                <div class="card-body">
                    <h3 class="card-title">Triwulan 2</h3>
                    <?php foreach($tw2 as $row): ?>
                        <p class="card-text">Total : Rp.<?php echo $row->TOTAL; ?>,-</p>
                        <p class="card-text">Status : <?php echo $row->STATUS; ?></p>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="col-sm-4 py-2">
            <div class="card text-white" style="background-color:#0e3f5f">
                <div class="card-body">
                    <h3 class="card-title">Triwulan 3</h3>
                    <?php foreach($tw3 as $row): ?>
                        <p class="card-text">Total : Rp.<?php echo $row->TOTAL; ?>,-</p>
                        <p class="card-text">Status : <?php echo $row->STATUS; ?></p>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="col-sm-4 py-2">
            <div class="card text-white" style="background-color:#0e3f5f">
                <div class="card-body">
                    <h3 class="card-title">Triwulan 4</h3>
                    <?php foreach($tw4 as $row): ?>
                        <p class="card-text">Total : Rp.<?php echo $row->TOTAL; ?>,-</p>
                        <p class="card-text">Status : <?php echo $row->STATUS; ?></p>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="col-sm-4 py-2">
            <div class="card h-75 card-body">
            <a href="http://localhost/projekpkl/index.php/c_mainmenuenglish" class="btn">MAIN MENU</a>
            </div>
        </div>
        <div class="col-sm-4 py-2">
            <div class="card h-75 card-body">
            <a href="http://[::1]/PROJEKPKL/" class="btn">LOGOUT</a>
            </div>
        </div>
        <!-- <div class="col-sm-4 py-2">
            <div class="card text-white" style="background-color:#ff8000">
                <div class="card-body">
                    <h3 class="card-title">Cari Lagi :</h3>
                    <a href="http://[::1]/PROJEKPKL/" class="btn btn-outline-light">Search</a>
                </div>
            </div>
        </div> -->
    </div>
</div>                              
</body>
</html>