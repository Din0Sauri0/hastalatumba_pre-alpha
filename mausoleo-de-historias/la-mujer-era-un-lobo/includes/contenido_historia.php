<?php
    require_once("../../controller/confecionController.php");
    $controller = new confecionController();
    $res = $controller->getConfecionById($_GET['id']);

?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="cs-post cs-style2">

                    <div class="cs-post_info">
                        <div class="cs-post_meta cs-style1 cs-ternary_color cs-semi_bold cs-primary_font">
                            <span class="cs-posted_by">07 Mar 2023</span>
                            <a href="#" class="cs-post_avatar">Lujuria</a>
                        </div>
                        <h2 class="cs-post_title"><?php echo $res->titulo ?></h2>
                        
                        <p><?php echo $res->confecion ?></p>


                        
                    </div>
                </div>
                <?php include('../../includes_index/comentarios.php') ?>


            </div>
            <div class="col-xl-3 col-lg-4 offset-xl-1">
                <div class="cs-height_0 cs-height_lg_80"></div>
                <div class="cs-sidebar cs-right_sidebar cs-accent_5_bg_2">
                    <div class="cs-sidebar_item author_search text-center">
                        <div class="cs-author_card">
                            <img src="<?php echo $url_index ?><?php echo $url_mausoleo ?><?php echo $friendly_url_historia ?><?php echo $imagenes_historia ?>autor.webp"
                                alt="Aauthor">
                            <h3></h3>
                            <p>El cachero de las pampas</p>
                        </div>
                    </div>
                    <?php include('../../includes_index/buscador_historias.php') ?>
                </div>
            </div>
        </div>
    </div>
</section>