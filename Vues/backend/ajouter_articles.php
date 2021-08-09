<?php include('_header.php') ;?>
        <div id="wrapper">
            <!--navbar top-->
            <?php include('_navbar.php') ;?>
            <!-- Sidebar -->
            <?php include('_sidebar.php') ;?>
            <!-- ./sidebar-wrapper -->
            <!-- Page content -->
            <div id="page-content-wrapper">
                <div class="page-content">
                    <!-- Content Header (Page header) -->
                    <section class="content-header z-depth-1">
                        <div class="header-icon">
                            <i class="fa fa-file-o"></i>
                        </div>
                        <div class="header-title">
                            <h1> Ajout de l'article</h1>
                            <small> ajouter votre article ici</small>
                            <ul class="link hidden-xs">
                                <li><a href="index.html"><i class="fa fa-home"></i>Accueil</a></li>
                                <li><a href="?p=ajouter_articles">Ajout article</a></li>
                            </ul>
                        </div>
                    </section>
                    <!-- page section -->
                    <div class="container-fluid">
                        <div class="row">
                            <!-- basic forms -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-file-text-o fa-lg"></i>
                                        <h2>ajouter l'article</h2>
                                    </div>
                                    <div class="card-content">
                                        <div class="row">



                                        <form  id="sauvegarder_article_form_mine" class="col s12 mt-20" enctype="multipart/form-data">

                                        <div class="form-group">
                                            <label style="font-size:16px;" for="article_libelle">catégorie article (obligatoire)</label>
                                            
                                           
                                            <select style="border:2px solid #E8E5B0 !important;" name="article_categorie" id="article_categorie" class="form-control">

                                                 <option value=""></option>
                                                 <?php

                                                   foreach($categorie_select_data as $categorie_data){


                                                    ?> 

                                                       <option value="<?=$categorie_data->categorie_id?>"><?=$categorie_data->categorie_libelle;?></option>

                                                    <?php


                                                   }
                                                 
                                                 ?>
                                            </select>
                                            <small id="article_categorie_message"></small>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label style="font-size:16px;" for="article_libelle">Marque article (optionel) </label>
                                            
                                           
                                            <select style="border:2px solid #E8E5B0 !important;" name="article_marque" id="article_marque" class="form-control">

                                                 <option value=""></option>
                                                 <?php

                                                foreach($marque_select_data as $marque_data){


                                                ?> 

                                                    <option value="<?=$marque_data->marque_id?>"><?=$marque_data->marque_libelle;?></option>

                                                <?php


                                                }

                                                ?>
                                            </select>
                                            <small id="article_marque_message"></small>
                                            
                                        </div>
                                       
                                        <div class="form-group">
                                            <label style="font-size:16px;" for="article_libelle">Libellé article (obligatoire)</label>
                                            <input style="border:2px solid #E8E5B0;" type="text" class="form-control" id="article_libelle" name="article_libelle" aria-describedby="article libelle">
                                            <small id="article_libelle_message"></small>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label  style="font-size:16px;" for="article_prix">Prix (obligatoire)</label>
                                            <input style="border:2px solid #E8E5B0;" min="0" type="number" name="article_prix" class="form-control" id="article_prix">
                                            <small id="article_prix_message"></small>
                                        </div>

                                        <div class="form-group">
                                            <label  style="font-size:16px;" for="article_description">Description (optionel)</label>
                                            <textarea name="article_description" style="border:2px solid #E8E5B0;"  class="form-control" id="article_description" name="article_description"></textarea>
                                            <small id="article_description_message"></small>
                                        </div>

                                        <div class="form-group my-5">
                                            <label  style="font-size:16px;" for="article_prix">Photos (obligatoire)</label><br>
                                            <input style="border:2px solid #E8E5B0;margin-top:5px;display:none;"  type="file" class="form-control" id="article_images" name="article_images[]" multiple accept="image/png, image/gif, image/jpeg, image/jpg">

                                            <button style="margin-bottom:5px;" type="button" id="article_images_button" class="btn">Importer les Images <i class="fa fa-upload"></i></button><br>

                                            <div class="row">

                                                <div id="images_preview_all">

                                                </div>

                                            </div>

                                            

                                            <!-- <div class="input-images"></div> -->
                                            
                                            <small id="article_images_message"></small>
                                        </div>

                                        <div style="margin-bottom:3px;" class="form-group">
                                                <div>
                                                    <input type="radio" class="radio_test" id="option" name="choix" value="option"
                                                            checked>
                                                    <span for="option">Option</span>
                                                </div>
                                                <div>
                                                    <input type="radio" class="radio_test" id="taille_couleur_pointure" name="choix" value="taille_couleur_pointure">
                                                    <span for="taille_couleur_pointure">Taille et Couleur</span>
                                                </div>
                                                <div>
                                                    <input type="radio" class="radio_test" id="couleur_pointure" name="choix" value="couleur_pointure">
                                                    <span for="couleur_pointure">Pointure et Couleur</span>
                                                </div>
                                        </div>
                                        <div id="option_block" class="form-group">



                                              <div style="margin-bottom:10px;" class="row">


                                                    


                                                      <!-- <div class="col-xs-6">

                                                            <input name="options[]" placeholder="option" style="border:2px solid #E8E5B0;margin-bottom:1px;" type="text" class="form-control">
                                                    <input name="valeurs[]" placeholder="valeur" style="border:2px solid #E8E5B0;" type="text" class="form-control">

                                                      </div>

                                                      <div class="col-xs-6">

                                                          <button  style="margin-left:0px;" class="btn btn-danger ">Supprimer</button>
                                                      </div> -->


                                              </div>

                                              <div style="margin-bottom:10px;" class="row" id="newRow">

                                              </div>
                                              <button type="button" id="ajouter_option" style="margin-bottom:5px;" class="btn">Ajouter Option</button>

                                              <br>
                                              <div class="form-group">

                                                    <label style="font-size:16px;" for="quantite">Quantité</label>
                                                    <input id="quantite_option_block" name="quantite_option_block" style="border:2px solid #E8E5B0;" type="number" class="form-control" min="0">
                                                    <small id="quantite_option_block_message"></small>
                                              </div>
                                             

                                                 
                                             




                                        </div>

                                        <div id="no_option_block" style="display:none;" class="form-group">

                                        

                                         


                                        
                                                <table class="table taille_couleur" style="width: 100%">
                                                    <?php if(!empty($taille_pointure_data)): ?>
                                                    <?php foreach ($taille_pointure_data as $key => $value): ?>
                                                    <tr>
                                                        <td style="width: 15%;">
                                                            <div class="checkbox">
                                                                <label style="font-size:16px;">
                                                                <input  type="checkbox" value="<?=$value->taille_pointure_libelle; ?>" name="taille_id[]">
                                                                <?=$value->taille_pointure_libelle; ?>
                                                                </label>
                                                                <input class="nombre_taille" style="width: 60px;" type="number"  name="<?=$value->taille_pointure_libelle; ?>">
                                                            </div>
                                                        </td>
                                                        <td style="width: 85%;">
                                                            <?php $la_taille=$value->taille_pointure_libelle;; ?>
                                                            <?php if(!empty($article_couleur_data)): ?>
                                                            <?php foreach ($article_couleur_data as $key => $val): ?>
                                                            <div class="checkbox affiche_couleur" style="display: none;">
                                                                <label>
                                                                <input class="input_couleur" type="checkbox" value="<?=$la_taille.'|'.$val->article_couleur_libelle; ?>" name="couleur_id[]">
                                                                <?=$val->article_couleur_libelle; ?>
                                                                </label>
                                                                <input class="nombre_couleur" style="width: 60px;" type="number" name="<?=$la_taille.'|'.$val->article_couleur_libelle;?>" >
                                                            </div>
                                                            <?php endforeach ?>
                                                            <?php endif ?>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach ?>
                                                    <?php endif ?>                                                    <tr>
                                                        <div style="display: none;" class="count_couleur"><?=count($article_couleur_data)  ?></div>
                                                        <td><button style="margin-top:10px;margin-bottom:10px;" class="btn  btn-xs tab_9 add_taille_raccourci">Ajouter une taille</button> </td>
                                                        <td><button style="margin-top:10px;margin-bottom:10px;" class="btn  btn-xs tab_4 add_couleur_raccourci">Ajouter une couleur</button></td>
                                                    </tr>
                                                </table>
                                           





                                        </div> <!--    end of div no_option_block-->
                                        <div id="pointure_option_block" style="display:none;"  class="form-group">


                                           <!-- <h1>pointure</h1> -->

                                        <table class="table taille_couleur2" style="width: 100%">
                                                    <?php if(!empty($pointure_pointure_data)): ?>
                                                    <?php foreach ($pointure_pointure_data as $key => $value): ?>
                                                    <tr>
                                                        <td style="width: 15%;">
                                                            <div class="checkbox">
                                                                <label style="font-size:16px;">
                                                                <input  type="checkbox" value="<?=$value->taille_pointure_libelle; ?>" name="taille_id[]">
                                                                <?=$value->taille_pointure_libelle; ?>
                                                                </label>
                                                                <input class="nombre_taille2" style="width: 60px;" type="number"  name="<?=$value->taille_pointure_libelle; ?>">
                                                            </div>
                                                        </td>
                                                        <td style="width: 85%;">
                                                            <?php $la_taille=$value->taille_pointure_libelle;; ?>
                                                            <?php if(!empty($article_couleur_data)): ?>
                                                            <?php foreach ($article_couleur_data as $key => $val): ?>
                                                            <div class="checkbox affiche_couleur2" style="display: none;">
                                                                <label>
                                                                <input class="input_couleur2" type="checkbox" value="<?=$la_taille.'|'.$val->article_couleur_libelle; ?>" name="couleur_id[]">
                                                                <?=$val->article_couleur_libelle; ?>
                                                                </label>
                                                                <input class="nombre_couleur2" style="width: 60px;" type="number" name="<?=$la_taille.'|'.$val->article_couleur_libelle;?>" >
                                                            </div>
                                                            <?php endforeach ?>
                                                            <?php endif ?>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach ?>
                                                    <?php endif ?>
                                                    <tr >
                                                        <div style="display: none;" class="count_couleur2"><?=count($article_couleur_data)  ?></div>
                                                        <td><button style="margin-top:10px;margin-bottom:10px;" class="btn  btn-xs tab_9 add_pointure_raccourci">Ajouter une pointure</button> </td>
                                                        <td><button style="margin-top:10px;margin-bottom:10px;" class="btn  btn-xs tab_4 add_couleur_raccourci">Ajouter une couleur</button></td>
                                                    </tr>
                                                </table>
                                        </div>




                                        <hr style="margin-bottom:5px;">


                                        <div class="text-center  my-2">
                                             <button style="margin-top:10px;margin-bottom:10px;" id="sauvegarder_article_button_mine"  type="submit" class="btn">Sauvegarder</button>
                                        </div>
                                        
                                        
                                        </form>
                                            <!-- <form class="col s12 m"-t-20>
                                                <div class="input-field form-input col s6">
                                                    <i class="material-icons prefix">account_circle</i>
                                                    <input id="icon_prefix" type="tel" class="validate">
                                                    <label for="icon_prefix">First Name</label>
                                                </div>
                                                <div class="input-field form-input col s6">
                                                    <i class="material-icons prefix">account_circle</i>
                                                    <input type="tel" class="validate">
                                                    <label>Last Name</label>
                                                </div>
                                                <div class="input-field form-input col s6">
                                                    <i class="material-icons prefix">email</i>
                                                    <input type="tel" class="validate">
                                                    <label>Email</label>
                                                </div>
                                                <div class="input-field form-input col s6">
                                                    <i class="material-icons prefix">lock</i>
                                                    <input type="password" class="validate">
                                                    <label>Password</label>
                                                </div>
                                                <div class="input-field form-input col s6">
                                                    <i class="material-icons prefix">phone</i>
                                                    <input id="icon_telephone" type="tel" class="validate">
                                                    <label for="icon_telephone">Telephone</label>
                                                </div>
                                                <div class="input-field form-input col s6">
                                                    <i class="material-icons prefix">textsms</i>
                                                    <input type="text" id="autocomplete-input" class="autocomplete">
                                                    <label for="autocomplete-input">Autocomplete</label>
                                                </div>
                                                <div class="input-field form-input form-input-select col s6">
                                                    <i></i>
                                                    <select class="icons">
                                                        <option value="" disabled selected>Choose your option</option>
                                                        <option value="" data-icon="assets/assets2/dist/img/avatar.png" class="left circle">example 1</option>
                                                        <option value="" data-icon="assets/assets2/dist/img/avatar2.png" class="left circle">example 2</option>
                                                        <option value="" data-icon="assets/assets2/dist/img/avatar3.png" class="left circle">example 3</option>
                                                    </select>
                                                    <label>Images in select</label>
                                                </div>
                                                <div class="input-field form-input form-input-select col s6">
                                                    <select class="icons">
                                                        <option value="" disabled selected>Choose your option</option>
                                                        <option value="1">Option 1</option>
                                                        <option value="2">Option 2</option>
                                                        <option value="3">Option 3</option>
                                                    </select>
                                                    <label>Materialize Select</label>
                                                </div>
                                            </form> -->
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- ./basic forms -->

                            <!-- forms cntrol -->
                            
                        </div>
                        <!-- ./bootstrap forms -->
                    </div>
                    <!-- ./row -->
                </div>
                <!-- ./cotainer -->
            </div>
            <!-- ./page-content -->
        </div>
        <!-- ./page-content-wrapper -->

        <!-- Preloader -->
        <div id="preloader">
            <div class="preloader-position">
                <div class="preloader-wrapper big active">
                    <div class="spinner-layer spinner-teal">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="gap-patch">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Preloader -->
        <!-- Start Core Plugins-->

        <!-- jQuery -->
        <script src="assets/assets2/plugins/jQuery/jquery-3.2.1.min.js" type="text/javascript"></script>
        <!-- jquery-ui -->
        <script src="assets/assets2/plugins/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="assets/assets2/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- materialize  -->
        <script src="assets/assets2/plugins/materialize/js/materialize.min.js" type="text/javascript"></script>
        <!-- metismenu-master -->
        <script src="assets/assets2/plugins/metismenu-master/dist/metisMenu.min.js" type="text/javascript"></script>
        <!-- m-custom-scrollbar -->
        <script src="assets/assets2/plugins/malihu-custom-scrollbar/jquery.mCustomScrollbar.concat.min.js" type="text/javascript"></script>
        <!-- scroll -->
        <script src="assets/assets2/plugins/simplebar/dist/simplebar.js" type="text/javascript"></script>


         <!-- sweet alert2 -->
         <script src="assets/assets2/plugins/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
        <script src="assets/assets2/plugins/notify/js/notify.js" type="text/javascript"></script>
        <script src="assets/assets2/plugins/notify/js/prettify.js" type="text/javascript"></script>
        <!-- custom js -->

        <!-- custom js -->
        <script src="assets/assets2/dist/js/custom.js" type="text/javascript"></script>
        <!-- End Core Plugins-->
        <!-- Start Theme label Script-->
        <!-- main js -->
        <script src="assets/assets2/dist/js/main.js" type="text/javascript"></script>


        <!-- Image Uploader Js -->
