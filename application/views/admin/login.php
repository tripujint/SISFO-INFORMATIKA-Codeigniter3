<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->view($head) ?>
</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap" align="center">
                    <div class="login-content col-md-8">
                        <label style="margin-bottom: 20px;"><b>SILAKAN LOGIN ADMIN</b></label>
                        <div class="login-form">
                            <form action="<?php echo base_url(); ?>login/login_akses" method="post">
                                <div class="form-group">
                                    <input class="au-input au-input--full" type="text" name="username" id="username" placeholder="Username" required="">
                                </div>
                                <div class="form-group">
                                    <input class="au-input au-input--full" type="password" name="password" id="password" placeholder="Password" required="">
                                </div>
                                <button class="au-btn au-btn--block au-btn--blue m-b-20" type="submit" id="submit" name="submit">LOGIN</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php echo $this->session->flashdata("msg");?>

    <?php $this->view($foot) ?>

</body>

</html>
<!-- end document-->