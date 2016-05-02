<?php
$this->load->view('include/header.php');
$this->load->view('include/navigation.php');
 ?>
   <!--Slider-->
   <div class="row hidden-xs">
     <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="block">
     <div class="content">

       <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

           <div class="carousel-inner" id="load_slider">   </div>

           <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
               <span class="icon-chevron-left"></span>
           </a>
           <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
               <span class="icon-chevron-right"></span>
           </a>
       </div>

    </div>
    </div>
    </div>
   </div>

   <script type="text/javascript">
     window.onload = function(){
               //$('#load_list_suggest_restaurant').load('../socialnetwork/load_list_suggest_restaurant').hide().fadeIn(1500);
               $('#load_slider').load('./Accueil/load_slider');
               }
   </script>

   <!-- End Slider-->



   <div class="row">

     <div class="col-md-2">
                 <div class="block">
                         <center style="background-color:#f5f5f5;padding-top:10px;display:block;">
                           <img src="img/box/box_collegien.png">
                         </center>
                     <div class="header" style="height: 30px;line-height: 0px;">


                         <div class="side pull-right">
                             <ul class="buttons">
                                 <li><a href="#" class="block-toggle tip" title="" data-original-title="Clique ici pour commencer le TEST QCM"><span class="icon-chevron-up"></span></a></li>
                                 <li><a href="#" class="block-remove tip" title="" data-original-title="Supprimer le block"><span class="icon-remove"></span></a></li>
                             </ul>
                         </div>
                     </div>
                     <div class="content" style="display: none;">
                       <center> Tu es en 3ème et tu te demandes ce que tu vas faire l’an prochain.</center>
                     </div>
                     <div class="footer" style="display: none;">
                         <center>
                           <a href="<?php echo site_url('Quizz/page/1'); ?>" class="btn btn-clean">Clique ici</a>
                         </center>
                     </div>
                 </div>
     </div>

     <div class="col-md-2">
                 <div class="block">
                         <center style="background-color:#f5f5f5;padding-top:10px;display:block;">
                           <img src="<?php echo base_url()?>img/box/box_collegien.png">
                         </center>
                     <div class="header" style="height: 30px;line-height: 0px;">


                         <div class="side pull-right">
                             <ul class="buttons">
                                 <li><a href="#" class="block-toggle tip" title="" data-original-title="Clique ici pour commencer le TEST QCM"><span class="icon-chevron-up"></span></a></li>
                                 <li><a href="#" class="block-remove tip" title="" data-original-title="Supprimer le block"><span class="icon-remove"></span></a></li>
                             </ul>
                         </div>
                     </div>
                     <div class="content" style="display: none;">
                       <center> Tu es en 3ème et tu te demandes ce que tu vas faire l’an prochain.</center>
                     </div>
                     <div class="footer" style="display: none;">
                         <center><a href="<?php echo site_url('Quizz/page/2'); ?>" class="btn btn-clean">Clique ici</a></center>
                     </div>
                 </div>
     </div>

      <div class="col-md-2">
                 <div class="block">
                         <center style="background-color:#f5f5f5;padding-top:10px;display:block;">
                           <img src="<?php echo base_url()?>img/box/box_lyceen.png">
                         </center>
                     <div class="header" style="height: 30px;line-height: 0px;">


                         <div class="side pull-right">
                             <ul class="buttons">
                                 <li><a href="#" class="block-toggle tip" title="" data-original-title="Clique ici pour commencer le TEST QCM"><span class="icon-chevron-up"></span></a></li>
                                 <li><a href="#" class="block-remove tip" title="" data-original-title="Supprimer le block"><span class="icon-remove"></span></a></li>
                             </ul>
                         </div>
                     </div>
                     <div class="content" style="display: none;">
                       <center> Tu es au lycée et tu commences à te demander quel métier et quelles études te plairaient.</center>
                     </div>
                     <div class="footer" style="display: none;">
                         <center><button type="button" class="btn btn-clean">Clique ici</button></center>
                     </div>
                 </div>
     </div>

      <div class="col-md-2">
                 <div class="block">
                         <center style="background-color:#f5f5f5;padding-top:10px;display:block;">
                           <img src="<?php echo base_url()?>img/box/box_etudiant.png">
                         </center>
                     <div class="header" style="height: 30px;line-height: 0px;">


                         <div class="side pull-right">
                             <ul class="buttons">
                                 <li><a href="#" class="block-toggle tip" title="" data-original-title="Clique ici pour commencer le TEST QCM"><span class="icon-chevron-up"></span></a></li>
                                 <li><a href="#" class="block-remove tip" title="" data-original-title="Supprimer le block"><span class="icon-remove"></span></a></li>
                             </ul>
                         </div>
                     </div>
                     <div class="content" style="display: none;">
                       <center> Tu as démarré des études supérieures et tu n’es pas encore sûr du choix de ton métier.</center>
                     </div>
                     <div class="footer" style="display: none;">
                         <center><button type="button" class="btn btn-clean">Clique ici</button></center>
                     </div>
                 </div>
     </div>

      <div class="col-md-2">
                 <div class="block">
                         <center style="background-color:#f5f5f5;padding-top:10px;display:block;">
                           <img src="<?php echo base_url()?>img/box/box_adulte.png">
                         </center>
                     <div class="header" style="height: 30px;line-height: 0px;">


                         <div class="side pull-right">
                             <ul class="buttons">
                                 <li><a href="#" class="block-toggle tip" title="" data-original-title="Clique ici pour commencer le TEST QCM"><span class="icon-chevron-up"></span></a></li>
                                 <li><a href="#" class="block-remove tip" title="" data-original-title="Supprimer le block"><span class="icon-remove"></span></a></li>
                             </ul>
                         </div>
                     </div>
                     <div class="content" style="display: none;">
                       <center> Vous êtes en activité ou au chômage, et vous envisagez de changer d’orientation professionnelle.</center>
                     </div>
                     <div class="footer" style="display: none;">
                         <center><button type="button" class="btn btn-clean">Clique ici</button></center>
                     </div>
                 </div>
     </div>

      <div class="col-md-2">
                 <div class="block">
                         <center style="background-color:#f5f5f5;padding-top:10px;display:block;">
                           <img src="<?php echo base_url()?>img/box/box_parent.png">
                         </center>
                     <div class="header" style="height: 30px;line-height: 0px;">


                         <div class="side pull-right">
                             <ul class="buttons">
                                 <li><a href="#" class="block-toggle tip" title="" data-original-title="Clique ici pour commencer le TEST QCM"><span class="icon-chevron-up"></span></a></li>
                                 <li><a href="#" class="block-remove tip" title="" data-original-title="Supprimer le block"><span class="icon-remove"></span></a></li>
                             </ul>
                         </div>
                     </div>
                     <div class="content" style="display: none;">
                       <center> Vous êtes parent et vous vous posez des questions sur l’orientation scolaire ou professionnelle de votre enfant.</center>
                     </div>
                     <div class="footer" style="display: none;">
                         <center><button type="button" class="btn btn-clean">Clique ici</button></center>
                     </div>
                 </div>
     </div>

     <div class="col-md-1"></div>

   </div>

   <hr>
   <div class="row">
    <div class=" col-md-12 page-content-holder-custom">



     <div class="row">
         <div class="col-md-9 gallery-filter">
             <div class="button-panel">
                 <button style="background: rgba(0,0,0,0.6);" data-filter="all" class="btn  filter">All</button>
                 <button style="background: rgba(0,0,0,0.6);" data-filter=".cat_music" class="btn  filter">Music</button>
                 <button style="background: rgba(0,0,0,0.6);" data-filter=".cat_nature" class="btn  filter">Nature</button>
                 <button style="background: rgba(0,0,0,0.6);" data-filter=".cat_space" class="btn  filter">Space</button>
             </div>
         </div>
         <fieldset class="col-md-3 filter-group search">

           <input type="text" placeholder="Search ..."/>
         </fieldset>
     </div>


     <div class="row mix-grid thumbnails">
         <div class="col-md-3 col-xs-3 mix cat_nature cat_all">
             <a class="thumbnail-item">
                 <img src="<?php echo base_url()?>assets/img/gallery/nature-1.jpg" alt="Nature 1"/>
                 <div class="thumbnail-info">
                     <p>Curabitur ut lorem id tellus malesuada tincidunt et eget purus</p>
                     <button class="btn btn-primary"><span class="fa fa-link"></span></button>
                     <button class="btn btn-primary"><span class="fa fa-eye"></span></button>
                 </div>
             </a>
         </div>
         <div class="col-md-3 col-xs-3 mix cat_space cat_all">
             <a class="thumbnail-item">
                 <img src="<?php echo base_url()?>assets/img/gallery/space-1.jpg" alt="Space 1"/>
                 <div class="thumbnail-info">
                     <p>Curabitur ut lorem id tellus malesuada tincidunt et eget purus</p>
                     <button class="btn btn-primary"><span class="fa fa-link"></span></button>
                     <button class="btn btn-primary"><span class="fa fa-eye"></span></button>
                 </div>
             </a>
         </div>
         <div class="col-md-3 col-xs-3 mix cat_nature cat_all">
             <a class="thumbnail-item">
                 <img src="assets/img/gallery/nature-2.jpg" alt="Nature 2"/>
                 <div class="thumbnail-info">
                     <p>Curabitur ut lorem id tellus malesuada tincidunt et eget purus</p>
                     <button class="btn btn-primary"><span class="fa fa-link"></span></button>
                     <button class="btn btn-primary"><span class="fa fa-eye"></span></button>
                 </div>
             </a>
         </div>
         <div class="col-md-3 col-xs-3 mix cat_music cat_all">
             <a class="thumbnail-item">
                 <img src="assets/img/gallery/music-2.jpg" alt="Music 2"/>
                 <div class="thumbnail-info">
                     <p>Curabitur ut lorem id tellus malesuada tincidunt et eget purus</p>
                     <button class="btn btn-primary"><span class="fa fa-link"></span></button>
                     <button class="btn btn-primary"><span class="fa fa-eye"></span></button>
                 </div>
             </a>
         </div>
         <div class="col-md-3 col-xs-3 mix cat_nature cat_all">
             <a class="thumbnail-item">
                 <img src="assets/img/gallery/nature-3.jpg" alt="Nature 3"/>
                 <div class="thumbnail-info">
                     <p>Curabitur ut lorem id tellus malesuada tincidunt et eget purus</p>
                     <button class="btn btn-primary"><span class="fa fa-link"></span></button>
                     <button class="btn btn-primary"><span class="fa fa-eye"></span></button>
                 </div>
             </a>
         </div>
         <div class="col-md-3 col-xs-3 mix cat_nature cat_all">
             <a class="thumbnail-item">
                 <img src="assets/img/gallery/nature-4.jpg" alt="Nature 4"/>
                 <div class="thumbnail-info">
                     <p>Curabitur ut lorem id tellus malesuada tincidunt et eget purus</p>
                     <button class="btn btn-primary"><span class="fa fa-link"></span></button>
                     <button class="btn btn-primary"><span class="fa fa-eye"></span></button>
                 </div>
             </a>
         </div>
         <div class="col-md-3 col-xs-3 mix cat_space cat_all">
             <a class="thumbnail-item">
                 <img src="assets/img/gallery/space-2.jpg" alt="Space 2"/>
                 <div class="thumbnail-info">
                     <p>Curabitur ut lorem id tellus malesuada tincidunt et eget purus</p>
                     <button class="btn btn-primary"><span class="fa fa-link"></span></button>
                     <button class="btn btn-primary"><span class="fa fa-eye"></span></button>
                 </div>
             </a>
         </div>
         <div class="col-md-3 col-xs-3 mix cat_nature cat_all">
             <a class="thumbnail-item">
                 <img src="assets/img/gallery/nature-5.jpg" alt="Nature 5"/>
                 <div class="thumbnail-info">
                     <p>Curabitur ut lorem id tellus malesuada tincidunt et eget purus</p>
                     <button class="btn btn-primary"><span class="fa fa-link"></span></button>
                     <button class="btn btn-primary"><span class="fa fa-eye"></span></button>
                 </div>
             </a>
         </div>
     </div>

     <ul class="pagination pagination-sm pull-right">
         <li class="disabled"><a href="#">«</a></li>
         <li class="active"><a href="#">1</a></li>
         <li><a href="#">2</a></li>
         <li><a href="#">3</a></li>
         <li><a href="#">4</a></li>
         <li><a href="#">»</a></li>
     </ul>
   </div>
   </div>
                       <!-- ./page content holder -->


           <!-- page scripts -->


           <script type="text/javascript" src="js/plugins/mixitup/jquery.mixitup.js"></script>
           <script type="text/javascript" src="js/plugins/appear/jquery.appear.js"></script>
           <script type="text/javascript">
   		$(document).ready(function(){
   				if($(".mix-grid").length > 0)
   					$(".mix-grid").mixItUp();
   			});
   		</script>


 <?php
$this->load->view('include/footer.php');
 ?>
