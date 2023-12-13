
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if (isset ($_POST['email']) && str_contains($_POST['email'], '@') && str_contains($_POST['email'], '.')){ ?>
        <div class="alert alert-success" role="alert">
            A simple success alert—check it out!
        </div>
         <?php } ?>

    <?php     
    if (empty ($_POST['email']) && isset ($_POST['email']) ){ ?>   
    <div class="alert alert-danger" role="alert">
        A simple danger alert—check it out!
    </div>
    <?php } ?>


        
    
</body>
</html>