<script type="text/javascript" src="assets\libraries/jquery-image-uploader-preview-and-delete/dist/image-uploader.min.js"></script>

<!-- ckeditor js -->
<script src="assets/assets2/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>

        <!-- End Theme label Script-->
        <script>
            "use strict";



          
















            $(function () {
                // $('select').material_select();
                // Materialize.updateTextFields();
                // // autocomplete
                // $('input.autocomplete').autocomplete({
                //     data: {
                //         "Apple": null,
                //         "Microsoft": null,
                //         "Google": 'https://placehold.it/250x250'
                //     },
                //     limit: 20, // The max amount of results that can be shown at once. Default: Infinity.
                //     onAutocomplete: function (val) {
                //         // Callback function when value is autcompleted.
                //     },
                //     minLength: 1 // The minimum length of the input for the autocomplete to start. Default: 1.
                // });

                // //datepicker
                // $('.datepicker').pickadate({
                //     selectMonths: true, // Creates a dropdown to control month
                //     selectYears: 15 // Creates a dropdown of 15 years to control year
                // });



                















                $(".add_taille_raccourci").click(function(){

                      window.open("?p=taille_articles","_self");
                });

                $(".add_pointure_raccourci").click(function(){

                      window.open("?p=pointure_articles","_self");
                });

                $(".add_couleur_raccourci").click(function(){

                      window.open("?p=couleur_articles","_self");
                });



                //  var article_images = $('.input-images').imageUploader({


                //         label:"uploader vos photos ici",
                //         extensions:['.jpg','.jpeg','.png','.gif']
                // });


                // console.log(article_images);

                 


               


                







                CKEDITOR.replace('article_description');


               

                            //   var quantite = 0;



                            //   $(".changement_etat_input_quantite").change(function(){


                            //          quantite = $(this).val();

                                     
                            //   });



                        //     var tailleArray = [];
                           

                        //     var quantite =0;

                        //     var test = false;






                        //       $( ".checkator_sourc.changement_etat_checkbox" ).on( "click", function(){


                        //          test = $(this).is(":checked");

                        //         console.log(test);


                        //         var id_value = $(this).attr("data-taille_pointure_checkbox_id");

                        //         var id_input_quantite = $("#input_quantite_principale"+id_value);

                        //         var id_input_checkbox = $("#input_checkbox"+id_value);

                        //         var article_color_block_display =$("#article_color_block_display"+id_value);



                               
                               
                        //         // console.log(id_input_quantite);
                        //         // console.log(id_input_checkbox);
                        //         // console.log(article_color_block_display);

                                





                                



                        //     //     console.log(id_input_checkbox);
                        //     //    console.log(id_input_quantite);
                               

                        //         // alert(test);


                        //         // var alias_quantite = "";


                        //     if(test==true){

                        //         // console.log("checked");
                               
                                


                                      


                        //                 var id_value = $(this).attr("data-taille_pointure_checkbox_id");

                                        


                                        


                        //                  var id_input_quantite = $("#input_quantite_principale"+id_value);

                        //                  var id_input_checkbox = $("#input_checkbox"+id_value);


                        //                 //  $(this).attr("checked");


                                         



                                        
                        //                   quantite = id_input_quantite.val();

                                          
                                        
                        //                   if(quantite==""){

                        //                      alert(" vous devez ajouter la quantite");

                        //                      id_input_checkbox.prop('checked',false);
                                             
                        //                   }else{

                        //                         if(quantite==0){

                        //                             alert(" la quantite doit être superieure ou égale à 1");
                        //                             id_input_checkbox.prop('checked',false);
                        //                         }else{

                        //                               var article_color_block_display =$("#article_color_block_display"+id_value);

                                                      

                        //                               article_color_block_display.css("display","block");

                        //                               test =false;

                        //                               $(this).attr("data-quantite_taille_attribute",quantite);


                        //                               quantite = $(this).attr("data-quantite_taille_attribute");



                        //                               var my_taille = $(this);



                        //                             //   console.log(quantite);
                                                      


                        //                             //  if(tailleArray.includes(id_value)){



                        //                             //        tailleArray = jQuery.grep(tailleArray,function(value){

                        //                             //            return value !=id_value;
                        //                             //        });
                        //                             //  }else{

                                                        
                        //                             //     tailleArray.push(id_value);
                        //                             //  }


                        //                             var verification = id_value+'|'+quantite;

                                                    

                                                     
                        //                             //  tailleArray.push(id_value+'|'+quantite);
                                                      

                        //                             //   console.log(tailleArray);



                        //                             var check = false;

                        //                             var quantite_secondaire;

                        //                             var somme_sous_quantite = [];

                        //                             somme_sous_quantite[id_value] = 0;

                        //                             var somme = [];

                        //                             somme[id_value] =0;


                        //                                 $("input[name='couleur_id[]']").unbind().click(function(e){


                        //                                     // e.stopPropagation();


                        //                                     var check = $(this).is(":checked");

                                                            


                        //                                     var identification = $(this).attr("data-taille_pointure_article_couleur_checkbox");


                        //                                     var id = $("#"+identification);


                        //                                     // var id_couleur = $(this).attr("data-changement_etat_couleur_quantite_id");

                        //                                     // alert(id_couleur);

                                                            

                                                            


                        //                                     if(check==true){

                                                                    

                                                                    

                        //                                     var sous_quantite = id.val();

                        //                                     if(sous_quantite=="" || sous_quantite==0){


                        //                                              alert("la quantité doit être supérieure ou égale à 1");
                        //                                              $(this).prop('checked',false);
                        //                                     }else{

                                                                   
                                                                    

                        //                                         // alert("good");
                        //                                         // console.log(id.val());


                        //                                         id.attr("data-quantite_secondaire_taille_attribute",sous_quantite);


                        //                                         quantite_secondaire = id.attr("data-quantite_secondaire_taille_attribute");

                        //                                         // somme_sous_quantite=parseInt(somme_sous_quantite)+parseInt(quantite_secondaire);

                        //                                         // somme_sous_quantite = parseInt(somme_sous_quantite);

                        //                                         my_taille.attr("data-somme_quantite"+id_value,parseInt(quantite_secondaire));


                        //                                          somme[id_value] = my_taille.attr("data-somme_quantite"+id_value);


                        //                                         somme_sous_quantite[id_value] = parseInt(somme_sous_quantite[id_value]) + parseInt(somme[id_value]);





                        //                                         if(somme_sous_quantite[id_value] <=quantite){


                        //                                             alert(somme_sous_quantite[id_value]);


                        //                                         }else{


                        //                                             alert("la quantite n'est pas bien repartis , veillez bien consuler la quantité initiale");
                        //                                             // id.val("");
                        //                                             var tout_decocher_couleur_checkbox = $(".tout_decocher_couleur_checkbox"+id_value);
                        //                                              tout_decocher_couleur_checkbox.prop('checked',false);


                        //                                              var tout_decocher_couleur_quantie = $(".tout_decocher_couleur_quantite"+id_value);
                        //                                              tout_decocher_couleur_quantie.val("");


                        //                                             // article_color_block_display.css("display","none");
                                                      
                        //                                             // id_input_checkbox.prop('checked',false);
                        //                                             // id_input_quantite.val("");



                        //                                             somme_sous_quantite[id_value] = 0;

                        //                                             somme[id_value] =0;


                                                                    


                        //                                         }

                                                                



                        //                                         // alert(quantite_secondaire);




                                                                
                        //                                     }

                                                            
                        //                                         // console.log(id.val());

                        //                                         // console.log($(this)[0]);

                                                                

                                                                    

                                                                    
                        //                                     }else{


                        //                                         id.val("");

                                                                
                                                               

                        //                                     }
                                                            

                                                           


                                                             
                        //                                 });







                        //                         }
                        //                   }



                                          




                        //         }else{


                        //             //   console.log("unchecked");



                        //                          id_input_quantite.val("");
                        //                         //    var article_color_block_display =$("#article_color_block_display"+id_value);



                        //                         var id_input_checkbox = $("#input_checkbox"+id_value);

                        //                         var article_color_block_display =$("#article_color_block_display"+id_value);

                        //                               article_color_block_display.css("display","none");
                                                      
                        //                               id_input_checkbox.prop('checked',false);



                        //                             //   tailleArray = jQuery.grep(tailleArray,function(value){

                                                              


                        //                             //          var arrayValues = value.split("|");


                        //                             //          if(arrayValues[0]==id_value){

                        //                             //             return value != id_value+'|'+quantite;
                        //                             //          }
                                                             
                        //                             //          return value;



                                                                

                                                             

                                                                
                        //                             //     });


                                                    

                        //                                 console.log(tailleArray);



                                                      



                                                      

                                             
                        //         }
                                             
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                        //                 } );
















                        //   pascal code 

















                    
                    
                  



                $("#ajouter_option").click(function(){



//                     <div style="margin-bottom:10px;" class="row">


// <div class="col-sm-6">

//       <input name="options[]" placeholder="option" style="border:2px solid #E8E5B0;margin-bottom:1px;" type="text" class="form-control">
// <input name="valeurs[]" placeholder="valeur" style="border:2px solid #E8E5B0;" type="text" class="form-control">

// </div>

// <div class="col-sm-6">

//     <button style="margin-left:0px;" class="btn btn-danger ">Supprimer</button>
// </div>


// </div>


                    var html ='';

                    html+='<div id="inputRow" style="margin-bottom:10px;margin-left:2px;" class="row">';
                    html+='<div class="col-xs-6">';
                    html+='<input name="options[]" placeholder="option" style="border:2px solid #E8E5B0;margin-bottom:1px;" type="text" class="form-control">';
                    html+='<input name="valeurs[]" placeholder="valeur" style="border:2px solid #E8E5B0;" type="text" class="form-control">';
                    html+='</div>';
                    html+='<div class="col-xs-6">';
                    html+='<button id="removeRow" style="margin-left:0px;" class="btn btn-danger ">Supprimer</button>';
                    html+='</div>';
                    html+='</div>';



                     $("#newRow").append(html);


                           
                });

                $(document).on('click','#removeRow',function(){

                        $(this).closest('#inputRow').remove();
                });

                      
                



                


               

              

            //    $(".changement_etat_input_quantite").change(function(){

            //     var dis = $(this).val();


            //     console.log($(this));

            //     // alert(dis);
                       
            //    });





























            });
        </script>



