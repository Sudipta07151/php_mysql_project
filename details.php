<?php
    include('config/db_config.php');
    if(isset($_GET['id'])){
        $id=mysqli_real_escape_string($conn,$_GET['id']);
        $sql="SELECT * FROM pizzas WHERE id=$id";
        $result=mysqli_query($conn,$sql);
        $details=mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        mysqli_close($conn);
    }
?>
<!DOCTYPE html>
<html>
    <?php include('templates/header.php'); ?>
        <h6>DETAILS</h4>
        <div class="wrapper">
            <div class="card">
                <?php if($details): ?>
                <div><?php echo $details['email'];?></div>
                <div><?php echo $details['created'];?></div>
                <?php else: ?>
                <div>NO PIZZA FOUND!⛔</div>
                <?php endif; ?>
            </div>
        </div>
    <?php include('templates/footer.php'); ?>   
</html>
<style>
h6{
    text-align: center;
    font-size: 30px;
    font-family: fantasy;
    font-weight: 200;
    letter-spacing: 2px;
}
.wrapper{
    display: flex;
    justify-content: center;
    align-items:center;
    width: 100%;
    height: 60vh;
}
.card{
    background-color: white;
    width: 200px;
    height:auto;
    text-align: center;
    font-size: 20px;
}
</style>

