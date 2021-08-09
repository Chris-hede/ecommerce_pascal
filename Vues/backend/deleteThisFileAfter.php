<div id="taille_article_affichage" style="display:none;" class="card-content tab-pane fade in active">
                                    <div style="margin-top:5px;margin-bottom:5px;" class="card-title"></div>

                                    <button data-toggle="modal" data-target="#ajouter_famille" class="btn btn-sm ajouter_famille_button">Ajouter une taille</button>

                                    </div>
                                    
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