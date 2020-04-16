<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Excel import!</title>
  </head>
  <body>
  	<div class="container" align="center">
  		<h1>Excel import</h1>
  		<table class="table table-hover">
  <thead>
  <?php
                            if(!empty(session()->getFlashdata('success'))){ ?>
                            <div class="alert alert-success">
                                <?php echo session()->getFlashdata('success');?>
                            </div>     
                            <?php } ?>

    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>
  	<?php
	if( ! empty($siswa)){
		foreach($siswa as $data){ ?>
				 <tr>
				<th scope="row"><?php echo $data->no?></th>
				<td><?php echo $data->name?></td>
				<td><?php echo $data->gender?></td>
				<td><?php echo $data->address?></td>
				</tr>

			<?php }?>
	<?php }else{ 
		echo "<tr><td colspan='4'>NO data</td></tr>";
	}
	?>
   
   
  </tbody>
</table>

<a href="<?php echo base_url("siswa/form"); ?>" class="btn btn-info">upload</a>
  	</div>
    
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>