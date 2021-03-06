<?php
require_once('../../private/initialize.php');

$page_title = 'Wine Guesser Administration - Delete Varietal';
include(SHARED_PATH . '/staff_header.php');

if (!isset($_GET['id'])) {
    redirect_to(url_for('admin/index.php'));
}
$id = $_GET['id'];

if (is_post_request()) {
    $result = delete_white_wine($id);
    $_SESSION['message'] = 'Wine deleted.';
    redirect_to(url_for('/admin/white-wine/index.php'));
} else {
    $wine = find_white_wine_by_id($id);
}
?>



    <div class="center delete-page">
        <h2>Delete Varietal</h2>

        <p>Are you sure you want to delete this wine varietal from the database?</p>
        <p><?php echo $wine['varietal']; ?></p>

        <form action="<?php echo url_for('/admin/white-wine/delete?id=' . h(u($wine['id']))); ?>" method="post">
            <input type="submit" name="commit" value="Delete Varietal">
        </form>

        <div class="btm-return-link"><a href="<?php echo url_for('/admin/white-wine/index.php'); ?>">Return to white wines
                administration.</a></div>
    </div>
<?php

include(SHARED_PATH . '/staff_footer.php');

?>