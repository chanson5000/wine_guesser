<?php
require_once('../../private/initialize.php');

$page_title = 'Wine Guesser Administration - View Red Wine Varietal';
include(SHARED_PATH . '/staff_header.php');

if (!isset($_GET['id'])) {
    redirect_to(url_for('admin/index.php'));
}

$id = $_GET['id'];

$wine = find_red_wine_by_id($id);

?>

<div class="center">
    <h2>Admin Varietal Characteristics</h2>

    <div class="wine-form">
        <table>
            <tr>
                <th colspan="3">Varietal</th>
            </tr>
            <tr>
                <td>ID: <?php echo h(u($id)); ?></td>
                <td>Name: <?php echo h($wine['varietal']); ?></td>
                <td><?php echo $wine['new_world'] == 1 ? 'New World' : 'Old World'; ?></td>
            </tr>
        </table>

        <?php include(SHARED_PATH . '/red-view.php'); ?>

        <div class="btm-return-link">
        <a href="<?php echo url_for('admin/red-wine/index.php'); ?>">Return to red wines administration.</a>
    </div>
    </div>
</div>

<?php
include(SHARED_PATH . '/staff_footer.php');
?>