<script>

$(document).ready(function(){

$(".categorie_tbody").on("click",".description_suite",function(){
       
    var text=$(this).closest('tr').find('.texte').text();
    $(".description_suite_texte").html(text);
   
});

$(".save_produit_btn").click(function(e){
    e.preventDefault();
    $(".loading_article").show();
    var formulaire=document.querySelector(".save_produit");
    var formdata=new FormData(formulaire);
    var images=$("input[name='libelle_image[]']").files;
    formdata.append("libelle_image", images);
    var lien_save_produit=$(".lien_save_produit").text();
    var lien_page=$(".lien_page").text();  
    // alert(lien_save_produit);
     $.ajax({
     // url: "Vues/Admin/save_produit.php",
     url: "?p="+lien_save_produit,
     type: "POST",
     data: formdata,
     contentType: false,  // dire à jQuery de ne pas définir le contentType
     processData: false,  // dire à jQuery de ne pas traiter les données
     success:function(rep){
          // alert(rep);
          $(".loading_article").hide();
          if(parseInt(rep)>=1){
            alert("Article enregistré avec succès!!");
            window.location.reload();
          }
     }
    });

});

var count_couleur=$(".count_couleur").text();


count_couleur=parseInt(count_couleur);

$(".nombre_couleur").attr("readonly","");

$(".taille_couleur").on("click","input[name='taille_id[]']",function(e){
    var objet=$(this).closest("tr");
    var cocher=objet.find("input[name='taille_id[]']").prop("checked");
    var valeur=objet.find(".nombre_taille").val();
    if(parseInt(valeur)>0){
    if(cocher==true)
        objet.find("td:eq(1)>.affiche_couleur").show();
    else
        objet.find("td:eq(1)>.affiche_couleur").hide();
    }else{
        objet.find("td:eq(1)>.affiche_couleur").hide();
    }
});

$(".taille_couleur").on("keyup click",".nombre_taille",function(e){
    var objet=$(this).closest("tr");
    var valeur=objet.find(".nombre_taille").val();
   
    if(parseInt(valeur)>0){
    var cocher=objet.find("input[name='taille_id[]']").prop("checked");

    if(cocher==true)
        objet.find("td:eq(1)>.affiche_couleur").show();
    else
        objet.find("td:eq(1)>.affiche_couleur").hide();
    }else{
        objet.find("td:eq(1)>.affiche_couleur").hide();
    }

    for(i=0;i<count_couleur;i++){
            val_couleur=objet.find(".nombre_couleur:eq("+i+")").val();
            val_couleur=parseInt(val_couleur);
            if(!Number.isInteger(val_couleur)){
                objet.find(".input_couleur:eq("+i+")").removeAttr("disabled");
            }    
    }

});


$(".taille_couleur").on("click",".input_couleur",function(e){
    var objet=$(this).closest("tr");
    for(var i=0;i<count_couleur;i++){
        var cocher=objet.find("input[name='couleur_id[]']:eq("+i+")").prop("checked");
        if(cocher){
            objet.find(".nombre_couleur:eq("+i+")").removeAttr("readonly");
            // $(".nombre_couleur").attr("readonly",false);
        }
    }  
});

$(".taille_couleur").on("keyup click",".nombre_couleur",function(e){
    var objet=$(this).closest("tr");
    var nombre_taille=objet.find(".nombre_taille").val();
    nombre_taille=parseInt(nombre_taille);

    var valeur=objet.find(".nombre_couleur").val();
   
    var total=0;
    var val_couleur;
    var total_atteint=false;
    var total_depasse=false;

    for(var i=0;i<count_couleur;i++){
        val_couleur=objet.find(".nombre_couleur:eq("+i+")").val();
        val_couleur=parseInt(val_couleur);
       
        if(val_couleur>0)
            total+=val_couleur;

        if(total==nombre_taille){
            total_atteint=true;
            objet.find(".nombre_couleur").attr("border","");
        }else if(total>nombre_taille) {
            objet.find(".nombre_couleur:eq("+i+")").val("");
            total_depasse=true;
        }
    }
   
    if(total_depasse){
        alert("Vous avez depassé le nombre total:"+nombre_taille);

        for(i=0;i<count_couleur;i++){
            val_couleur=objet.find(".nombre_couleur:eq("+i+")").val();
            val_couleur=parseInt(val_couleur);
            if(!Number.isInteger(val_couleur)){
                objet.find(".input_couleur:eq("+i+")").removeAttr("disabled");
            }    
        }
    }

    if(total_atteint){
        for(i=0;i<count_couleur;i++){
            val_couleur=objet.find(".nombre_couleur:eq("+i+")").val();
            val_couleur=parseInt(val_couleur);
            if(!Number.isInteger(val_couleur)){
                objet.find(".nombre_couleur:eq("+i+")").attr("readonly","");
                objet.find(".input_couleur:eq("+i+")").attr("checked",false);
                objet.find(".input_couleur:eq("+i+")").attr("disabled",true);
            }
           
        }
    }
   
});

 

$(".couleur_tbody").on("click",".couleur",function(event){
    var objet=$(this).closest("tr");
    var id=objet.find("td:eq(0)").text();
    var libelle=objet.find("td:eq(2)").text();
    $("input[name='_couleur_libelle']").val(libelle);
    $("input[name='_couleur_id']").val(id);
});

$(".couleur_valider").click(function(){
    var libelle = $("input[name='_couleur_libelle']").val();
    var id = $("input[name='_couleur_id']").val();
    $.post("Vues/Admin/modifier_table.php",{couleur_id:id,couleur_libelle:libelle,table:'couleur'},function(reponse){
        $(".couleur_annuler").trigger("click");
        $(".couleur_tbody").html(reponse);

    });
})

$(".taille_tbody").on("click",".taille",function(event){
    var objet=$(this).closest("tr");
    var id=objet.find("td:eq(0)").text();
    var libelle=objet.find("td:eq(2)").text();
    $("input[name='_taille_libelle']").val(libelle);
    $("input[name='_taille_id']").val(id);
});

$(".couleur_valider").click(function(){
    var libelle = $("input[name='_taille_libelle']").val();
    var id = $("input[name='_taille_id']").val();
    $.post("Vues/Admin/modifier_table.php",{taille_id:id,taille_libelle:libelle,table:'taille'},function(reponse){
        $(".taille_annuler").trigger("click");
        $(".taille_tbody").html(reponse);

    });
})

  $(".categorie_tbody").on("click",".categorie",function(event){
    var objet=$(this).closest("tr");
    var id=objet.find("td:eq(0)").text();
    var libelle=objet.find("td:eq(2)").text();
    var img=objet.find("td:eq(6)").text();
    // alert(id);
    var description=objet.find("td:eq(3)").html();
    // alert(description);
    $("input[name='_categorie_libelle']").val(libelle);
    $('textarea[name="_categorie_description"]').val(description);
    $(".image_cat_mod").attr('src',img);
    $("input[name='_image']").val(img);
    $("input[name='_categorie_id']").val(id);
});

$(".couleur_valider").click(function(){
    var libelle = $("input[name='_categorie_libelle']").val();
    var description = $("textarea[name='_categorie_description']").val();
    // alert(description)
    var id = $("input[name='_categorie_id']").val();

    var img = $("input[name='_image']").val();
   
    var formulaire=document.querySelector(".save_cat");
    var formdata=new FormData(formulaire);
    formdata.append("_image",img);
    formdata.append("categorie_id",id);
    formdata.append("categorie_libelle",libelle);
    formdata.append("categorie_description",description);
    formdata.append("table",'categorie');
    var images=$("input[name='fichier_cat_mod']").files;
    // alert(images);
    formdata.append("categorie_image", images);
   
     $.ajax({
     // url: "Vues/Admin/save_produit.php",
     url: "Vues/Admin/modifier_table.php",
     type: "POST",
     data: formdata,
     contentType: false,  // dire à jQuery de ne pas définir le contentType
     processData: false,  // dire à jQuery de ne pas traiter les données
     success:function(reponse){
        $(".categorie_annuler").trigger("click");
        $(".categorie_tbody").html(reponse);
        $("input[name='_categorie_libelle']").val("");
        $("textarea[name='_categorie_description']").val("");
        $("input[name='_categorie_id']").val("");
        $("input[name='_image']").val("");
        formdata.append("categorie_image", "");
        $('.image_cat_mod').attr('src', '');
        setTimeout("location.reload(false);", 1000);
   
     }
    });

    // $.post("Vues/Admin/modifier_table.php",formdata,function(reponse){
    //     alert('1');
    //     $(".categorie_annuler").trigger("click");
    //     $(".categorie_tbody").html(reponse);

    // });
});




$(".joindre_image_cat").click(function(ev){
    ev.preventDefault();
    $(".im_cat").trigger("click");
});

$(".joindre_image_cat_mod").click(function(ev){
    ev.preventDefault();
    $(".im_cat_mod").trigger("click");
});
});
      </script>







