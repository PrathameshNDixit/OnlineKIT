<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://kit.fontawesome.com/2f83c164ff.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url() ?>web_resources\dist\css\SignupPage.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <?php if ($this->session->flashdata('message')) { ?>
        <div class="alert alert-danger">
            <?php echo $this->session->flashdata('message') ?>
        </div>
        <div class="alert alert-danger">
            <?php echo $this->session->flashdata('pass') ?>
        </div>
    <?php } ?>
    <div class="container">

        <form class="login-card" action="<?php echo base_url() ?>users/signup/" method="POST">
            <h2 class="head">
                <i class="fa-solid fa-link"></i>
                <?php echo $title ?>
            </h2>
            <div class="input-div">
                <label for="email">Enter First Name</label>
                <input autocomplete="off" value="<?php echo set_value('first-name') ?>" name="first-name"
                    placeholder="first name" type="text" id="first-name">
                <?php echo form_error('first-name', '<div class="alert alert-danger">', '</div>') ?>
            </div>
            <div class="input-div">
                <label for="email">Enter Last Name</label>
                <input autocomplete="off" value="<?php echo set_value('last-name') ?>" name="last-name"
                    placeholder="last name" type="text" id="last-name">
                <?php echo form_error('last-name', '<div class="alert alert-danger">', '</div>') ?>
            </div>
            <div class="input-div">
                <label for="email">Enter Email</label>
                <input value="<?php echo set_value('email') ?>" name="email" placeholder="xyz@email.com" type="email"
                    id="email">
                <?php echo form_error('email', '<div class="alert alert-danger">', '</div>') ?>
            </div>
            <div class="input-div">
                <label for="Password">Enter Password</label>
                <input type="Password" id="Password" name="Password" placeholder="Password">
                <?php echo form_error('Password', '<div class="alert alert-danger">', '</div>') ?>
            </div>
            <div class="input-div">
                <label for="email">Confirm Pasword</label>
                <input name="cPassword" placeholder="Confirm Password" type="password" id="cPassword">
                <?php echo form_error('cPassword', '<div class="alert alert-danger">', '</div>') ?>
            </div>
            <div class="input-div">
                <input class="btn" name="submit" id="submit" type="submit">
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>