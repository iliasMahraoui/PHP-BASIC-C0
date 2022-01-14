<?php  
    $leeftijd = 17;
?>
<html>
<head>
</head>
<body>

    <div id="IsMeerderJarig">
        <?php
            if($leeftijd < 18 ){
                echo "<h6>Jij bent nog MinderJarig</h6>";
            }
        ?>
    </div>

</body>
</html>