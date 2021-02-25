<html>
<head>
    <title>Total perTriwulan</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/v_total.css">
</head>
<body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
<header>
    <h2>TOTAL PENGERLUARAN TK</h2>
</header>
<Br><Br><Br><Br>
<div class="container">
    <div class="row">
    <div class="col-md-3">
      <div class="card-counter success" style="background-color:#ff8000">
        <i class="fa fa-database"></i>
        <span class="count-numbers">Rp.<?php echo $tktw1total; ?>,-</span>
        <span class="count-name">Triwulan 1</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter success" style="background-color:#ff8000">
        <i class="fa fa-database"></i>
        <span class="count-numbers">Rp.<?php echo $tktw2total; ?>,-</span>
        <span class="count-name">Triwulan 2</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter success" style="background-color:#ff8000">
        <i class="fa fa-database"></i>
        <span class="count-numbers">Rp.<?php echo $tktw3total; ?>,-</span>
        <span class="count-name">Triwulan 3</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter success" style="background-color:#ff8000">
        <i class="fa fa-database"></i>
        <span class="count-numbers">Rp.<?php echo $tktw4total; ?>,-</span>
        <span class="count-name">Triwulan 4</span>
      </div>
    </div>
  </div>
</div>

<!-- <div class="container">
    <br><br><br>
    <div class="row">
        <div class="col-sm-4 py-2">
            <div class="card card-body h-100">
                <h3 class="card-title">Triwulan 1</h3>
                <p> <?php echo $tktw1total; ?>  </p>
            </div>
        </div>
        <div class="col-sm-4 py-2">
            <div class="card h-100 card-body">
                    <h3 class="card-title">Triwulan 2</h3>
                    <p class="card-text"><?php echo $tktw2total; ?></p>
            </div>
        </div>
        <div class="col-sm-4 py-2">
            <div class="card text-white" style="background-color:#000066">
                <div class="card-body">
                    <h3 class="card-title">Triwulan 3</h3>
                        <p class="card-text"><?php echo $tktw3total; ?></p>
                </div>
            </div>
        </div>
        <div class="col-sm-4 py-2">
            <div class="card text-white" style="background-color:#000066">
                <div class="card-body">
                    <h3 class="card-title">Triwulan 4</h3>
                        <p class="card-text"><?php echo $tktw4total; ?></p>
                </div>
            </div>
        </div>
        <div class="col-sm-4 py-2">
            <div class="card h-100 card-body">
            <a href="http://[::1]/PROJEKPKL/" class="btn">LOGOUT</a>
            </div>
        </div>
    </div>
</div>                               -->
</body>
</html>

<!-- <p><table>
    <tr>
        <td>total tk tw1 </td>
        <td><?php echo $tktw1total; ?></td>
    </tr>
    <tr>
        <td>total tk tw2 </td>
        <td><?php echo $tktw2total; ?></td>
    </tr>
    <tr>
        <td>total tk tw3 </td>
        <td><?php echo $tktw3total; ?></td>
    </tr>
    <tr>
        <td>total tk tw4 </td>
        <td><?php echo $tktw4total; ?></td>
    </tr>
</table></p> -->