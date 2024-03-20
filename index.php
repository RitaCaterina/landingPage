<?php require 'process_form.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   
    
    <form method="post" action="<?php echo ($_SERVER["PHP_SELF"]);?>">
    <h2>Fill the form below</h2>
        <input type="text" name="companyName" placeholder="Company name">
        <span class="error">* <?php echo $companyNameErr;?></span>
        <br><br>
        <input type="text" name="fullName" placeholder="Full name">
        <span class="error">* <?php echo $fullNameErr;?></span>
        <br><br>
        <input type="text" name="email" placeholder="Email">
        <span class="error">* <?php echo $emailErr;?></span>
        <br><br>
        <input type="text" name="phone" placeholder="Phone">
        <span class="error">* <?php echo $phoneErr;?></span>
        <br><br>
     
        <select name="service">
            <option value="">Seleziona un servizio...</option>
            <option value="service1">pippo franco</option>
            <option value="service2">gino paoli</option>
            
        </select>
        <span class="error">* <?php echo $serviceErr;?></span>
        <br><br>
        <input type="submit" name="submit" value="Send request">
    </form>

   
    <div class="image-container">
        <img src="camioncino.png" alt="Image">
    </div>
</body>
</html>
