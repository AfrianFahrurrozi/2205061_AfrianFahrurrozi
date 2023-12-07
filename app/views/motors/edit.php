<h2>Edit Motors</h2>

<form action="<?php echo URL; ?>/motors/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['id']; ?>">
    <table>
        <tr>
            <td>MEREK</td>
            <td><input type="text" name="merek" value="<?php echo $data['row']['merek']; ?>" required></td>
        </tr>
        <tr>
            <td>HARGA</td>
            <td><input type="text" name="harga" value="<?php echo $data['row']['harga']; ?>" required></td>
        </tr>
        <tr>
            <td>TIPE</td>
            <td><input type="text" name="tipe" value="<?php echo $data['row']['tipe']; ?>" required></td>
        </tr>
        <tr>
            <td>PLATE</td>
            <td><input type="text" name="plate" value="<?php echo $data['row']['plate']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>