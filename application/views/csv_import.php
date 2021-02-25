<html>
<head>
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/bootstrap-css.css">	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Insert Data</title>
</head>
<body>
	<header>
        <h2>INSERT DATA</h2>
    </header>
	<br>
	<form method="post" enctype="multipart/form-data">
		<?php
			include("csv/impcsvtktw1.php");
			$csv = new impcsvtktw1();
			if(isset($_POST['sub'])){
				var_dump($_FILES['file']);
				$csv->importtktw1($_FILES['file']['tmp_name']);
			}
		?>
		<?php
			include("csv/impcsvtktw2.php");
			$csv = new impcsvtktw2();
			if(isset($_POST['sub2'])){
				var_dump($_FILES['tktw2']);
				$csv->importtktw2($_FILES['tktw2']['tmp_name']);
			}
		?>
		<?php
			include("csv/impcsvtktw3.php");
			$csv = new impcsvtktw3();
			if(isset($_POST['sub3'])){
				var_dump($_FILES['tktw3']);
				$csv->importtktw3($_FILES['tktw3']['tmp_name']);
			}
		?>
		<?php
			include("csv/impcsvtktw4.php");
			$csv = new impcsvtktw4();
			if(isset($_POST['sub4'])){
				var_dump($_FILES['tktw3']);
				$csv->importtktw4($_FILES['tktw4']['tmp_name']);
			}
		?>
		<div class ="header2">JENJANG TK</div>
		<div class="card-group">
		<div class="card" style="width: 18rem;">
			<div class="card-body">
				<h5 class="card-title">Input data TK Triwulan 1</h5>
				<p class="card-text">Masukkan file .csv TK triwulan 1</p>
				<input type="file" name="file">
				<Button class="btn btn-primary" type="submit" name="sub" value="Import">IMPORT</button>
			</div>
		</div>
		<div class="card" style="width: 18rem;">
			<div class="card-body">
				<h5 class="card-title">Input data TK Triwulan 2</h5>
				<p class="card-text">Masukkan file .csv TK triwulan 2</p>
				<input type="file" name="tktw2">
				<Button class="btn btn-primary" type="submit" name="sub2" value="Import">IMPORT</button>
			</div>
		</div>
		<div class="card" style="width: 18rem;">
			<div class="card-body">
				<h5 class="card-title">Input data TK Triwulan 3</h5>
				<p class="card-text">Masukkan file .csv TK triwulan 3</p>
				<input type="file" name="tktw3">
				<Button class="btn btn-primary" type="submit" name="sub3" value="Import">IMPORT</button>
			</div>
		</div>
		<div class="card" style="width: 18rem;">
			<div class="card-body">
				<h5 class="card-title">Input data TK Triwulan 4</h5>
				<p class="card-text">Masukkan file .csv TK triwulan 4</p>
				<input type="file" name="tktw2">
				<Button class="btn btn-primary" type="submit" name="sub4" value="Import">IMPORT</button>
			</div>
		</div>
		</div>
		
		<br>

		<?php
			include("csv/impcsvkepsektw1.php");
			$csv = new impcsvkepsektw1();
			if(isset($_POST['sub5'])){
				var_dump($_FILES['kepsektw1']);
				$csv->importkepsektw1($_FILES['kepsektw1']['tmp_name']);
			}
		?>
		<?php
			include("csv/impcsvkepsektw2.php");
			$csv = new impcsvkepsektw2();
			if(isset($_POST['sub6'])){
				var_dump($_FILES['kepsektw2']);
				$csv->importkepsektw2($_FILES['kepsektw2']['tmp_name']);
			}
		?>
		<?php
			include("csv/impcsvkepsektw3.php");
			$csv = new impcsvkepsektw3();
			if(isset($_POST['sub7'])){
				var_dump($_FILES['kepsektw3']);
				$csv->importkepsektw3($_FILES['kepsektw3']['tmp_name']);
			}
		?>
		<?php
			include("csv/impcsvkepsektw4.php");
			$csv = new impcsvkepsektw4();
			if(isset($_POST['sub8'])){
				var_dump($_FILES['kepsektw4']);
				$csv->importkepsektw4($_FILES['kepsektw4']['tmp_name']);
			}
		?>

		<div class ="header2">JENJANG KEPALA SEKOLAH</div>
		<div class="card-group">
		<div class="card" style="width: 18rem;">
			<div class="card-body">
				<h5 class="card-title">Input data KEPSEK Triwulan 1</h5>
				<p class="card-text">Masukkan file .csv Kepala Sekolah triwulan 1</p>
				<input type="file" name="kepsektw1">
				<Button class="btn btn-primary" type="submit" name="sub5" value="Import">IMPORT</button>
			</div>
		</div>
		<div class="card" style="width: 18rem;">
			<div class="card-body">
				<h5 class="card-title">Input data TK Triwulan 2</h5>
				<p class="card-text">Masukkan file .csv TK triwulan 2</p>
				<input type="file" name="kepsektw2">
				<Button class="btn btn-primary" type="submit" name="sub6" value="Import">IMPORT</button>
			</div>
		</div>
		<div class="card" style="width: 18rem;">
			<div class="card-body">
				<h5 class="card-title">Input data TK Triwulan 3</h5>
				<p class="card-text">Masukkan file .csv TK triwulan 3</p>
				<input type="file" name="kepsektw3">
				<Button class="btn btn-primary" type="submit" name="sub7" value="Import">IMPORT</button>
			</div>
		</div>
		<div class="card" style="width: 18rem;">
			<div class="card-body">
				<h5 class="card-title">Input data TK Triwulan 4</h5>
				<p class="card-text">Masukkan file .csv TK triwulan 4</p>
				<input type="file" name="kepsektw4">
				<Button class="btn btn-primary" type="submit" name="sub8" value="Import">IMPORT</button>
			</div>
		</div>
		</div>

		<br>
		
		<?php
			include("csv/impcsvdikdastw1.php");
			$csv = new impcsvdikdastw1();
			if(isset($_POST['sub9'])){
				var_dump($_FILES['dikdastw1']);
				$csv->importdikdastw1($_FILES['dikdastw1']['tmp_name']);
			}
		?>
		<?php
			include("csv/impcsvdikdastw2.php");
			$csv = new impcsvdikdastw2();
			if(isset($_POST['sub10'])){
				var_dump($_FILES['dikdastw2']);
				$csv->importdikdastw2($_FILES['dikdastw2']['tmp_name']);
			}
		?>
		<?php
			include("csv/impcsvdikdastw3.php");
			$csv = new impcsvdikdastw3();
			if(isset($_POST['sub11'])){
				var_dump($_FILES['dikdastw3']);
				$csv->importdikdastw3($_FILES['dikdastw3']['tmp_name']);
			}
		?>
		<?php
			include("csv/impcsvdikdastw4.php");
			$csv = new impcsvdikdastw4();
			if(isset($_POST['sub12'])){
				var_dump($_FILES['dikdastw4']);
				$csv->importdikdastw4($_FILES['dikdastw4']['tmp_name']);
			}
		?>

		<div class ="header2">JENJANG DIKDAS</div>
		<div class="card-group">
		<div class="card" style="width: 18rem;">
			<div class="card-body">
				<h5 class="card-title">Input data DIKDAS Triwulan 1</h5>
				<p class="card-text">Masukkan file .csv DIKDAS triwulan 1</p>
				<input type="file" name="dikdastw1">
				<Button class="btn btn-primary" type="submit" name="sub9" value="Import">IMPORT</button>
			</div>
		</div>
		<div class="card" style="width: 18rem;">
			<div class="card-body">
				<h5 class="card-title">Input data DIKDAS Triwulan 2</h5>
				<p class="card-text">Masukkan file .csv DIKDAS triwulan 2</p>
				<input type="file" name="dikdastw2">
				<Button class="btn btn-primary" type="submit" name="sub10" value="Import">IMPORT</button>
			</div>
		</div>
		<div class="card" style="width: 18rem;">
			<div class="card-body">
				<h5 class="card-title">Input data DIKDAS Triwulan 3</h5>
				<p class="card-text">Masukkan file .csv DIKDAS triwulan 3</p>
				<input type="file" name="dikdastw3">
				<Button class="btn btn-primary" type="submit" name="sub11" value="Import">IMPORT</button>
			</div>
		</div>
		<div class="card" style="width: 18rem;">
			<div class="card-body">
				<h5 class="card-title">Input data DIKDAS Triwulan 4</h5>
				<p class="card-text">Masukkan file .csv DIKDAS triwulan 4</p>
				<input type="file" name="dikdastw4">
				<Button class="btn btn-primary" type="submit" name="sub12" value="Import">IMPORT</button>
			</div>
		</div>
		</div>

		<br>

		<?php
			include("csv/impcsvdikmentw1.php");
			$csv = new impcsvdikmentw1();
			if(isset($_POST['sub13'])){
				var_dump($_FILES['dikmentw1']);
				$csv->importdikmentw1($_FILES['dikmentw1']['tmp_name']);
			}
		?>
		<?php
			include("csv/impcsvdikmentw2.php");
			$csv = new impcsvdikmentw2();
			if(isset($_POST['sub14'])){
				var_dump($_FILES['dikmentw2']);
				$csv->importdikmentw2($_FILES['dikmentw2']['tmp_name']);
			}
		?>
		<?php
			include("csv/impcsvdikmentw3.php");
			$csv = new impcsvdikmentw3();
			if(isset($_POST['sub15'])){
				var_dump($_FILES['dikmentw3']);
				$csv->importdikmentw3($_FILES['dikmentw3']['tmp_name']);
			}
		?>
		<?php
			include("csv/impcsvdikmentw4.php");
			$csv = new impcsvdikmentw4();
			if(isset($_POST['sub16'])){
				var_dump($_FILES['dikmentw4']);
				$csv->importdikmentw4($_FILES['dikmentw4']['tmp_name']);
			}
		?>

		<div class ="header2">JENJANG DIKMEN</div>
		<div class="card-group">
		<div class="card" style="width: 18rem;">
			<div class="card-body">
				<h5 class="card-title">Input data DIKMEN Triwulan 1</h5>
				<p class="card-text">Masukkan file .csv DIKMEN triwulan 1</p>
				<input type="file" name="dikmentw1">
				<Button class="btn btn-primary" type="submit" name="sub13" value="Import">IMPORT</button>
			</div>
		</div>
		<div class="card" style="width: 18rem;">
			<div class="card-body">
				<h5 class="card-title">Input data DIKMEN Triwulan 2</h5>
				<p class="card-text">Masukkan file .csv DIKMEN triwulan 2</p>
				<input type="file" name="dikmentw2">
				<Button class="btn btn-primary" type="submit" name="sub14" value="Import">IMPORT</button>
			</div>
		</div>
		<div class="card" style="width: 18rem;">
			<div class="card-body">
				<h5 class="card-title">Input data DIKMEN Triwulan 3</h5>
				<p class="card-text">Masukkan file .csv DIKMEN triwulan 3</p>
				<input type="file" name="dikmentw3">
				<Button class="btn btn-primary" type="submit" name="sub15" value="Import">IMPORT</button>
			</div>
		</div>
		<div class="card" style="width: 18rem;">
			<div class="card-body">
				<h5 class="card-title">Input data DIKMEN Triwulan 4</h5>
				<p class="card-text">Masukkan file .csv DIKMEN triwulan 4</p>
				<input type="file" name="dikmentw4">
				<Button class="btn btn-primary" type="submit" name="sub16" value="Import">IMPORT</button>
			</div>
		</div>
		</div>

		<!-- <p>Input data TK Triwulan 2</p>
		<input type="file" name="tktw2">
		<input type="submit" name="sub2" value="Import">

		<br>

		<p>Input data TK Triwulan 3</p>
		
		<input type="file" name="tktw3">
		<input type="submit" name="sub3" value="Import"> 

		<br>

		<p>Input data TK Triwulan 4</p>
		
		<input type="file" name="tktw4">
		<input type="submit" name="sub4" value="Import"> 

		<br> -->
	</form>
</body> 
</html>