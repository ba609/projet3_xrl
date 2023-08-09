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

$reqt = "SELECT * FROM PERSONNE order by nom asc";
				if($result = $bdd->query($reqt))
				{
				?>
				
                        <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NOM</th>
                            <th scope="col">PRENOM</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">PHONE</th>
                            <th scope="col">ACTION</th>
                            </tr>
                        </thead>

				<?php
					while($row=$result->fetch(PDO::FETCH_ASSOC))
                            {
                              ?>
                            <tr>
                            <td><?php echo $row["idpers"]; ?> </td>
                                <td><?php echo $row["nom"]; ?> </td>
                                <td><?php echo $row["prenom"]; ?> </td>
                                <td><?php echo $row["email"]; ?> </td>
                                <td><?php echo $row["phone"]; ?> </td>
                                <!-- <td><?php echo $row["5"]; ?> </td> -->
                                <td>
                                   <a href="href='modifier.php?id=<?=$row["idpers"]; ?>" ><i class="fa-solid fa-pen-to-square text-success"></i></a> </button>&nbsp;&nbsp;&nbsp;
                                    <a href="href='supprimer.php?id=<?= $row["idpers"]; ?>"><i class="fa-solid fa-trash text-danger"></i></a>
                                   
                                </td>
                            </tr>
                        <?php
					        }
                        }
                        
                        
				?>
				</table>
            
</body>

</html>