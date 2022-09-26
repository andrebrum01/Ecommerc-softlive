<div class="sidebar hidden" onclick="hiddenSideBar(this,event)">
    <a href="<?= $route("dashBoardPage")?>">
        <div><i class="bi bi-bar-chart"></i></div>
        <span>DashBoard</span>
    </a>
    <a href="<?= $route("productPage")?>">
        <div><i class="bi bi-box"></i></div>
        <span>Produtos</span>
        
    </a>
    <a href="<?= $route("estoquePage")?>">
        <div><i class="bi bi-boxes"></i></div>
        <span>Estoque</span>
        
    </a>
    <a href="<?= $route("comprasPage")?>">
        <div><i class="bi bi-cash"></i></div>
        <span>Compras</span>
        
    </a>
    <a href="<?= $route("pedidosPage")?>">
        <div><i class="bi bi-bookmark"></i></div>
        <span>Pedidos</span>
        
    </a>
    <a href="<?= $route("designPage")?>">
        <div><i class="bi bi-brush"></i></div>
        <span>Design</span>
        
    </a>
</div>

<script>
    const elem = document.querySelector(".sidebar");
    elem.classList = sessionStorage.getItem("classSidebar") ?? "sidebar";
    
    function hiddenSideBar(element,event){
        // event.preventDefault();
        if(event.target == element) element.classList.toggle("hidden");
        sessionStorage.setItem("classSidebar",element.classList);
    }
    const app = routes.app;
    const allLink = document.querySelectorAll("a");
   
    for (var item of allLink) {
        if(item.href == window.location.href)
            item.classList.add("active");
    }
    console.log(allLink);
</script>