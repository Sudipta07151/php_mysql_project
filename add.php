<?php

include('config/db_config.php');
$title=$ingredients=$email='';
$errors=["title"=>"","ingredients"=>"","email"=>""];
	if(isset($_POST['submit'])){
		$email=$_POST['email'];
		$ingredients=$_POST['ingredients'];
		$title=$_POST['title'];
		if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
			$errors['email']='PLEASE ENTER A VALID EMAIL ID';
		}
		if(!preg_match('/^[a-zA-Z\s]+$/',$title)){
			$errors['title']='TITLE MUST BE LETTERS AND SPACES';
		}
		if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/',$ingredients)){
			$errors['ingredients']='INGREDIENTS MUST BE LETTERS AND SPACES ONLY(comma seperated)';
        }
        if(array_filter($errors))
        {}
        else
        {
			// header('Location: pizza.php');
			$email=mysqli_real_escape_string($conn,$_POST['email']);
			$title=mysqli_real_escape_string($conn,$_POST['title']);
			$ingredients=mysqli_real_escape_string($conn,$_POST['ingredients']);
			$sql="INSERT INTO pizzas(email,title,ingredients) VALUES('$email','$title','$ingredients')";
			if(mysqli_query($conn,$sql)){
				header('Location: pizza.php');
			}else{
				echo "error".mysqli_error($conn);
			}
        }
    }
?>
<section>
			<form action="add.php" method="POST"> 
				<label>ADD A PIZZA</label>
				<label for="email">email</label>
				<input type="text" name="email" id="email" required value="<?php echo htmlspecialchars($email); ?>">
				<p class="err"><?php echo $errors['email'];?></p>
				<label for="title">Pizza Title</label>
				<input type="text" name="title" id="title"  required value= "<?php echo htmlspecialchars($title);?>"">
				<p class="err"><?php echo $errors['title'];?></p>
				<label for="ingredients">Ingredients</label>
				<input type="text" name="ingredients" id="ingredients" required placeholder="comma-seperated" value= "<?php echo htmlspecialchars($ingredients);?>">
				<p class="err"><?php echo $errors['ingredients'];?></p>
				<input type="submit" name="submit" value="SUBMIT">
            </form>
</section>
<?php include('templates/footer.php'); ?>   
<style>
	section{
		height: 80%;
		margin-top: 50px;
		display: flex;
		flex-direction: column;
		font-size: 20px;
		font-family: fantasy;
	}
	form{
		background-color: white;
		width: 20%;
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
		margin: 0 auto;
		margin-top: 20px;
		padding: 20px;
	}
	label,input{
		padding:10px;
		width: 100%;
		font-size: 20px;
	}
	input {
	text-align: center;
	}
	input[type=submit]{
		margin-top: 15px;
		background-color: yellowgreen;
	}
	label:first-child{
		text-align: center;
	}
	.err{
		color:red;
	}
</style>