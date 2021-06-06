<?php
echo "
<form action='".APPLICATION_PATH."index.php?controller=motherboards&action=create'  method='post'>
               <button type=submit name='load_form' value='true'>Create</button>
 </form>
    <h1>MotherBoards</h1>
    <form action='" . APPLICATION_PATH . "index.php?controller=motherboards&action=listAll' method='post'>
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
    foreach ($data as $mdb) {
        echo "<tr>
                         <td>$mdb->brand</td>
                         <td>$mdb->model</td>
                         <td>$mdb->price</td>
                         <td>$mdb->snimka</td>
                         <td><img width='100px' src='$mdb->snimka'/></td>
                         <td>
          <form action='" . APPLICATION_PATH . "index.php?controller=motherboards&action=view'  method='post'>
              <button name='md_id' value='$mdb->md_id'>View</button>
                   </form>

          <form action='" . APPLICATION_PATH . "index.php?controller=motherboards&action=delete'  method='post'>
              <button name='md_id' value='$mdb->md_id'>Delete</button>
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
