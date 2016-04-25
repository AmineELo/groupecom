<div class="row">
           <div class="col-md-12">

                <nav class="navbar brb" role="navigation">
                   <div class="navbar-header">
                       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                           <span class="sr-only">Toggle navigation</span>
                           <span class="icon-reorder"></span>
                       </button>
                       <a class="navbar-brand" href="#"><img src="img/logo_gc_small.png"/></a>
                   </div>
                   <div class="collapse navbar-collapse navbar-ex1-collapse">
                       <ul class="nav navbar-nav">
                         <li class="active">
                              <a href="#">
                                  <span class="icon-home"></span> Accueil
                              </a>
                          </li>
                          <li class="">
                              <a href="#">
                                  <span class="icon-info-sign"></span>A propos
                              </a>
                          </li>
                          <li class="">
                              <a href="#">
                                  <span class="icon-envelope"></span>contact
                              </a>
                          </li>

                           <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="icon-ellipsis-horizontal"></span> More</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Item 1</a></li>
                                    <li><a href="#">Item 2</a></li>
                                    <li><a href="#">Item 3</a></li>
                                    <li><a href="#">Item 4</a></li>
                                </ul>
                            </li>

                       </ul>
                       <?php if(isset($_SESSION['role']))
                       {?>
                         <div class="nav navbar-nav  navbar-right">

                               <li>
                                    <a href="#" style="text-transform: capitalize;">
                                        <span class="icon-user"></span><?php echo $_SESSION['firstname'].' '.$_SESSION['lastname']; ?>
                                    </a>
                                </li>
                                <li>
                                     <a href="<?php echo site_url('logout')?>" style="text-transform: capitalize;">
                                         <span class="icon-signout"></span>Déconnexion
                                     </a>
                                 </li>
                          </div>

                        <?php }
                        else {
                        ?>
                       <div class="nav navbar-nav  navbar-right">
                            <li class="sep"></li>
                             <li>
                                  <a href="<?php echo site_url('singnin') ?>" style="text-transform: capitalize;">
                                      <span class="icon-signin"></span>Connectez-vous
                                  </a>
                              </li>
                        </div>
                        <?php if(isset($_SESSION['picture']))
                    {echo $_SESSION['name'].'<br>'.$_SESSION['email'].'<br><img src="'.$_SESSION['picture']['url'].'"/>';
                    }
                    ?>
                        <?php }
                        ?>
                   </div>
               </nav>

           </div>
       </div>
