<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>Assignment 03 Mashup – Abigail Limpioso</title>
<link href="css/reset.css" type="text/css" rel="stylesheet">
<link href="css/styles.css" type="text/css" rel="stylesheet">
<link rel="icon" href="img/bored2.png" type="image/gif">
</head>
<body>
<div class="dancakes">
    <div id="logowrap">
        <div class="section group">
            <div class="col span_3_of_3">
                <div id="logo">
                    <img src="img/catlogo.png" alt="logo" width="64" height="64">
                </div>
            </div>
        </div>
    </div>
    <div class="section group">
        <div class="col span_3_of_3">
            <div id="headerimg">
                <img src="img/catheader.jpg" alt="header image">
                <h2><span id="bored1">bored</span> of being <span id="bored2">bored?</span></h2>
                <form method="POST" name="taco">
                <input type="submit" value="show me a cat" id="begin" name="begin">
            </form>
            </div>
        </div>
        

    </div>
    <div class="section group">
        <div class="col span_3_of_3">
            <div class="catimg">
            </div>
            <div id="fact">
            </div>
        </div>
    </div>
    <hr>
    <div class="section group">
        <div class="col span_3_of_3">
            <footer>
            This is an educational assignment prepared for the <span><img src="img/ucfsvad.png" alt="ucf svad logo" width="62" height="15"></span> course DIG4503: Rapid App with Daniel Novatnak, Spring 2016. Not a commercial product.
            </footer>
        </div>
    </div>  
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <?php
    require('dataCollect.php');
?>
</body>
</html>