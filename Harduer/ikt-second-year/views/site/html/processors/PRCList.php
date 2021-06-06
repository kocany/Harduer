<?php
echo "
<form action='".APPLICATION_PATH."index.php?controller=processors&action=create'  method='post'>
               <button type=submit name='load_form' value='true'>Create</button>
 </form>
    <h1>Processors</h1>
    <form action='" . APPLICATION_PATH . "index.php?controller=processors&action=listAll' method='post'>
    <input type='text' name='topic'>
    <button type='submit' name='search' value='true'>Search</button>
    </form>

    <table>
        <thead>
        <tr>
            <th>Brand</th>
            <th>Model</th>
            <th>Price</th>
            <th>Snimka</th>
        </tr>
        </thead>
        <tbody>";

if(is_array($data)) {
    foreach ($data as $prc) {
        echo "<tr>
                         <td>$prc->brand</td>
                         <td>$prc->model</td>
                         <td>$prc->price</td>
                         <td>$prc->snimka</td>
                         <td><img width='100px' src='$prc->snimka'/></td>
                         <td>
          <form action='" . APPLICATION_PATH . "index.php?controller=processors&action=view'  method='post'>
              <button name='prc_id' value='$prc->prc_id'>View</button>
                   </form>

          <form action='" . APPLICATION_PATH . "index.php?controller=processors&action=delete'  method='post'>
              <button name='prc_id' value='$prc->prc_id'>Delete</button>
                   </form>

                      </td>
                      </tr>";
    }
    echo "
  </tbody>
  </table>
</section>
";
}
