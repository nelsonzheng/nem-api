<html>
    <table>
        <thead>
            <tr>
                <td>
                    File name
                </td>
                <td>

                </td>
                <td>

                </td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($filenames as $filename): ?>
                <tr>
                    <td>
                        <?php echo anchor('upload/view/' . $filename, $filename); ?>
                    </td>
                    <td>
                        <?php echo anchor('upload/import/' . $filename, 'import'); ?>
                    </td>
                    <td>
                        <?php echo anchor('upload/delete/' . $filename, 'delete'); ?>
                    </td>
                </tr>
            <?php endforeach;
            ?>
        </tbody>
        <tfoot>
            <tr>
                <td></td>
                <td>
                    <?php echo anchor('upload/importall', 'import all'); ?>
                </td>
                <td>
                </td>
            </tr>
        </tfoot>
    </table>
</html>