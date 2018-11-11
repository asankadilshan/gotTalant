<?php  require_once('include/header.php');?>

<?php
if(isset($_GET['p_id'])){
            $pId12 = $_GET['p_id'];   
        }
        else{
            $pId12="";   
        }                
?>



<body class="admin">

<div class="row">
  <div class="col-md-2">
      
   
  </div>
  <div class="col-md-8 form-group">
               
    <?php echo ' <form  class="" action="yso_epf.php?p_id='.$pId12.'"> ';?>
    <h2>Enter the EPF No:</h2>
    <input type="text" class="form-control" name="p_id" >   
    <br>
    <button class="btn btn-info btn-lg btn-block" type="submit" >submit</button>
    </form>
  </div>
  <div class="col-md-2"></div>
</div>
         
<?php  require_once('include/footer.php');?>
</body>