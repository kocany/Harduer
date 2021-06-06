<?php


echo
    "
<form action='". APPLICATION_PATH . "index.php?controller=processors&action=update' method='post'>
    <input style='display: none ' name='prc_id' value='$data->prc_id'>

    <label>Brand</label>
    <input type='text' name='brand' value='$data->brand'><br>

    <label>Model</label>
    <input type='text' name='model' value='$data->model'><br>

    <label>Price</label>
    <input type='text' name='price' value='$data->price'><br>

    <label>Snimka</label>
    <input type='text' name='snimka' value='$data->snimka'><br>


    <button type='submit' name='update' value='true'>Update</button>
</form>
";
