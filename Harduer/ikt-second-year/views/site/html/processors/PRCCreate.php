<?php

echo
"
<form action='". APPLICATION_PATH . "index.php?controller=processors&action=create' method='post'>
    <label>Brand</label>
    <input type='text' name='brand'><br>

    <label>Model</label>
    <input type='text' name='model'><br>

    <label>Price</label>
    <input type='number' name='price'><br>

    <label>Snimka</label>
    <input type='text' name='snimka'><br>

    <button type='submit' name='create' value='true'>Create</button>
</form>
";
