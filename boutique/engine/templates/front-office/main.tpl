<main class="container-fluid">

{*$page|var_dump*}
        {if $page === ""}
    <h2 class="text-center">{$general[0]['title']}</h2>
    <section class="row">
     
        {for $indice=0 to 3} 


        <section class="col-6  ">



                <h2 class="text-center">{$titles[$indice]}</h2>
                <div class="row justify-content-center ">
                    {for $article=0 to 1} 

                        <article class="col-md-4 mx-2 h-75 mb-2 p-2">
                            
                            <h3 class="">{$produits[$indice][$article]['titre']}</h3>
                            
                            <p class="">{$produits[$indice][$article]['description']}</p>
                            <img class="img-fluid" src="./assets/img{$produits[$indice][$article]['image']}">
                            <a href="./?article={$produits[$indice][$article].id}" class="btn boutton rounded w-100 text-white font-weight-bold">Commander</a>
                            

                        </article>

                    {/for}
                 </div>
        </section>

        {/for}
    </section>
    {elseif $page|strstr:"article"}

       <article class="col-md-4 mx-2 h-75 mb-2 p-2">
                            
                            <h3 class="">{$produits[0]['titre']}</h3>
                            
                            <p>{$produits[0]['description']}</p>
                            <img class="img-fluid" src="./assets/img{$produits[0]['image']}">
                           <button id="btnPanier" value="{$produits[0]['id']}" class="btn boutton rounded w-100 text-white font-weight-bold">Commander</button>
                            
                            

                        </article>
      {elseif $page === "categories"}

                {foreach $categories as $categorie}
                
                <a href="./?categorie={$categorie.id}"><img class="w-25" src="./assets/img/categories/{$categorie['image_categorie']}"></a>
                
                {/foreach}

                 {foreach $marques as $marque}
                
                <a href="./?marque={$marque.id}"><img class="w-25" src="./assets/img/marques/{$marque['image_marque']}"></a>
                
                {/foreach}
            

    {elseif $page|strstr:"categorie" || $page|strstr:"marque"}



   
    {include file="produits.tpl"}

     


    <h2>test</h2>
      
    {elseif $page === "panier"}

    <div id="test99"></div>
    {/if}



</main>

