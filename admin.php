<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="include/styleFooter.css"/>
		<link rel="stylesheet" href="include/header.css"/>
		
		<title>Abder Auto vente de vehicules</title>
	</head>
	<body>
	
		<header>
			<?php include ("include/header.php");?>
		</header>
		
		<section class="row">
			
			<aside class="row col-lg-4">
				
				<div class="col-lg-12 asideAdmin">Catégories</div>
				<div class="col-lg-12 asideAdmin">Liste des clients</div>
				<div class="col-lg-12 asideAdmin">Liste des commandes</div>
				<div class="col-lg-12 asideAdmin">CGV</div>
				<div class="col-lg-12 asideAdmin">Mention légales</div>
			
			</aside>
			
			<article class="col-lg-offset-1 col-lg-7">
			
				<table>
					<tr>
						<th>Références</th>
						<th>Clients</th>
						<th>Date</th>
						<th>Prix TTC</th>
					</tr>
				   <tr>
					   <td>MO5896</td>
					   <td>Théo</td>
					   <td>24/01/2017</td>
					   <td>50,00€</td>
					   
				   </tr>
				    <tr>
					   <td>MO5897</td>
					   <td>Laurent</td>
					   <td>16/01/2017</td>
					   <td>50,00€</td>
				   </tr>
				   
				</table>
				
				<div class="center container">
				  <ul class="pagination">
					<li><a href="#">&laquo;</a></li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">&raquo;</a></li>
				  </ul>
				</div>
				
			</article>
			
			
		
		</section>
	
		<footer class="row">
			<?php include ("include/footer.php");?>
		</footer>
		

	</body>
	
</html>