<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link rel="icon" href="dk.png">
	<title>Dewan Bootstrap - Collapse &amp; Accordion</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<style type="text/css">
		[aria-expanded="false"] > .expanded, [aria-expanded="true"] > .collapsed {
			display: none;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-dark bg-danger fixed-top">
	  <a class="navbar-brand" href="index.php" style="color: #fff;">
	    Dewan Komputer
	  </a>
	</nav>

	<div class="container mb-3">
		<h2 align="center" style="margin: 60px 10px 10px 10px;">Demo Collapse &amp; Accordion Bootstrap 4</h2><hr>
		<h3>Contoh Standar</h3>
		<p>
		  <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
		    Link with href
		  </a>
		  <button class="btn btn-primary ml-5" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
		    Button with data-target
		  </button>
		</p>
		<div class="collapse" id="collapseExample">
		  <div class="card card-body">
		    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
		  </div>
		</div>
		<hr>

		<h3>Multiple targets</h3>
		<p>
		  <a class="btn btn-primary" data-toggle="collapse" href="#elemen1" role="button" aria-expanded="false" aria-controls="elemen1">Elemen 1</a>
		  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#elemen2" aria-expanded="false" aria-controls="elemen2">Elemen 2</button>
		  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#elemen3" aria-expanded="false" aria-controls="elemen3">Elemen 3</button>
		  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="elemen1 elemen2 elemen3">Semua</button>
		</p>
		<div class="row">
		  <div class="col">
		    <div class="collapse multi-collapse" id="elemen1">
		      <div class="card card-body">
		        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
		      </div>
		    </div>
		  </div>
		  <div class="col">
		    <div class="collapse multi-collapse" id="elemen2">
		      <div class="card card-body">
		        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
		      </div>
		    </div>
		  </div>
		  <div class="col">
		    <div class="collapse multi-collapse" id="elemen3">
		      <div class="card card-body">
		        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
		      </div>
		    </div>
		  </div>
		</div>
		<hr>

		<div class="row mb-5">
			<div class="col-sm-6">
				<h3>Accordion Group (Active 1)</h3>
				<div class="accordion" id="accordionGroup">
				  <div class="card">
				  	<a class="card-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					    <div class="card-header" id="headingOne">
					        Accordion Group 1
					    </div>
				    </a>

				    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionGroup">
				      <div class="card-body">
				        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
				      </div>
				    </div>
				  </div>
				  <div class="card">
				  	<a class="card-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					    <div class="card-header" id="headingTwo">
					        Accordion Group 2
					    </div>
				    </a>
				    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionGroup">
				      <div class="card-body">
				        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
				      </div>
				    </div>
				  </div>
				  <div class="card">
				  	<a class="card-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					    <div class="card-header" id="headingThree">
					        Accordion Group 3
					    </div>
				    </a>
				    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionGroup">
				      <div class="card-body">
				        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
				      </div>
				    </div>
				  </div>
				</div>
			</div>
			<div class="col-sm-6">
				<h3>Accordion Group Dengan Icon Plus Minus</h3>
			    <div id="accordion">
					<div class="card">
						<div class="card-header">
							<a class="card-link" data-toggle="collapse" href="#menuone" aria-expanded="false" aria-controls="menuone">
								<span class="collapsed"><i class="fa fa-plus"></i></span> 
								<span class="expanded"><i class="fa fa-minus"></i></span> 
								Menu 1
							</a>
						</div>
						<div id="menuone" class="collapse">
						  <div class="card-body">
							Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						  </div>
						</div>
					</div>

				    <div class="card">
				        <div class="card-header">
						  	<a class="card-link" data-toggle="collapse" href="#menutwo" aria-expanded="false" aria-controls="menutwo">
								<span class="collapsed"><i class="fa fa-plus"></i></span> 
								<span class="expanded"><i class="fa fa-minus"></i></span> 
								Menu 2
							</a>
				        </div>
				        <div id="menutwo" class="collapse">
				          <div class="card-body">
							Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
				          </div>
				        </div>
				    </div>

				    <div class="card">
				        <div class="card-header">
							<a class="card-link" data-toggle="collapse"  href="#menu3" aria-expanded="false" aria-controls="menu3">
								<span class="collapsed"><i class="fa fa-plus"></i></span> 
								<span class="expanded"><i class="fa fa-minus"></i></span> 
								Menu 1
							</a>
				        </div>
				        <div id="menu3" class="collapse">
				          <div class="card-body">
							Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
				          </div>
				        </div>
				    </div>
				</div>
			</div>
		</div>
	</div>

	<div class="navbar bg-dark fixed-bottom">
		<div style="color: #fff;">© <?php echo date('Y'); ?> Copyright:
		    <a href="https://dewankomputer.com/"> Dewan Komputer</a>
		</div>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>