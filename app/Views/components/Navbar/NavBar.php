<div class="navbar">
    <!-- Image Logo -->
    <a href="<?=$route('homePage')?>">
        <img 
            class="imgLogo"
            alt="Logo do Site"
            src="https://static.pichau.com.br/logo-pichau-2021-dark.png"
        />
    </a>
    <!-- Content NavBar -->
    <div class="containerNavbar">
        <a href="#<?= $ids[0]?>">Ofertas do Dia</a>
        <a href="#<?= $ids[1]?>">Principais Produtos</a>
        <div class="containetInput">
            <input
            type="text"
            id="filterInput"
            placeholder="O que você está procurando?"
            />
            <label for="filterInput">
                <i class="bi bi-search"></i>
            </label>
        </div>
        <div class="name">
            <i class="bi bi-person"></i>
            <?php
                $name = explode(" ",$user["name"])[0];
                $welcome = "Olá, ";
                $welcome.= $name ??"cliente";
                $welcome.=".<br/> Seja Bem vindo!";
                echo $welcome;
            ?>
        </div>
        <span
        class="carrinho"
        quant-shop="0"
        ><i class="bi bi-bag"></i></span>
        <a></a>
    </div>

</div>