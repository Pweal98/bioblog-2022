<!DOCTYPE html>
<html lang="fr">
<?php $title="Login"; require "../head.php"; ?>
<body>
    <?php require "../header.php"; ?>

    <div class="container">
        <div class="form-container">
            <form
                action=""
                method="POST">
                <div class="form-group">
                    <h2 class="text-center"><strong>Welcome back</strong></h2>
                    <label>
                    Username
                        <input 
                            class="form-control"
                            type="text"
                            name="username"
                            placeholder="Username"/>
                    </label>
                </div>
                <div class="form-group">
                    <label>
                    Password
                        <input 
                            class="form-control"
                            type="password"
                            name="password"
                            placeholder="Password"/>
                    </label>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success ">Login</button>
                </div>
            </form>
        </div>
    </div>

    <?php require "../footer.php"; ?>
</body>
</html>