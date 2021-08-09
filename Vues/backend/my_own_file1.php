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



                                        <form class="col s12 mt-20" enctype="multipart/form-data">

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
                                            <input style="border:2px solid #E8E5B0;" type="text" class="form-control" id="article_libelle" aria-describedby="article libelle">
                                            <small id="article_libelle_message"></small>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label  style="font-size:16px;" for="article_prix">Prix (obligatoire)</label>
                                            <input style="border:2px solid #E8E5B0;" min="0" type="number" class="form-control" id="article_prix">
                                            <small id="article_prix_message"></small>
                                        </div>

                                        <div class="form-group">
                                            <label  style="font-size:16px;" for="article_description">Description (optionel)</label>
                                            <textarea name="article_description" style="border:2px solid #E8E5B0;"  class="form-control" id="article_description"></textarea>
                                            <small id="article_description_message"></small>
                                        </div>

                                        <div class="form-group my-5">
                                            <label  style="font-size:16px;" for="article_prix">Photos (obligatoire)</label>
                                            <!-- <input style="border:2px solid #E8E5B0;margin-top:5px;"  type="file" class="form-control" id="article_images">

                                            <button id="article_images_button" class="btn">Importer les Images <i class="fa fa-upload"></i></button> -->

                                            <div class="input-images"></div>
                                            
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
                                                    <span for="taille_couleur_pointure">Taille , Couleur et Pointure</span>
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
                                              <button id="ajouter_option" style="margin-bottom:5px;" class="btn">Ajouter Option</button>

                                              <br>
                                              <div class="form-group">

                                                    <label style="font-size:16px;" for="quantite">Quantité</label>
                                                    <input style="border:2px solid #E8E5B0;" type="number" class="form-control" min="0">
                                              </div>
                                             

                                                 
                                             




                                        </div>

                                        <div id="no_option_block" class="form-group">

                                        

                                         <table class="table taille_couleur" style="width:100%;">

                                                <tbody>

                                                 <!-- <tr style="border:1px solid #E8D796;"> -->

                                                 <?php 


                                                foreach($taille_pointure_data as $taille_pointure){ 

                                                 ?>
                                                 <tr>
                                                 <td style="width: 15%;">
                                                            <div class="checkbox">
                                                                <label style="font-size:16px;">
                                                                <div class="checkator_holder checkbox" style="width: 13px; height: 13px; margin: 0px 5px 0px -20px; float: none; display: inline-block;"><input type="checkbox" value="2XS" name="taille_id[]" class="checkator_source" style="opacity: 0; margin: 0px;"><div id="checkator_" class="checkator_element checkbox"></div></div>
                                                                <?=$taille_pointure->taille_pointure_libelle;?>                                                                </label>
                                                                <input class="nombre_taille" style="width: 60px;" type="number" name="2XS">
                                                            </div>
                                                 </td>

                                                        <td style="width: 85%;">

                                                        <?php 

                                                        foreach($article_couleur_data as $article_couleur){ 

                                                        ?>



                                                            <div class="checkbox affiche_couleur" style="">
                                                                <label style="font-size:16px;">
                                                                <div class="checkator_holder checkbox" style="width: 13px; height: 13px; margin: 0px 5px 0px -20px; float: none; display: inline-block;"><input class="input_couleur checkator_source" type="checkbox" value="2XS|CHAIR" name="couleur_id[]" style="opacity: 0; margin: 0px;"><div id="checkator_" class="checkator_element checkbox"></div></div>
                                                                <?=$article_couleur->article_couleur_libelle;?>                                                                </label> 
                                                                <input class="nombre_couleur" style="width: 60px;" type="number" name="2XS|CHAIR" readonly="readonly">
                                                            </div>


                                                                                                                                                                                                                

                                                         <?php 

                                                            }


                                                          ?>
                                                                                                                        <!-- <div class="checkbox affiche_couleur" style="display:block;">
                                                                <label>
                                                                <div class="checkator_holder checkbox" style="width: 13px; height: 13px; margin: 0px 5px 0px -20px; float: none; display: inline-block;"><input class="input_couleur checkator_source" type="checkbox" value="2XS|NOIR" name="couleur_id[]" style="opacity: 0; margin: 0px;"><div id="checkator_" class="checkator_element checkbox"></div></div>
                                                                NOIR                                                                </label> 
                                                                <input class="nombre_couleur" style="width: 60px;" type="number" name="2XS|NOIR" min="0">
                                                            </div> -->
                                                                                                                                                                                </td>

                                                   

                                                    </tr>


                                                    <?php 

                                                     }

                                                    ?>


                                                </tbody>
                                         </table>


                                         <!-- <input style="background:red;margin:10px;" type="radio" name="" id=""> -->





                                        </div>


                                        <hr style="margin-bottom:5px;">


                                        <div class="text-center  my-2">
                                             <button id="sauvegarder_button"  type="submit" class="btn">Sauvegarder</button>
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



                // $("#article_images_button").click(function(){


                //         $("#article_images").click();
                // });



                $('.input-images').imageUploader({


                        label:"uploader vos photos ici"
                });





                CKEDITOR.replace('article_description');


                $("#no_option_block").hide();
                $("#option_block").show();




                var valeur = $(".radio_test").val();

                $(".radio_test").change(function(){


                        valeur = $(this).val();


                         if(valeur=="option"){

                              $("#no_option_block").hide();
                              $("#option_block").show();
                         }else{

                              $("#option_block").hide();
                              $("#no_option_block").show();

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

















                    
                    
                    }


                });



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

    </body>

</html>