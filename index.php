<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>PHP Form Validation</title>
</head>

<body>
    <header>
        <h1 class="text-center my-5">PHP FORM VALIDATION</h1>
    </header>

    <main>
        <section>
            <div class="container-sm my-5">
                <!-- Use action to route on submission. Use POST to submit the data.-->
                <form action="results.php" method="POST">
                    <div class="form-group mb-3">
                        <label for="username" class="form-label">Username</label>
                        <!-- set 'name' on each input in order to send the data -->
                        <!-- htmlspecialchars helps prevent sql injections -->
                        <input type="text" class="form-control" name="username" value="<?php echo htmlspecialchars($username); ?>">

                        <!-- display validation error message -->
                        <?php if (isset($username_error)) { ?>
                            <p class="text-danger"><?php echo $username_error; ?></p>
                        <?php } ?>

                    </div>

                    <div class="form-group mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="<?php echo htmlspecialchars($email); ?>">

                        <?php if (isset($email_error)) { ?>
                            <p class="text-danger"><?php echo $email_error; ?></p>
                        <?php } ?>

                    </div>

                    <div class="form-group mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div>
                            <small class="text-secondary">Must have at least 6 characters.</small>
                        </div>
                        <input type="password" class="form-control" name="password">

                        <?php if (isset($password_error)) { ?>
                            <p class="text-danger"><?php echo $password_error; ?></p>
                        <?php } ?>

                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">Register</button>
                </form>
            </div>
        </section>
    </main>

</body>

</html>