<?php
$gewicht = $_GET["gewicht"];
$lengte = $_GET["lengte_cm"];
BMIcalc($gewicht,$lengte);


function BMIcalc($gewicht,$lengte)
{

  if(is_numeric ($lengte) && is_numeric ($gewicht))
  {

  $lengte = $lengte/100;//omrekenen naar meters
  $BMI = $gewicht /  ($lengte * $lengte);
  $BMI = round($BMI,1);//afronden
  echo "Uw lengte is: $lengte<br>";
  echo "Uw BMI is: $BMI<br>";

  switch ($BMI) {
    case ($BMI < 18.5):
      echo 'U heeft ondergewicht';
      break;
    case ($BMI < 25):
    echo 'U heeft een normaal gewicht';
      break;
    case ($BMI < 30):
    echo 'U heeft overgewicht';
      break;
    case ($BMI < 35):
    echo 'U heeft obesitas (klasse 1)';
      break;
    case ($BMI < 40):
    echo 'U heeft obesitas (klasse 2)';
      break;
    case ($BMI > 40):
    echo 'U heeft obesitas (klasse 3)';
      break;
  }
}
  else
  {
    echo 'Geef een nummer!';
  }
}

?>
