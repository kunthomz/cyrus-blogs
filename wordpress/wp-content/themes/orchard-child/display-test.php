<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Slick Slider Example</title>

  <!-- Slick Slider CSS CDN -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

  <!-- jQuery CDN -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  
  <!-- Slick Slider JS CDN -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <style>
    .custom__container {
      margin: 20px;
    }
    .tap-outer {
      display: flex;
      justify-content: center;
    }
    .tap-inner {
      width: 80%; /* Adjust the width as needed */
    }
    .custom__item {
      text-align: center; /* Center text in the slider */
    }
  </style>
</head>
<body>

<?php 
$data = gr(); // Assuming this function fetches user data
$totalUsers = count($data); // Get the total number of users
$chunks = array_chunk($data, 3); // Split the data into chunks of 3

// Limit to a maximum of 5 iterations
$maxIterations = min(5, count($chunks));

for ($a = 0; $a < $maxIterations; $a++) {
    echo '<div class="custom__container">';
    echo '<div class="tap-outer">';
    echo '<div class="tap-inner">';
    echo '<div class="custom__item">';

    foreach ($chunks[$a] as $user) {
        echo "<div>Name: " . htmlspecialchars($user['name']) . "</div>"; // Using htmlspecialchars for safety
    }
    
    echo '</div>'; // End custom__item
    echo '</div>'; // End tap-inner
    echo '</div>'; // End tap-outer
    echo '</div>'; // End custom__container
}
?>

<!-- Initialize Slick Slider -->
<script type="text/javascript">
$(document).ready(function() {
    // Initialize the Slick slider for each custom item
    $('.custom__item').slick({
        dots: true,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000,
    });

    // Button click handlers for navigating the slider
    $('#prevBtn').on('click', function() {
        $('.custom__item').slick('slickPrev'); // Correctly reference custom__item
    });

    $('#nextBtn').on('click', function() {
        $('.custom__item').slick('slickNext'); // Correctly reference custom__item
    });
});
</script>

<!-- Navigation buttons -->
<div style="text-align: center; margin-top: 20px;">
  <button id="prevBtn">Previous</button>
  <button id="nextBtn">Next</button>
</div>

</body>
</html>