<!-- this following script is for pointure_article --->





<script>

$(document).ready(function(){

$(".categorie_tbody").on("click",".description_suite",function(){
       
    var text=$(this).closest('tr').find('.texte').text();
    $(".description_suite_texte").html(text);
   
});

$(".save_produit_btn").click(function(e){
    e.preventDefault();
    $(".loading_article").show();
    var formulaire=document.querySelector(".save_produit");
    var formdata=new FormData(formulaire);
    var images=$("input[name='libelle_image[]']").files;
    formdata.append("libelle_image", images);
    var lien_save_produit=$(".lien_save_produit").text();
    var lien_page=$(".lien_page").text();  
    // alert(lien_save_produit);
     $.ajax({
     // url: "Vues/Admin/save_produit.php",
     url: "?p="+lien_save_produit,
     type: "POST",
     data: formdata,
     contentType: false,  // dire à jQuery de ne pas définir le contentType
     processData: false,  // dire à jQuery de ne pas traiter les données
     success:function(rep){
          // alert(rep);
          $(".loading_article").hide();
          if(parseInt(rep)>=1){
            alert("Article enregistré avec succès!!");
            window.location.reload();
          }
     }
    });

});

var count_couleur=$(".count_couleur2").text();


count_couleur=parseInt(count_couleur);

$(".nombre_couleur2").attr("readonly","");

$(".taille_couleur2").on("click","input[name='taille_id[]']",function(e){
    var objet=$(this).closest("tr");
    var cocher=objet.find("input[name='taille_id[]']").prop("checked");
    var valeur=objet.find(".nombre_taille2").val();
    if(parseInt(valeur)>0){
    if(cocher==true)
        objet.find("td:eq(1)>.affiche_couleur2").show();
    else
        objet.find("td:eq(1)>.affiche_couleur2").hide();
    }else{
        objet.find("td:eq(1)>.affiche_couleur2").hide();
    }
});

$(".taille_couleur2").on("keyup click",".nombre_taille2",function(e){
    var objet=$(this).closest("tr");
    var valeur=objet.find(".nombre_taille2").val();
   
    if(parseInt(valeur)>0){
    var cocher=objet.find("input[name='taille_id[]']").prop("checked");

    if(cocher==true)
        objet.find("td:eq(1)>.affiche_couleur2").show();
    else
        objet.find("td:eq(1)>.affiche_couleur2").hide();
    }else{
        objet.find("td:eq(1)>.affiche_couleur2").hide();
    }

    for(i=0;i<count_couleur;i++){
            val_couleur=objet.find(".nombre_couleur2:eq("+i+")").val();
            val_couleur=parseInt(val_couleur);
            if(!Number.isInteger(val_couleur)){
                objet.find(".input_couleur2:eq("+i+")").removeAttr("disabled");
            }    
    }

});


$(".taille_couleur2").on("click",".input_couleur2",function(e){
    var objet=$(this).closest("tr");
    for(var i=0;i<count_couleur;i++){
        var cocher=objet.find("input[name='couleur_id[]']:eq("+i+")").prop("checked");
        if(cocher){
            objet.find(".nombre_couleur2:eq("+i+")").removeAttr("readonly");
            // $(".nombre_couleur2").attr("readonly",false);
        }
    }  
});

$(".taille_couleur2").on("keyup click",".nombre_couleur2",function(e){
    var objet=$(this).closest("tr");
    var nombre_taille=objet.find(".nombre_taille2").val();
    nombre_taille=parseInt(nombre_taille);

    var valeur=objet.find(".nombre_couleur2").val();
   
    var total=0;
    var val_couleur;
    var total_atteint=false;
    var total_depasse=false;

    for(var i=0;i<count_couleur;i++){
        val_couleur=objet.find(".nombre_couleur2:eq("+i+")").val();
        val_couleur=parseInt(val_couleur);
       
        if(val_couleur>0)
            total+=val_couleur;

        if(total==nombre_taille){
            total_atteint=true;
            objet.find(".nombre_couleur2").attr("border","");
        }else if(total>nombre_taille) {
            objet.find(".nombre_couleur2:eq("+i+")").val("");
            total_depasse=true;
        }
    }
   
    if(total_depasse){
        alert("Vous avez depassé le nombre total:"+nombre_taille);

        for(i=0;i<count_couleur;i++){
            val_couleur=objet.find(".nombre_couleur2:eq("+i+")").val();
            val_couleur=parseInt(val_couleur);
            if(!Number.isInteger(val_couleur)){
                objet.find(".input_couleur2:eq("+i+")").removeAttr("disabled");
            }    
        }
    }

    if(total_atteint){
        for(i=0;i<count_couleur;i++){
            val_couleur=objet.find(".nombre_couleur2:eq("+i+")").val();
            val_couleur=parseInt(val_couleur);
            if(!Number.isInteger(val_couleur)){
                objet.find(".nombre_couleur2:eq("+i+")").attr("readonly","");
                objet.find(".input_couleur2:eq("+i+")").attr("checked",false);
                objet.find(".input_couleur2:eq("+i+")").attr("disabled",true);
            }
           
        }
    }
   
});

 

$(".couleur_tbody").on("click",".couleur2",function(event){
    var objet=$(this).closest("tr");
    var id=objet.find("td:eq(0)").text();
    var libelle=objet.find("td:eq(2)").text();
    $("input[name='_couleur_libelle']").val(libelle);
    $("input[name='_couleur_id']").val(id);
});

$(".couleur_valider").click(function(){
    var libelle = $("input[name='_couleur_libelle']").val();
    var id = $("input[name='_couleur_id']").val();
    $.post("Vues/Admin/modifier_table.php",{couleur_id:id,couleur_libelle:libelle,table:'couleur'},function(reponse){
        $(".couleur_annuler").trigger("click");
        $(".couleur_tbody").html(reponse);

    });
})

$(".taille_tbody").on("click",".taille2",function(event){
    var objet=$(this).closest("tr");
    var id=objet.find("td:eq(0)").text();
    var libelle=objet.find("td:eq(2)").text();
    $("input[name='_taille_libelle']").val(libelle);
    $("input[name='_taille_id']").val(id);
});

$(".couleur_valider").click(function(){
    var libelle = $("input[name='_taille_libelle']").val();
    var id = $("input[name='_taille_id']").val();
    $.post("Vues/Admin/modifier_table.php",{taille_id:id,taille_libelle:libelle,table:'taille'},function(reponse){
        $(".taille_annuler").trigger("click");
        $(".taille_tbody").html(reponse);

    });
})

  $(".categorie_tbody").on("click",".categorie",function(event){
    var objet=$(this).closest("tr");
    var id=objet.find("td:eq(0)").text();
    var libelle=objet.find("td:eq(2)").text();
    var img=objet.find("td:eq(6)").text();
    // alert(id);
    var description=objet.find("td:eq(3)").html();
    // alert(description);
    $("input[name='_categorie_libelle']").val(libelle);
    $('textarea[name="_categorie_description"]').val(description);
    $(".image_cat_mod").attr('src',img);
    $("input[name='_image']").val(img);
    $("input[name='_categorie_id']").val(id);
});

$(".couleur_valider").click(function(){
    var libelle = $("input[name='_categorie_libelle']").val();
    var description = $("textarea[name='_categorie_description']").val();
    // alert(description)
    var id = $("input[name='_categorie_id']").val();

    var img = $("input[name='_image']").val();
   
    var formulaire=document.querySelector(".save_cat");
    var formdata=new FormData(formulaire);
    formdata.append("_image",img);
    formdata.append("categorie_id",id);
    formdata.append("categorie_libelle",libelle);
    formdata.append("categorie_description",description);
    formdata.append("table",'categorie');
    var images=$("input[name='fichier_cat_mod']").files;
    // alert(images);
    formdata.append("categorie_image", images);
   
     $.ajax({
     // url: "Vues/Admin/save_produit.php",
     url: "Vues/Admin/modifier_table.php",
     type: "POST",
     data: formdata,
     contentType: false,  // dire à jQuery de ne pas définir le contentType
     processData: false,  // dire à jQuery de ne pas traiter les données
     success:function(reponse){
        $(".categorie_annuler").trigger("click");
        $(".categorie_tbody").html(reponse);
        $("input[name='_categorie_libelle']").val("");
        $("textarea[name='_categorie_description']").val("");
        $("input[name='_categorie_id']").val("");
        $("input[name='_image']").val("");
        formdata.append("categorie_image", "");
        $('.image_cat_mod').attr('src', '');
        setTimeout("location.reload(false);", 1000);
   
     }
    });

    // $.post("Vues/Admin/modifier_table.php",formdata,function(reponse){
    //     alert('1');
    //     $(".categorie_annuler").trigger("click");
    //     $(".categorie_tbody").html(reponse);

    // });
});




$(".joindre_image_cat").click(function(ev){
    ev.preventDefault();
    $(".im_cat").trigger("click");
});

$(".joindre_image_cat_mod").click(function(ev){
    ev.preventDefault();
    $(".im_cat_mod").trigger("click");
});
});
      </script>



















