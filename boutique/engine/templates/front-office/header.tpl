<header class="container-fluid mb-5">

<section class="row align-items-center">
    <img class="img-fluid col-1" src="{$liens.icon}">

    <div class="col-4 offset-1 justify-content-center h-25">
    <input class="barreRecherche"  type="text" placeholder="Rechercher" id="recherche">
    <i class="fa fa-search"></i>
    </div>
    

    <nav class="nav col-5 justify-content-center align-items-center  ">
        {foreach $liens.links as $link}
            <a class="nav-item nav-link ml-5" href="{$link.href}" title="{$link.title}">{$link.text}</a>
         
        {/foreach}
        <a href="./?panier"><i class="test nav-item nav-link fa fa-shopping-cart ml-5"></i></a>
       <a href="./administration"><i class=" test nav-item nav-link fa fa-user-circle ml-5"></i></a>
        
    </nav>
</section>
    
</header>