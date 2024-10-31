<?php // Function to calculate the average rating from the file
$filename = 'rating.txt';

function calculateAverageRating($filename) {
    if (!file_exists($filename) || filesize($filename) == 0) {
        return 0; // No ratings, return 0
    }

    $ratings = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $totalRatings = count($ratings);
    $sumRatings = array_sum($ratings);

    return $totalRatings ? round($sumRatings / $totalRatings, 2) : 0;
}

// Calculate the average rating
$averageRating = calculateAverageRating($filename);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class='d-flex flex-column align-items-center'>
    <h1>Thank you for your rating</h1>
    <h2>The current average is <?php echo $averageRating?></h2>
    <a href="index.php">Go Home</a>
</body>

</html>