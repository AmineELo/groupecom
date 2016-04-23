<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from aqvatarius.com/themes/taurus_v12/html/sample_registration.html by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 22 Apr 2016 10:54:57 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <title>Groupe COM</title>
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
    <script src="/js/jqBootstrapValidation.js"></script>

    <style>
    .form-control, input, select, select[multiple], textarea {
      background: #eee;
      border-color: #f4f4f4;
      color: #000;
    }
    </style>
</head>
<body class="wall-num10" style="">

    <div class="container container- theme-black container-fixed">

        <div class="registration-block">
            <div class="block block-transparent">
                <div class="head tac">
                    <a href="index.html"><img src="img/logo_gc_medium.png"/></a>
                </div>
                <div class="content controls npt">
                  <?php echo form_open('Signup/register'); ?>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="controls input-group">
                                <div class="input-group-addon">
                                    <span class="icon-user"></span>
                                </div>
                                <input type="text" pattern="[a-z]" class="form-control" name="nom" placeholder="Nom" required/>
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="icon-user"></span>
                                </div>
                                <input type="text" class="form-control" name="prenom" placeholder="Prénom" required/>
                            </div>
                        </div>
                    </div>
                    <div class="form-row" style="margin-top: 10px;">
                        <div class="col-md-6">
                            <div class="input-group controls">
                                <div class="input-group-addon">
                                    <span class="icon-key"></span>
                                </div>
                                <input type="text" class="form-control" name="username" placeholder="Nom d'utilisateur" required/>
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="icon-envelope"></span>
                                </div>
                                <input type="email" class="form-control" name="email" placeholder="E-mail" required/>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="icon-lock"></span>
                                </div>
                                <input type="password" class="form-control" name="password" placeholder="Mot de passe" required/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="icon-unlock-alt"></span>
                                </div>
                                <input type="password" class="form-control" placeholder="Re-Password" required/>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12">
                          <div class="radiobox-inline">
                              <label><input type="radio" name="role" checked="checked" value="etudiant"/>etudiant</label>
                          </div>
                          <div class="radiobox-inline">
                              <label><input type="radio" name="role" value="ecole"/>ecole</label>
                          </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12">
                            <button class="btn btn-default btn-block btn-clean" type="submit">S'inscrire</button>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>

    </div>
<script>
  $(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } );
</script>


</body>

<!-- Mirrored from aqvatarius.com/themes/taurus_v12/html/sample_registration.html by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 22 Apr 2016 10:54:59 GMT -->
</html>
