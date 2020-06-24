<?php
require 'header.php'
?>

<main>
    <div class="container">
        <div class="row">
            <div class="col-md-12 pt-3">
                <?php
                if(isset($_SESSION['userid'])) {
                    echo '<p>Logged In</p>';
                } else {
                    echo '<p>Logged Out</p>';
                }
                ?>
            </div>
        </div>
    </div>
</main>


<?php
require 'footer.php'
?>