<!--  here , I'm gonna store articles  -->





<script>

$("#no_option_block").hide();
                $("#option_block").show();




                var valeur_option_radio = $(".radio_test").val();

                $(".radio_test").change(function(){


                    valeur_option_radio = $(this).val();


                         if(valeur_option_radio=="option"){

                              $("#no_option_block").hide();
                              $("#option_block").show();
                              $("#pointure_option_block").hide();
                         }else if(valeur_option_radio=="taille_couleur_pointure"){

                              $("#option_block").hide();
                              $("#pointure_option_block").hide();
                              $("#no_option_block").show();



                            }else{


$("#option_block").hide();
 $("#pointure_option_block").show();
 $("#no_option_block").hide();
}


});
























$("#article_images_button").click(function(){


$("#article_images").click();
});





if (window.File && window.FileList && window.FileReader) {
$("#article_images").on("change", function(e) {
var files = e.target.files,
filesLength = files.length;
for (var i = 0; i < filesLength; i++) {
var f = files[i]
var fileReader = new FileReader();
fileReader.onload = (function(e) {
var file = e.target;


 var array_of_images = files;

//  console.log(array_of_images);

 
$("<div style=\"margin-top:4px;margin-bottom:4px;\" class=\"col-sm-3 pip\" >" +
    "<img style=\"width:100px;height:100px;\" class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
    "<button style=\"padding-top:0px;\" class=\"remove btn btn-danger btn-sm\"><i class=\"fa fa-trash\"></></button>" +
    "</div>").insertAfter("#images_preview_all");
$(".remove").click(function(){
    $(this).parent(".pip").remove();


    

    

    
     console.log(files);

});

// Old code here
/*$("<img></img>", {
    class: "imageThumb",
    src: e.target.result,
    title: file.name + " | Click to remove"
}).insertAfter("#files").click(function(){$(this).remove();});*/

});
fileReader.readAsDataURL(f);
}


});
} else {
alert("Your browser doesn't support to File API")
}































