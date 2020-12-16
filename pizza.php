<?php 
 include('config/db_config.php');
 //write queries for all pizzas
 $sql='SELECT title,ingredients,id,created FROM pizzas ORDER BY created';

 //make queries and get result
 $result=mysqli_query($conn,$sql);

 //fetch resulting rows as an array
 $pizzas=mysqli_fetch_all($result,MYSQLI_ASSOC);
 mysqli_free_result($result);
 
 mysqli_close($conn);

//  print_r($pizzas);

?>

<!DOCTYPE html>
<html lang="en">
	<?php include('templates/header.php'); ?>
 	<h4>PIZZAS</h4>
	 <div class="container">
	 <?php foreach($pizzas as $pizza): ?>	 
	 	<div class="cards">
			 <div><?php echo $pizza['title']; ?></div>
			 <div>
				 <ul>
					<?php foreach(explode(',',$pizza['ingredients']) as $i ): ?>
					<li class="item"><?php echo $i ?></li>
					<?php endforeach ?>
			 	</ul>
			</div>
			 <div><?php echo $pizza['created']; ?></div>
			 <div style="padding-top:10px;"><a style="border:2px black solid; color:black; padding: 4px" href="details.php?id=<?php echo $pizza['id']?>">MORE INFO</a></div>
		 </div>
		 <?php endforeach ?>
	 </div>
	<?php include('templates/footer.php'); ?>
</html>

<style>
	h4{
		text-align: center;
		margin: 20px auto;
		font-size: 40px;
		font-family: fantasy;
	}
	.container{
		display: grid;
		grid-template-columns: repeat(3,1fr);
		max-width: 960px;
		margin:0 auto;
		grid-gap: 20px;
	}
	.cards{
		width: 100%;
		height: 100px;
		background-color: white;
		text-align: center;
		text-transform: uppercase;
		border: 2px gray solid;
	}
	.item{
		font-size: inherit;
		font-family: inherit;
		font-weight: inherit;
		color: black;
	}
</style>