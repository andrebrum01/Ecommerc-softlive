<div>
    <div class="Banner">
        <a
        class="BannerPromotion"
        >
        <div
        class="imgBanner"
        style="background-image: url('https://media.pichau.com.br/media/aw_rbslider/slides/16_a_30_Setembro_-_Quinzena_Cliente_-_1920x450-v2.jpg');"
        >
        </div>
    </a>
    </div>
    <section id="OfertasProdutos">
        <h1>
            <i class="bi bi-award"></i>
            Ofertas do dia
        </h1>
        <div class="grid-items">
            <?= $component("ItemProduct/product" , [
                "title"=>"Cadeira Mancer Cycles",
                "describle"=>"CADEIRA GAMER MANCER CYCLES, PRETO E AMARELO, MCR-CYS-YEL01",
                "img"=>"https://media.pichau.com.br/media/catalog/product/cache/2f958555330323e505eba7ce930bdf27/m/c/mcr-cys-yel016.jpg"
            ])?>
            <?= $component("ItemProduct/product")?>
            <?= $component("ItemProduct/product")?>
            <?= $component("ItemProduct/product")?>
            <?= $component("ItemProduct/product")?>
            <?= $component("ItemProduct/product")?>
            <?= $component("ItemProduct/product")?>
            <?= $component("ItemProduct/product")?>
        </div>


    </section>
    <section id="PrincipaisProdutos">
        <h1>
            <i class="bi bi-box2"></i>    
            Principais Produtos
        </h1>
        <div class="grid-items">
            <?= $component("ItemProduct/product" , [
                "title"=>"Cadeira Mancer Cycles",
                "describle"=>"CADEIRA GAMER MANCER CYCLES, PRETO E AMARELO, MCR-CYS-YEL01",
                "img"=>"https://media.pichau.com.br/media/catalog/product/cache/2f958555330323e505eba7ce930bdf27/m/c/mcr-cys-yel016.jpg"
            ])?>
            <?= $component("ItemProduct/product")?>
            <?= $component("ItemProduct/product")?>
            <?= $component("ItemProduct/product")?>
            <?= $component("ItemProduct/product")?>
            <?= $component("ItemProduct/product")?>
            <?= $component("ItemProduct/product")?>
            <?= $component("ItemProduct/product")?>
        </div>
    </section>
</div>
