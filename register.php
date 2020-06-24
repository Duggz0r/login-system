<?php
require 'header.php'
?>

<main>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Register</h2>
            </div>
        </div>

        <?php
            include('errors.php');
        ?>

        <div class="row">
            <div class="col-md-4">
                <form action="includes/register.inc.php" method="post" class="form-group">
                    <input type="text" name="username" placeholder="Username" class="form-control" required>
                    <input type="text" name="email" placeholder="Email" class="form-control" required>
                    <input type="password" name="password" placeholder="Password" class="form-control" required>
                    <input type="password" name="password-confirm" placeholder="Confirm Password" class="form-control" required>
                    <button type="submit" name="register-submit" class="btn btn-primary">Register Now</button>
                </form>
            </div>
        </div>
    </div>
</main>


<?php
require 'footer.php'
?>
