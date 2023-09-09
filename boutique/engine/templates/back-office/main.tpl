 
 
 
 
 
    <section class="container-fluid">
        <div class="row">
            <h1 class="col-4 offset-4 text-center text-primary my-5 textadm">Espace Administrateur</h1>
        </div>
    </section>

    <section class="container-fluid">
        <div id="erreurs" class="col-2 offset-5 my-2 text-danger text-center bg bg-dark h4"></div>




        {if $logged}


        <section class="container-fluid mt-3 mb-3">
            <article class="row text-center">

                <div class="col-12 col-sm-12 col-md-4 offset-md-4">

                 <form method="POST" action="./modifGeneral.php?modify=title">
                     <div class="form-group">
                        <input class="form-control" id="modifTitre" type="text" name="modifTitre" minlength="3" maxlength="75" placeholder="Super Pop" required />
                        <input type="hidden" value="{$csrf}" name="token_csrf"/>
                        <button class="btn btn-primary d-block w-50 mt-3" type="submit">Modifier le titre</button>
                    </div>
                </form>

                <form method="POST" action="./modifGeneral.php?modify=footer">
                     <div class="form-group">
                        <input class="form-control" id="modifFooterTitle" type="text" name="modifFooterTitle" minlength="3" maxlength="75" placeholder="Copyright Les 3 Bosses - Super Pop" required />
                        <button class="btn btn-primary d-block w-50 mt-3" type="submit">Modifier le footer</button>
                     </div>    
                </form>


                    <form method="POST" id="changer" enctype="multipart/form-data" action="./newArticle.php">
                
                        <div class="form-group">
                            <label for="titre">Nouveau produit</label>
                            <input class="form-control" id="titre" type="text" name="titre" minlength="3" maxlength="75" placeholder="Titre du produit" required />
                        </div>

                        <div class="form-group">
                            <label for="description"></label>
                            <textarea class="form-control" rows="5" id="description" type="text" name="description" minlength="3" maxlength="65535" placeholder="Description du produit" required ></textarea>
                        </div>

                        <div id="hiddDiv" class="d-none">
                        <img id="addImg">
                        <a href="#" class="btn btn-danger rounded-pill" id="launchDelete">Supprimer</a>
                        </div>

                        <div id="imgAsupprimer" class="form-group">
                            <label id="hidLabel" for="imageProduit">Image du produit</label>
                            <input class="form-control" type="file" id="imageProduit" name="imageProduit" accept=".jpg, .jpeg, .gif, .png, .bmp" />
                        </div>

                        <div class="form-group">
                            <label for="select">Categorie du produit</label>  
                            <select class="form-control" name="categorie" id="selectCategorie">
                                <option>--Please choose an categorie--</option>
                                {foreach $categories as $categorie}
                                    <option value="{$categorie['id']}">{$categorie['categorie']}</option>
                                {/foreach}
                            </select>
                        </div>

                         <div class="form-group">
                            <label for="select">Marque du produit:</label>  
                            <select class="form-control" name="marque" id="selectMarque">
                                <option>--Please choose an brand--</option>
                                {foreach $marques as $marque}
                                    <option value="{$marque['id']}">{$marque['marque']}</option>
                                {/foreach}
                            </select>
                        </div>

                        <div>
                            <label for="prix">Prix</label>
                            <input class="form-control mt-3" type="number" id="prix" name="prix" step="0.01" min="10" max="100">
                        </div>

                        <div>
                            <label for="quantite">Quantité:</label>
                            <input class="form-control mt-3" type="number" id="quantite" name="quantite" min="10" max="100">
                        </div>
                       
                        <button class="btn btn-primary d-block w-50 mt-3" type="submit">Envoyer</button>

                    </form>
                </div>

            </article>
        </section>

        <section class="container-fluid my-1">
            <article class="row">
                <div class="col-12 col-sm-12 col-md-4 offset-md-4">
                        <form method="POST" action="./newCategorie.php" enctype="multipart/form-data"> 
                        <div class="form-group">
                            <label for="creatCategorie"><h3 class=""><b>Categories :</b></h3></label>
                        </div>

                        <div class="form-group">
                            <input class="form-control" id="creatCategorie" type="text" name="creatCategorie" minlength="3" maxlength="75" placeholder="Nom categorie" required />
                        </div>

                        <div class="form-group">
                            <label for="imageCategorie">Image de la categorie</label>
                            <input class="form-control mt-3" type="file" id="imageCategorie" name="imageCategorie" accept=".jpg, .jpeg, .gif, .png, .bmp" />
                        </div>
                        <button class="mt-3 btn btn-success w-50" type="submit">Creer Categorie</button>
                         </form>
                </div>

               


    <section class="container-fluid">
        <article class="row">
            <div class="col-12 col-sm-12 col-md-4 offset-md-4">
                <div class="form-group">
                    <form method="POST"  action="./deleteArticle.php">
                    <label for="deleteArticle"><h3 class=""><b>Supprimer l'article</b></h3></label>
                </div>

                <div class="form-group">
                    <select class="form-control" name="deleteArticle" id="deleteArticle">
                        <option>--Please choose an article--</option>
                        {foreach $deleteArticles as $deleteArticle}
                        <option value="{$deleteArticle['id']}">{$deleteArticle['titre']}</option>
                        {/foreach}
                    </select>
                    <div class="col-12">
                    <button class="btn btn-danger boutonhover mt-3" id="delete" type="submit">Supprimer  l'article</button>
                     
                    </div>
                    </form>
                    <button class="btn btn-warning boutonhover mt-3" id="modifArticle">Modifier l'article</button>
                </div>  

                 <a class="btn btn-danger w-50" href="./logout.php">Déconnexion</a>                      
        </article>

       
    </section>

            {else}

            

         <form method="POST" action="./login.php">
            <div class="row">
                <input class="col-2 offset-5 my-3" type="text" name="username" maxlength="25" placeholder="admin" required />

                <input class="col-2 offset-5 my-3" type="password" name="password" autocomplete="off" minlength="8" placeholder="*************" required />

                <button class="col-2 offset-5 my-3" type="submit">Connexion</button>

            </div>
        </form>


        {/if}

    </section>