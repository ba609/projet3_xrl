<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

</head>

<body>
   

<?php
    include("dba.php");
    include("page.php");

$reqts = "SELECT * FROM PRODUIT ";
				if($results = $bdd->query($reqts))
				{
				?>
				<!-- <table align="center" border="1">
						<tr style="font-weight: bold; font-size: 25px ">
							<td>ID</td><td>NOMS</td><td>LIBELLES</td>
							<td>PRIX</td>
                            <td>ACTION</td>
							
						</tr> -->

                        <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NOMS</th>
                            <th scope="col">LIBELLE</th>
                            <th scope="col">PRIX</th>
                            <th scope="col">ACTION</th>
                            </tr>
                        </thead>

				<?php
					while($rows=$results->fetch(PDO::FETCH_ASSOC))
                            {
                              ?>
                            <tr>
                                <td><?php echo $rows["id"]; ?> </td>
                                <td><?php echo $rows["noms"]; ?> </td>
                                <td><?php echo $rows["libelle"]; ?> </td>
                                <td><?php echo $rows["prix"]; ?> </td>
                               
                                <td>
                                <a href="href='modifier.php?id=<?= $row["id"]; ?>"><i class="fa-solid fa-pen-to-square text-success"></i></a>&nbsp;&nbsp;&nbsp;
                                    <a href="href='supprimer.php?id=<?= $row["id"]; ?>"><i class="fa-solid fa-trash text-danger"></i></a>
                                    
                                </td>
                            </tr>
                        <?php
					        }
                        }
				?>
				</table>
            
</body>
  <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</html>