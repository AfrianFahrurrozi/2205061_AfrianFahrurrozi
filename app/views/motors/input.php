<h2>Input Motor</h2>

<form action="<?php echo URL; ?>/motors/save" method="post">
    <table>
        <tr>
            <td>MEREK</td>
            <td><input type="text" name="merek" required></td>
        </tr>
        <tr>
            <td>HARGA</td>
            <td><input type="harga" name="harga" required></td>
        </tr>
        <tr>
            <td>TIPE</td>
            <td><input type="text" name="tipe" required></td>
        </tr>
        <tr>
            <td>PLATE</td>
            <td><input type="text" name="plate" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>