$("#sauvegarder_article_form_mine").submit(function(e){


        e.preventDefault();


        var errors =[];





               var article_categorie = $("#article_categorie").val();

               var  article_marque = $("#article_marque").val();

               var article_libelle = $("#article_libelle").val();

               var article_description = CKEDITOR.instances.article_description.getData();

               var article_prix = $("#article_prix").val();

               var quantite_option_block = $("#quantite_option_block").val();

               


              


            //    console.log(article_categorie);
            //    console.log(article_marque);
            //    console.log(article_libelle);
            //    console.log(article_description);
            //    console.log(article_prix);


              

               


               if(article_categorie==""){

                  $("#article_categorie_message").text("ce champ est obligatoire").addClass("text-danger");
                  alert("le champ categorie est obligatoire");
                  errors.push("categorie");



               }else{

                $("#article_categorie_message").text("").removeClass("text-danger");
                                 errors = errors.filter(function(value, index, arr)  { 
                                        return value !="categorie";
                                    });


               }



               if(article_libelle==""){

                  $("#article_libelle_message").text("ce champ est obligatoire").addClass("text-danger");
                  alert("le champ libelle est obligatoire");
                  errors.push("libelle");



               }else{

                $("#article_libelle_message").text("").removeClass("text-danger");
                                 errors = errors.filter(function(value, index, arr)  { 
                                        return value !="libelle";
                                    });


               }



               if(article_prix==""){

                  $("#article_prix_message").text("ce champ est obligatoire").addClass("text-danger");
                  alert("le champ prix est obligatoire");
                  errors.push("prix");



               }else{

                $("#article_prix_message").text("").removeClass("text-danger");
                                 errors = errors.filter(function(value, index, arr)  { 
                                        return value !="prix";
                                    });


               }




               


               var article_images = $("#article_images");


               if(article_images[0].files.length ==0){


                $("#article_images_message").text("vous devez choisir au moins une image").addClass("text-danger");
                  alert("vous devez choisir au moins une image");
                  errors.push("images");
                          
               }else{


                  $("#article_images_message").text("").removeClass("text-danger");
                                 errors = errors.filter(function(value, index, arr)  { 
                                        return value !="images";
                                    });



               }


            //    console.log(article_images[0].files);
            //    console.log(article_images[0].files.length);

               if(errors.length==0){

                $("#article_images_message").text("").removeClass("text-danger");
                $("#article_prix_message").text("").removeClass("text-danger");
                $("#article_libelle_message").text("").removeClass("text-danger");
                $("#article_categorie_message").text("").removeClass("text-danger");



                if(valeur_option_radio=="taille_couleur_pointure"){




                    var formData = new FormData(this);

                    formData.append("type_option",valeur_option_radio);

                    $.ajax({


                                              url:"?p=add_article_run",
                                              method:"POST",
                                              dataType:"JSON",
                                              data:formData,
                                              contentType:false,
                                              processData:false,
                                              success:function(data){


                                                     console.log(data);
                                                     if(data.code==1){


                                                        // $("#famille_libelle").val("");
                                                        // $("#famille_description").val("");
                                                        // $("#famille_image").val("");

                                                        setInterval(function(){

                                                            
                                                          window.open("?p=liste_articles","_self");
                                                        }
                                                            
                                                            , 3000);


                                                        $.notify(data.message,{type:"success"});




                                                        }else{

                                                        $.notify(data.message, {type:"danger"});


                                                        }
                                              }


                            
                    });


                     
                          
                     


                }else if(valeur_option_radio=="option"){

                    


                    if(quantite_option_block=="" || quantite_option_block==0){

                        

                        $("#quantite_option_block_message").text("la quantite n'est pas valide").addClass("text-danger");
                        alert("la quantité n'est pas valide");


                    }else{

                        $("#quantite_option_block_message").text("").removeClass("text-danger");


                    


                    var formData = new FormData(this);

                    formData.append("type_option",valeur_option_radio);
                    // formData.append("description_article",article_description);


                    //  console.log(formData);


                     $.ajax({

                                             url:"?p=add_article_run",
                                              method:"POST",
                                              dataType:"JSON",
                                              data:formData,
                                              contentType:false,
                                              processData:false,
                                              success:function(data){

                                                  console.log(data);
                                                  if(data.code==1){


                                                        // $("#famille_libelle").val("");
                                                        // $("#famille_description").val("");
                                                        // $("#famille_image").val("");

                                                        setInterval(function(){

                                                            
                                                          window.open("?p=liste_articles","_self");
                                                        }
                                                            
                                                            , 3000);


                                                        $.notify(data.message,{type:"success"});

                                                        

                                                        
                                                     }else{

                                                        $.notify(data.message, {type:"danger"});

                                                        
                                                     }
                                              }

                               
                     });




                    }

                    


                }else{

                     var formData = new FormData(this);

                    formData.append("type_option",valeur_option_radio);

                    $.ajax({


                                              url:"?p=add_article_run",
                                              method:"POST",
                                              dataType:"JSON",
                                              data:formData,
                                              contentType:false,
                                              processData:false,
                                              success:function(data){


                                                     console.log(data);
                                                     if(data.code==1){


                                                        // $("#famille_libelle").val("");
                                                        // $("#famille_description").val("");
                                                        // $("#famille_image").val("");

                                                        setInterval(function(){

                                                            
                                                          window.open("?p=liste_articles","_self");
                                                        }
                                                            
                                                            , 3000);


                                                        $.notify(data.message,{type:"success"});




                                                        }else{

                                                        $.notify(data.message, {type:"danger"});


                                                        }
                                              }


                            
                    });
                }





               }






































});






         
</script>











































    </body>

</html>