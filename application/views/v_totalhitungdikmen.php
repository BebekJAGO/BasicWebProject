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
    <h2>TOTAL PENGERLUARAN DIKMEN</h2>
</header>
<Br><Br><Br><Br>
<div class="container">
    <div class="row">
    <div class="col-md-3">
      <div class="card-counter success" style="background-color:#ff8000">
        <i class="fa fa-database"></i>
        <span class="count-numbers">Rp.<?php echo $dikmentw1total; ?>,-</span>
        <span class="count-name">Triwulan 1</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter success" style="background-color:#ff8000">
        <i class="fa fa-database"></i>
        <span class="count-numbers">Rp.<?php echo $dikmentw2total; ?>,-</span>
        <span class="count-name">Triwulan 2</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter success" style="background-color:#ff8000">
        <i class="fa fa-database"></i>
        <span class="count-numbers">Rp.<?php echo $dikmentw3total; ?>,-</span>
        <span class="count-name">Triwulan 3</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter success" style="background-color:#ff8000">
        <i class="fa fa-database"></i>
        <span class="count-numbers">Rp.<?php echo $dikmentw4total; ?>,-</span>
        <span class="count-name">Triwulan 4</span>
      </div>
    </div>
  </div>
</div>
</body>
</html>

<!-- <p><table>
    <tr>
        <td>total dikmen tw1 </td>
        <td><?php echo $dikmentw1total; ?></td>
    </tr>
    <tr>
        <td>total dikmen tw2 </td>
        <td><?php echo $dikmentw2total; ?></td>
    </tr>
    <tr>
        <td>total dikmen tw3 </td>
        <td><?php echo $dikmentw3total; ?></td>
    </tr>
    <tr>
        <td>total dikmen tw4 </td>
        <td><?php echo $dikmentw4total; ?></td>
    </tr>
</table></p> -->