<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Literally A Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 

</head>






<body>
    <div class='d-flex flex-column align-items-center'>
<img class='img-fluid' src="assets/PigtailsHat.png" width="400px">
<h1>LiteralHat.com!!!</h1>
<p>Hi. This website is undergoing a remake.</p>
<p>Thank you for your patience.</p>
<p>In the meanwhile, please enjoy an assorted variety of Marla photo.</p>


<img class='img-fluid' src="assets/1.jpg" alt="Black and white cat" class="img-fluid">
<img class='img-fluid' src="assets/2.jpg" alt="Black and white cat petted furiously" class="img-fluid">
<img class='img-fluid' src="assets/3.jpg" alt="Black and white cat big EYES" class="img-fluid">
<img class='img-fluid' src="assets/4.jpg" alt="Black and white cat very regal very cute" class="img-fluid">
<img class='img-fluid' src="assets/5.jpg" alt="Black and white cat under blanket very tire" class="img-fluid">
<img class='img-fluid' src="assets/6.jpg" alt="hand point at black white cat" class="img-fluid">






<?php
// Define the file name for storing ratings
$filename = 'rating.txt';

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['rating'])) {
    // Get the rating from the form submission
    $rating = intval($_POST['rating']);

    // Write the rating to the file, appending a new line
    file_put_contents($filename, $rating . PHP_EOL, FILE_APPEND);
    header("Location: thanks.php");
    die();
}

?>





<h3>did you like the marla gallery</h3>
<p>Please rate on scale of 1 - 5</p>

<form class="rating" method="post">
    <fieldset>
    <label>
        <input type="radio" name="rating" value="1"> 1
    </label>
    <label>
        <input type="radio" name="rating" value="2"> 2
    </label>
    <label>
        <input type="radio" name="rating" value="3"> 3
    </label>
    <label>
        <input type="radio" name="rating" value="4"> 4
    </label>
    <label>
        <input type="radio" name="rating" value="5"> 5
    </label>
    <button type="submit">ok</button>
</fieldset>


</form>




</div>



</body>
</html>