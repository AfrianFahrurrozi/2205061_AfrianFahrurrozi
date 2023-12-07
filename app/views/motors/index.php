<h2>motors</h2>

<a href="<?php echo URL; ?>/motors/input" class="btn">Input Motor</a>

<table>
      <tr>
            <th>NO</th>
            <th>MEREK</th>
            <th>HARGA</th>
            <th>TIPE</th>
            <th>PLATE</th>
            <th>EDIT</th>
            <th>DELETE</th>

      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['merek']; ?></td>
                  <td><?php echo $row['harga']; ?></td>
                  <td><?php echo $row['tipe']; ?></td>
                  <td><?php echo $row['plate']; ?></td>
                  <td><a href="<?php echo URL; ?>/motors/edit/<?php echo $row['id']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/motors/delete/<?php echo $row['id']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
      <?php $no++;
      } ?>

</table>