<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <!-- Enable responsive viewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 
</head>
<body>

<!--define variables and set to empty values -->
<?php
$state-choice = "";
$city-choice = "";
$choiceERR = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (($_POST["state-choice"]) != "base"){
        $state-choice = test_input($_POST["state-choice"]);
        $city-choice = test_input($_POST["city-choice"]);
        }
    else {
        $choiceERR = "Please choose a state first";
        }
    }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<div id ="mSearchContent" class="container">
    <h2>Find A </h2><h2>Barbershop</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <select id="state-choice" name="state-choice">
                <option selected value="base" disabled>Select a State</option>
                <option value = "DC">District of Columbia</option>
                <option value = "AL">Alabama</option>
                <option value = "AK">Alaska</option>
                <option value = "AZ">Arizona</option>
                <option value = "AR">Arkansas</option>
                <option value = "CA">California</option>
                <option value = "CO">Colorado</option>
                <option value = "CT">Connecticut</option>
                <option value = "DE">Delaware</option>
                <option value = "FL">Florida</option>
                <option value = "GA">Georgia</option>
                <option value = "HA">Hawaii</option>
                <option value = "ID">Idaho</option>
                <option value = "IL">Illinois</option>
                <option value = "IN">Indiana</option>
                <option value = "IA">Iowa</option>
                <option value = "KS">Kansas</option>
                <option value = "KY">Kentucky</option>
                <option value = "LA">Louisiana</option>
                <option value = "ME">Maine</option>
                <option value = "MD">Maryland</option>
                <option value = "MA">Massachusetts</option>
                <option value = "MI">Michigan</option>
                <option value = "MN">Minnesota</option>
                <option value = "MS">Mississippi</option>
                <option value = "MO">Missouri</option>
                <option value = "MT">Montana</option>
                <option value = "NE">Nebraska</option>
                <option value = "NV">Nevada</option>
                <option value = "NH">New Hampshire</option>
                <option value = "NJ">New Jersey</option>
                <option value = "NM">New Mexico</option>
                <option value = "NY">New York</option>
                <option value = "NC">North Carolina</option>
                <option value = "ND">North Dakota</option>
                <option value = "OH">Ohio</option>
                <option value = "OK">Oklahoma</option>
                <option value = "OR">Oregon</option>
                <option value = "PA">Pennsylvania</option>
                <option value = "RI">Rhode Island</option>
                <option value = "SC">South Carolina</option>
                <option value = "SD">South Dakota</option>
                <option value = "TN">Tennessee</option>
                <option value = "TX">Texas</option>
                <option value = "UT">Utah</option>
                <option value = "VT">Vermont</option>
                <option value = "VA">Virgina</option>
                <option value = "WA">Washington</option>
                <option value = "WV">West Virgina</option>
                <option value = "WI">Wisconsin</option>
                <option value = "WY">Wyoming</option>
            </select>
            <br>

            <select id="city-choice">
                <option>Choose State Above</option>
            </select>
            <br>

            <input type="submit" id="mStateSubmit" value="Search" />
        </form>

        <h1>-OR-</h1>

        <h2>Please Enter A Zip Code</h2><h2>You Want To Search</h2>

<!--define variables and set to empty values -->
<?php
$zip = ""; $city = ""; $state-short = ""; $state = ""; $country = "";
$zipERR = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ((empty($_POST["zip"])){
        $zipERR = "Please enter a zipcode first.";
        }
    else if (($_POST["zip"]).length != 5) {
        $zipERR = "Please enter a zipcode first.";
        }
    else {
        $zip = test_input($_POST["zip"]);
        $city = test_input($_POST["city"]);
        $state-short = test_input($_POST["state-short"]);
        $state = test_input($_POST["state"]);
        $country = test_input($_POST["counrty"]);
        }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>


<form id="zipform" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <label for="zip">
    			Zip:
    			<input type="text" id="zip" name="zip" onkeyup="this.value=this.value.replace(/[^\d]+/, '')"/>
    		</label>

            <label for="city">
                City:
                <input type="text" id="city" name="city"/>
            </label>

            <label for="state">
                State:
                <input type="text" id="state" name="state"/>
            </label>

            <label for="state-short">
                State Short:
                <input type="text" id="state-short" name="state-short"/>
            </label>

            <label for="country">
                Country:
                <input type="text" id="country" name="country"/>
            </label>
<br>

            <input type="submit" id="mZipSubmit" value="Search" />
        </form>

</div>

</body>
</html>
