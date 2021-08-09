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
                <!-- <div class="panel-heading bootstrap-nav">
                                                <ul class="nav nav-tabs">
                                                    <li class="active"><a href="#tab1primary" data-toggle="tab">Primary 1</a></li>
                                                    <li><a href="#tab2primary" data-toggle="tab">Primary 2</a></li>
                                                    <li><a href="#tab3primary" data-toggle="tab">Primary 3</a></li>
                                                </ul>
                 </div> -->
                    <!-- Content Header (Page header) -->
                    <section class="content-header z-depth-1">
                        <div class="header-icon">
                            <i class="fa fa-table"></i>
                        </div>
                        
                        <div class="header-title">
                            <h1> Pointures Articles</h1>
                            <small> Ajouter,Editer et Supprimer.</small>
                            <ul class="link hidden-xs">
                                <li><a href="index.html"><i class="fa fa-home"></i>Acceuil</a></li>
                                <li><a href="?p=taille_articles">Pointures articles</a></li>
                            </ul>
                        </div>
                    </section>

                    
                    <!-- page section -->
                    <div class="container-fluid">
                        <div class="row">
                            <!-- Bootstrap table -->
                            
                            <!-- ./bootstrap table -->
                            <!-- bootstrap border table -->
                            
                            <!-- ./bootstrap table -->
                            <!-- bootstrap table -->
                            <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                     <div  class="card">
                                    <div  style="height:60px;" class="card-header">
                                        <!-- <i class="fa fa-table fa-lg"></i>
                                        <h2>Responsive table</h2> -->
                                          <div style="float:left;" id="left_side">

                                          
                                                <!-- <ul class="nav nav-tabs">
                                                    <li class="active"><a href="#taille_article_affichage" data-toggle="tab">Tailles Articles</a></li>
                                                    <li><a href="#pointure_article_affichage" data-toggle="tab">Pointures Articles</a></li>
                                                    
                                                </ul> -->

                                               
                                       
                                        
                                        </div>
                                          <div style="float:right;" id="right_side">

                                                 <button data-toggle="modal" data-target="#ajouter_famille" class="btn btn-sm ajouter_famille_button">Ajouter une pointure</button>
                                          </div>
                                    </div>
                    <div id="taille_article_affichage"   class="card-content tab-pane fade in active">
                                    <div style="margin-top:5px;margin-bottom:5px;" class="card-title">

                                    <!-- <button data-toggle="modal" data-target="#ajouter_famille" class="btn btn-sm ajouter_famille_button">Ajouter une taille</button> -->

                                    </div>

                                   

                                      <div>
                                    
                                        <div class="table-responsive">
                                            <table id="my_table" class="table  table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Selectionner</th>
                                                        <th>Libellé</th>
                                                        
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                  <?php 

                                                    foreach($query_result1 as $famille){

                                                        ?> 

                                                         <tr id="ligne<?=$famille->taille_pointure_id;?>">
                                                        <td>
                                                            <input type="checkbox" id="test<?=$famille->taille_pointure_id;?>" name="customer_id[]" class="many_deletes" value="<?=$famille->taille_pointure_id;?>" />
                                                            <!-- <label for="test<?=$famille->taille_pointure_id;?>"></label> -->
                                                        </td>
                                                        <td><?=$famille->taille_pointure_libelle;?></td>
                                                        
                                                        <td>

                                                        <!-- <button data-voir_id="<?=$famille->famille_id;?>" data-libelle="<?=$famille->famille_libelle;?>" data-description="<?=$famille->famille_description;?>" data-image="<?=$famille->famille_image;?>" data-toggle="modal" data-target="#voir_famille" class="btn btn-sm voir" data-toggle="tooltip" data-placement="left" title="Voir"><i class="fa fa-eye" aria-hidden="true"></i></button> -->


                                                            <button data-modifier_id="<?=$famille->taille_pointure_id;?>" data-libelle="<?=$famille->taille_pointure_libelle;?>"  data-toggle="modal" data-target="#modifier_famille" class="btn btn-sm modifier" data-toggle="tooltip" data-placement="left" title="Mettre à Jour"><i class="fa fa-pencil" aria-hidden="true"></i></button>


                                                            <button data-supprimer_id="<?=$famille->taille_pointure_id;?>" class="btn btn-danger btn-sm supprimer" data-toggle="tooltip" data-placement="right" title="Supprimer "><i class="fa fa-trash-o" ></i></button>
                                                        </td>
                                                    </tr>



                                                        <?php 



                                                    }


                                                    ?>



                                                   
                                                    
                                                    
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div style="height:60px;" class="card-header">

                                          <div style="float:left;" id="left_side">


                                          <button class="btn btn-sm btn-danger delete_all">Supprimer</button>
                                        
                                        </div>
                                          <div style="float:right;" id="right_side">

                                                  <!-- <p>Pagination</p> -->
                                          </div>
                                    </div>
                                
                            </div> 

                            </div>
                             <!-- first -->

                            


                             

                              <!-- second -->



                          


                           
                            



                            


                             </div>
                            <!-- ./bootstrap table -->
                            <!-- bootstrap table -->
                            
                            <!-- ./bootstrap table -->
                            <!-- data table -->
                            
                            <!-- ./data table -->


                            
                            




                        </div>
                        <!-- ./row -->
                    </div>

                   
                    <!-- ./cotainer -->



                    <!--- my modals  -->






                    <!-- for adding a familly--->
                    <div style="width:100%;" class="modal animated fadeIn" id="ajouter_famille" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Ajouter une Pointure</h4>
                                        </div>
                                        <div class="modal-body">


                                        <form  id="ajouter_famille_form">
                                                <div class="form-group">
                                                    <label style="color:black;font-size:15px;" for="famille_libelle">Pointure libelle <strong>*</strong></label>
                                                    <input style="background:white;border:none;" name="famille_libelle" type="text" class="form-control" id="famille_libelle" aria-describedby="Libelle famille">
                                                    <small id="famille_libelle_message"></small>
                                                   
                                                </div>
                                                <!-- <div class="form-group">
                                                    <label style="color:black;font-size:15px;" for="famille_description">Famille Description</label>
                                                    <textarea name="famille_description" id="famille_description" class="form-control" cols="15" rows="5"></textarea>
                                                    <small id="famille_description_message"></small>
                                                </div>
                                                <div style="margin-bottom:20px;" class="form-group">
                                                    <label style="color:black;font-size:15px;" for="famille_image">Famille Image</label>
                                                    <input type="file" name="famille_image" class="form-control" id="famille_image" aria-describedby="Libelle Image">
                                                    <small id="famille_image_message"></small>
                                                   
                                                </div>

                                                <div id="div_preview_before_uploading" style="margin-bottom:5px;display:none;">

                                                      <img id="preview_before_uploading" src="" style="width:80%" height="150px;" alt="">
                                                </div> -->
                                               
                                                <button type="submit" class="btn btn-sm">Ajouter</button>
                                                <button type="button" class="waves-effect waves-light btn btn-sm btn-danger" data-dismiss="modal">Annuler</button>
                                        </form>





                                            
                                        </div>
                                        <!-- <div class="modal-footer">
                                            <button type="button" class="waves-effect waves-light btn" data-dismiss="modal">Close</button>
                                        </div> -->
                                    </div>

                                </div>
                            </div>
                    <!-- for adding a familly--->






                    <!-- for viewing a family-->

                    <div style="width:100%;" class="modal animated fadeIn" id="voir_famille" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Aprçu Famille</h4>
                                        </div>
                                        <div class="modal-body">
                                            <h2 class="voir_modal_famille_libelle"></h2>
                                            <p class="voir_modal_famille_description"></p>
                                            <img class="voir_modal_famille_image" style="width:100%;height:auto;" src="" alt="">

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="waves-effect waves-light btn" data-dismiss="modal">Fermer</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                    <!-- for viewing a family-->






                    <!--- for editing a family-->


                    <div style="width:100%;" class="modal animated fadeIn" id="modifier_famille" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modifier une Pointure</h4>
                                        </div>
                                        <div class="modal-body">


                                        <form  id="update_famille_form">
                                                <div class="form-group">
                                                    <label style="color:black;font-size:15px;" for="famille_libelle_modifier">Pointure libelle <strong>*</strong></label>
                                                    <input style="background:white;border:none;" name="famille_libelle_modifier" type="text" class="form-control" id="famille_libelle_modifier" aria-describedby="Libelle famille">
                                                    <small id="famille_libelle_message_modifier"></small>
                                                   
                                                </div>
                                                <!-- <div class="form-group">
                                                    <label style="color:black;font-size:15px;" for="famille_description_modifier">Famille Description</label>
                                                    <textarea name="famille_description_modifier" id="famille_description_modifier" class="form-control" cols="15" rows="5"></textarea>
                                                    <small id="famille_description_message_modifier"></small>
                                                </div>
                                                <div style="margin-bottom:20px;" class="form-group">
                                                    <label style="color:black;font-size:15px;" for="famille_image_modifier">Famille Image</label>
                                                    <input type="file" name="famille_image_modifier" class="form-control" id="famille_image_modifier" aria-describedby="Libelle Image">
                                                    <small id="famille_image_message_modifier"></small>
                                                   
                                                </div> -->
                                               
                                                <button type="submit" class="btn btn-sm">Mettre à Jour</button>
                                                <button type="button" class="waves-effect waves-light btn btn-sm btn-danger" data-dismiss="modal">Annuler</button>
                                        </form>





                                            
                                        </div>
                                        <!-- <div class="modal-footer">
                                            <button type="button" class="waves-effect waves-light btn" data-dismiss="modal">Close</button>
                                        </div> -->
                                    </div>

                                </div>
                            </div>


                    <!--- for editing a family-->

















                    <!--- my modals  -->

                </div>
                <!-- ./page-content -->
            </div>
            <!-- ./page-content-wrapper -->
        </div>
        <!-- ./page-wrapper -->
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
        <!-- Start Core Plugins
             =====================================================================-->
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
        <!-- dataTables js -->
        <script src="assets/assets2/plugins/datatables/dataTables.min.js" type="text/javascript"></script>
        <!-- Notify -->
        <!-- sweet alert2 -->
        <script src="assets/assets2/plugins/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
        <script src="assets/assets2/plugins/notify/js/notify.js" type="text/javascript"></script>
        <script src="assets/assets2/plugins/notify/js/prettify.js" type="text/javascript"></script>
        <!-- custom js -->
        <script src="assets/assets2/dist/js/custom.js" type="text/javascript"></script>
        <!-- End Core Plugins-->
        <!-- Start Theme label Script
             =====================================================================-->
        <!-- main js -->
        <script src="assets/assets2/dist/js/main.js" type="text/javascript"></script>
        <!-- End Theme label Script
             =====================================================================-->
        <script>
             "use strict";
            $(document).ready(function () {


                $('#my_table').DataTable({


                    "language": {
                                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
                            }
                });

                // var _URL = window.URL || window.webkitURL;
                // function dtable() {
                //     $('#dataTableExample1').DataTable({
                //         "dom": "<'row'<'col-sm-6'l><'col-sm-6'f>>t<'row'<'col-sm-6'i><'col-sm-6'p>>",
                //         "lengthMenu": [
                //             [6, 25, 50, -1],
                //             [6, 25, 50, "All"]
                //         ],
                //         "iDisplayLength": 6
                //     });
                // }
                // return (dtable());


               





                $(".ajouter_famille_button").click(function(){


                    $("#famille_libelle").focus(function(){

                        $("#famille_libelle_message").text("").removeClass("text-danger");
                       
                    });

                    // $("#div_preview_before_uploading").css("display","none");




                       var errors =[];
                    //    var famille_image;

                       $("#famille_libelle").val("");
                    //    $("#famille_description").val("");
                    //    $("#famille_image").val("");

                    //    $("#famille_image").change(function(e){

                    //     errors =[];

                        

                    //      famille_image = e.target.files[0];

                        


                    //              if(e.target.files[0]){

                    //                 $("#famille_image_message").text("").removeClass("text-danger");

                    //                 var fileExtension = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif', 'image/bmp'];
                    //                 if ($.inArray(famille_image.type.toLowerCase(), fileExtension) != -1) {


                    //                  var img = new Image();

                    //                  var imgwidth =0;
                    //                  var imgheight =0;

                    //                 //  var maxwidth=800;
                    //                 //  var maxheight=600;

                    //                  img.src = _URL.createObjectURL(famille_image);

                    //                  img.onload = function(){


                    //                           if(this.width >=600 && this.height >=200){

                    //                             // errors =[];

                    //                             // console.log(famille_image);


                    //                             $("#div_preview_before_uploading").css("display","block");

                    //                             var reader = new FileReader();
 
                    //                             reader.onload = function(){
                    //                                 $("#preview_before_uploading").attr("src", reader.result);
                    //                             }
                                    
                    //                             reader.readAsDataURL(famille_image);



                                                  

                    //                           }else{

                    //                             $("#famille_image_message").text("la taille de l'image doit être superieure ou egale à 600 x 200 ").addClass("text-danger");
                    //                             errors.push("la taille de l'image doit être superieure ou egale à 800 x 400 ");
                    //                           }
                    //                  }

                                        
                                           


                                       
                    //                 }else{


                    //                     $("#famille_image_message").text("ce format n'est pas supporté").addClass("text-danger");
                    //                     errors.push("ce format n'est pas supporté");
                    //                 }


                    //              }else{


                    //                 $("#famille_image_message").text("vous n'avez choisi aucun fichier").addClass("text-danger");
                    //                 errors.push("vous n'avez choisi aucun fichier");
                    //              }
                    //    });







                    $("#ajouter_famille_form").submit(function(e){


                           e.preventDefault();


                             // retrieving data from form


                                var famille_libelle = $("#famille_libelle").val();
                                // var famille_description = $("#famille_description").val();
                                // var famille_image = $("#famille_image")[0].files[0];


                                // console.log(famille_libelle);
                                // console.log(famille_description);
                                // console.log(famille_image);


                             // controls  on data 

                             if(famille_libelle==""){

                                errors.push("ce champ est obligatoire");

                                  $("#famille_libelle_message").text("le libelle de la pointure est obligatoire").addClass("text-danger");
                             }else{

                                $("#famille_libelle_message").text("").removeClass("text-danger");
                                 errors = errors.filter(function(value, index, arr)  { 
                                        return value !="ce champ est obligatoire";
                                    });
                             }


                             console.log(errors);
                             console.log(famille_libelle);


                             if(errors.length==0){


                                    // if(!famille_image){

                                    //      famille_image="";
                                    // }


                                      var formData = new FormData();

                                      formData.append('pointure_taille_libelle',famille_libelle);
                                    //   formData.append('famille_description',famille_description);
                                    //   formData.append('famille_image',famille_image);

                                    
                                        // my ajax request here


                                        $.ajax({

                                              url:"?p=add_pointure_pointure_run",
                                              method:"POST",
                                              dataType:"JSON",
                                              data:{pointure_taille_libelle:famille_libelle},
                                              success:function(data){

                                                     if(data.code==1){


                                                        $("#famille_libelle").val("");
                                                       

                                                        setInterval(function(){

                                                            
                                                          window.open("?p=pointure_articles","_self");
                                                        }
                                                            
                                                            , 3000);


                                                        $.notify(data.message,{type:"success"});

                                                        
                                                     }else{

                                                        $.notify(data.message, {type:"danger"});
                                                     }
                                              }
                                        });




                             }

                             



                    });





                            
                });



                    



    //   this part is designed to delete a single family of  a product





                $(".supprimer").click(function(){


                        
                        var id = $(this).attr("data-supprimer_id");



                                         
                                    

                                                        swal({
                                                            title: 'voulez vous vraiment supprimer cette pointure ?',
                                                            text: 'cette operation est irreversible!',
                                                            type: 'warning',
                                                            showCancelButton: true,
                                                            confirmButtonColor: '#3085d6',
                                                            cancelButtonColor: '#d33',
                                                            confirmButtonText: 'Oui, je veux!',
                                                            cancelButtonText: 'Annuler !',
                                                        }).then(function () {


                                                            

                                                             $.ajax({

                                                                url:"?p=delete_pointure_run",
                                                                method:"POST",
                                                                dataType:"JSON",
                                                                data:{id:id},
                                                                success:function(data){

                                                                      var ligne = $("#ligne"+id);

                                                                      ligne.remove();


                                                                }

                                                                  
                                                             });
                                                           
                                                        }).catch(swal.noop)
                                            
                                                
                    });




        
     // for this part , I will make the view



 $(".voir").click(function(){


          var id = $(this).attr("data-voir_id");


          var famille_libelle = $(this).attr("data-libelle");
          var famille_description = $(this).attr("data-description");
          var famille_image = $(this).attr("data-image");


          $(".voir_modal_famille_libelle").text(famille_libelle);
          $(".voir_modal_famille_description").text(famille_description);

          var src_value = "assets/images/familles/"+famille_image;

          $(".voir_modal_famille_image").attr("src",src_value);



          
            
 });




 // for this part , I will make the editing


    $(".modifier").click(function(){


        var id = $(this).attr("data-modifier_id");

        var famille_libelle = $(this).attr("data-libelle");
        // var famille_description = $(this).attr("data-description");
        // var famille_image = $(this).attr("data-image");


        $("#famille_libelle_modifier").val(famille_libelle);
        // $("#famille_description_modifier").val(famille_description);
        // $("#famille_image_modifier").val(famille_image);
        // $("#famille_image_message_modifier").text("").removeClass("text-danger");
        $("#famille_libelle_message_modifier").text("").removeClass("text-danger");









        var _URL = window.URL || window.webkitURL;
                // function dtable() {
                //     $('#dataTableExample1').DataTable({
                //         "dom": "<'row'<'col-sm-6'l><'col-sm-6'f>>t<'row'<'col-sm-6'i><'col-sm-6'p>>",
                //         "lengthMenu": [
                //             [6, 25, 50, -1],
                //             [6, 25, 50, "All"]
                //         ],
                //         "iDisplayLength": 6
                //     });
                // }
                // return (dtable());


               





                


                    $("#famille_libelle_modifier").focus(function(){

                        $("#famille_libelle_message_modifier").text("").removeClass("text-danger");
                       
                    });




                       var errors =[];
                    //    var famille_image;

                    //    $("#famille_libelle").val("");
                    //    $("#famille_description").val("");
                    //    $("#famille_image").val("");

                    //    $("#famille_image_modifier").change(function(e){

                    //     errors =[];

                        

                    //      famille_image = e.target.files[0];

                        


                    //              if(e.target.files[0]){

                    //                 $("#famille_image_message_modifier").text("").removeClass("text-danger");

                    //                 var fileExtension = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif', 'image/bmp'];
                    //                 if ($.inArray(famille_image.type.toLowerCase(), fileExtension) != -1) {


                    //                  var img = new Image();

                    //                  var imgwidth =0;
                    //                  var imgheight =0;

                    //                 //  var maxwidth=800;
                    //                 //  var maxheight=600;

                    //                  img.src = _URL.createObjectURL(famille_image);

                    //                  img.onload = function(){


                    //                           if(this.width >=600 && this.height >=200){

                    //                             // errors =[];

                    //                             // console.log(famille_image);

                                                  

                    //                           }else{

                    //                             $("#famille_image_message_modifier").text("la taille de l'image doit être superieure ou egale à 600 x 200 ").addClass("text-danger");
                    //                             errors.push("la taille de l'image doit être superieure ou egale à 800 x 400 ");
                    //                           }
                    //                  }

                                        
                                           


                                       
                    //                 }else{


                    //                     $("#famille_image_message_modifier").text("ce format n'est pas supporté").addClass("text-danger");
                    //                     errors.push("ce format n'est pas supporté");
                    //                 }


                    //              }else{


                    //                 $("#famille_image_message_modifier").text("vous n'avez choisi aucun fichier").addClass("text-danger");
                    //                 errors.push("vous n'avez choisi aucun fichier");
                    //              }
                    //    });







                    $("#update_famille_form").submit(function(e){


                           e.preventDefault();


                             // retrieving data from form


                                var famille_libelle = $("#famille_libelle_modifier").val();
                                // var famille_description = $("#famille_description_modifier").val();
                                // var famille_image = $("#famille_image")[0].files[0];


                                // console.log(famille_libelle);
                                // console.log(famille_description);
                                // console.log(famille_image);


                             // controls  on data 

                             if(famille_libelle==""){

                                errors.push("ce champ est obligatoire");

                                  $("#famille_libelle_message_modifier").text("le libelle de la pointure est obligatoire").addClass("text-danger");
                             }else{

                                $("#famille_libelle_message_modifier").text("").removeClass("text-danger");
                                 errors = errors.filter(function(value, index, arr)  { 
                                        return value !="ce champ est obligatoire";
                                    });
                             }


                             if(errors.length==0){


                                    // if(!famille_image){

                                    //      famille_image="";
                                    // }


                                      var formData = new FormData();

                                      formData.append('famille_libelle',famille_libelle);
                                    //   formData.append('famille_description',famille_description);
                                    //   formData.append('famille_image',famille_image);
                                    //   formData.append('id',id);

                                    
                                        // my ajax request here


                                        $.ajax({

                                              url:"?p=update_pointure_pointure_run",
                                              method:"POST",
                                              dataType:"JSON",
                                              data:{pointure_taille_libelle:famille_libelle,id:id},
                                              success:function(data){

                                                     if(data.code==1){


                                                        // $("#famille_libelle").val("");
                                                        // $("#famille_description").val("");
                                                        // $("#famille_image").val("");

                                                        setInterval(function(){

                                                            
                                                          window.open("?p=pointure_articles","_self");
                                                        }
                                                            
                                                            , 3000);


                                                        $.notify(data.message,{type:"success"});

                                                        

                                                        
                                                     }else{

                                                        $.notify(data.message, {type:"danger"});

                                                        
                                                     }
                                              }
                                        });




                             }

                             



                    });





                            
                



























        
             
    });
    


    // in this part , I'm going to delete several checkboxes





      $(".delete_all").click(function(){





            var id =[];

            $(':checkbox:checked').each(function(i){


                    id[i] = $(this).val();
            });

            if(id.length==0){

                swal('Désolé', ' Vous devez cocher au moins une case', 'error')

            }else{




                    

                swal({
                                                            title: 'voulez vous vraiment les supprimer ?',
                                                            text: 'cette operation est irreversible!',
                                                            type: 'warning',
                                                            showCancelButton: true,
                                                            confirmButtonColor: '#3085d6',
                                                            cancelButtonColor: '#d33',
                                                            confirmButtonText: 'Oui, je veux!',
                                                            cancelButtonText: 'Annuler!',
                                                        }).then(function () {


                                                            

                                                             $.ajax({

                                                                url:"?p=many_deletes_pointure_pointure",
                                                                method:"POST",
                                                                dataType:"JSON",
                                                                data:{id:id},
                                                                success:function(data){

                                                                      
                                                                    id.forEach(function(i){

                                                                         var ligne = $("#ligne"+i);
                                                                         
                                                                         ligne.remove();
                                                                    });


                                                                    swal('Supprimé !', 'Elle(s) ont été suprimées avec succès', 'success')


                                                                }

                                                                  
                                                             });
                                                           
                                                        }).catch(swal.noop)





                 
            }
      });



































            });
        </script>
    </body>

</html>