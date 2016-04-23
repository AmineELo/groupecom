<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from aqvatarius.com/themes/taurus_v12/html/sample_login.html by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 22 Apr 2016 10:54:57 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <title>Groupe COM | Login</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="icon" type="image/ico" href="favicon.html"/>

    <link href="css/stylesheets.css" rel="stylesheet" type="text/css" />

    <script type='text/javascript' src='js/plugins/jquery/jquery.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery/jquery-ui.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery/globalize.js'></script>
    <script type='text/javascript' src='js/plugins/bootstrap/bootstrap.min.js'></script>

    <script type='text/javascript' src='js/plugins/uniform/jquery.uniform.min.js'></script>

    <script type='text/javascript' src='js/plugins.js'></script>
    <script type='text/javascript' src='js/actions.js'></script>
    <script type='text/javascript' src='js/settings.js'></script>
</head>
<body class="wall-num10" data-settings="open" style="">

    <div class="container container- theme-black container-fixed">
      <?php

          $inattributes=array('method'=>'post','role'=>'form');
          echo form_open('Singnin/validation',$inattributes);
          if($this->session->flashdata('errors') )
           {
          echo  ' <div class="alert alert-default"><strong>Oh snap!</strong> '.$this->session->flashdata('errors').'</div>';
          }

          if($this->session->flashdata('data_error') )
           {
          echo ' <div class="alert alert-default"><strong>Oh snap!</strong> '.$this->session->flashdata('data_error').'</div>';
          }

         ?>
        <div class="login-block">
            <div class="block block-transparent">
                <div class="head">
                    <div class="user">
                        <div class="info user-change">
                            <img src="img/example/user/dmitry_b.jpg" class="img-circle img-thumbnail"/>
                            <div class="user-change-button">
                                <span class="icon-off"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content controls npt">
                    <div class="form-row user-change-row">
                        <div class="col-md-12">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="icon-user"></span>
                                </div>
                                <input type="text" class="form-control" name="username" placeholder="Login"  style="color:#3D403B;background-color: #eee"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="icon-key"></span>
                                </div>
                                <input type="password" name="password" class="form-control" placeholder="Password" style="color:#3D403B;background-color: #eee"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <a href="<?php echo site_url('singnup') ?>" class="btn btn-default btn-block btn-clean">S'inscrire</a>
                        </div>
                        <div class="col-md-6">
                            <input type="submit" class="btn btn-default btn-block btn-clean" value="Connexion"/>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12">
                            <a href="#" class="btn btn-link btn-block" style="color:#3D403B;">Forgot your password?</a>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 tac" style="color:#6E7A65;"><strong>OR USE</strong></div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12">
                            <a href="#" class="btn btn-info btn-block"><span class="icon-facebook"></span> &nbsp; Facebook</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <?php
        echo form_close();
        ?>

    </div>

</body>

<!-- Mirrored from aqvatarius.com/themes/taurus_v12/html/sample_login.html by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 22 Apr 2016 10:54:57 GMT -->
</html>
