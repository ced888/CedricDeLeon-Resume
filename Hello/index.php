<form action = "/vote.php">
<input type="radio" name="trip"
<?php if (isset($trip) && $trip=="Overnight") echo "checked";?>
value="Overnight">Overnight

<input type="radio" name="trip"
<?php if (isset($trip) && $trip=="Daytrip") echo "checked";?>
value="Daytrip">Daytrip

<input type="radio" name="trip"
<?php if (isset($trip) && $trip=="other") echo "checked";?>

<input type="submit" value="submit">
</form>