<?php
include("functions/functions.php");
?>

<!DOCTYPE html>
<html>
    <head>
    <title> </title>
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?php echo $config['base_url'] ?>assets/css/style.css" />
        <script src="<?php echo $config['base_url'] ?>assets/js/jquery-1.11.1.min.js"></script>
        <script src="<?php echo $config['base_url'] ?>assets/js/jquery.validate.js"></script>
    <link rel="stylesheet" href="assets/css/animate.css">
    </head>

    <body>
        
         <div class='container'>

           <div class="row">
    <div class="col-md-2 swing animated">
        <h1> Comments</h1>
    </div>
    
    </div
</div>
     
                <div class='col-md-6'>
                
                    <?php
                        include("files/homec.php");
                    
                    ?>
                </div>

                <div class='col-md-6'>
                <?php
include("files/insert_comment.php");
?>
                </div>

            </div>
            
        </div

    </body>
</html>

