<section>
    <div class="containerHeader">
        <h1>Produtos</h1>
        <label class="btnModal" for="modal-1">Adicionar Produto</label>
    </div>

    <table class="tableContainer">
        <thead>  
            <tr>  
                <th 
                title="id"
                onclick="orderBy('id')"
                >
                    id
                </th>  
                <th 
                title="thumbnail"
                onclick="orderBy('thumbnail')"
                >
                    thumbnail
                </th>  
                <th 
                title="title"
                onclick="orderBy('title')"
                >
                    Título
                </th>  
                <th 
                title="description"
                onclick="orderBy('description')"
                >
                    Descrição
                </th>  
                <th 
                title="category"
                onclick="orderBy('category')"
                >
                    Categorias
                </th>  
                <th 
                title="price"
                onclick="orderBy('price')"
                >
                    Preço
                </th>  
                <th 
                title="discount"
                onclick="orderBy('discount')"
                >
                    Desconto
                </th>  
            </tr>  
        </thead>  
        <tbody>
            <tr>
                <td></td>
            </tr>
        </tbody>
    </table>

    <!-- modal -->
    <input class="modal-state" id="modal-1" type="checkbox" />
    <div class="modal">
        <label class="modal__bg" for="modal-1"></label>
        <div class="modal__inner">
            <label class="modal__close" for="modal-1"></label>
            <form method="POST" onsubmit="createProduct(this,event)" enctype="multipart/form-data">
                <h2>Cadastro de Produto</h2>
                <div class="containerInput">
                    <label for="image">Insira a imagem do Produto</label>
                    <input type="file" name="image" accept="image/*" required>
                </div>
                <div class="containerInput">
                    <label for="title">Insira o título do produto:</label>
                    <input type="text" name="title" placeholder="Insira o título" required>
                </div>
                <div class="containerInput">
                    <label for="description">Insira a descrição do produto:</label>
                    <textarea name="description" placeholder="Insira a descrição" style="resize: none" required></textarea>
                </div>
                <div class="containerInput">
                    <div>
                        <label for="category">Insira a(s) categoria(s) do produto:</label>
                        <span>Separado por , (vírgula)</span>
                    </div>
                    <input type="text" name="category" placeholder="Insira a(s) categoria(s)" required>
                </div>
                <div class="containerInput">
                    <label for="discount">Insira o desconto se houver:</label>
                    <input type="number" name="discount" placeholder="Insira o desconto" max="100" min="0">
                </div>
                <div class="containerInput">
                    <label for="price">Insira o preço do produto:</label>
                    <input type="number" name="price" placeholder="Insira o preço" step="0.01" required>
                </div>
                <button type="submit">Cadastrar o Produto</button>
            </form>    
        </div>
    </div>

</section>


<script>
    const items = [
        { id: 1, thumbnail:'Edward', title:"roberto",description:"asdasd",category:"arroz",discount:12,price: 21 },
        { id: 4, thumbnail:'Sharpe', title:"roberto",description:"asdasd",category:"arroz",discount:12,price: 37 },
        { id: 3, thumbnail:'And', title:"roberto",description:"asdasd",category:"arroz",discount:12,price: 45 },
        { id: 10, thumbnail:'The', title:"roberto",description:"asdasd",category:"arroz",discount:12,price: -12 },
        { id: 5, thumbnail:'Magnetic', title:"roberto",description:"asdasd",category:"arroz",discount:12,price: 13 },
        { id: 2, thumbnail:'Zeros', title:"roberto",description:"asdasd",category:"arroz",discount:12,price: 37 }
    ];

    async function createProduct(form,event){
        event.preventDefault();
        const body = new FormData(form);
        const sucess = await fetch(getRoute("productCreate"),{
            body,
            method:"post",
            headers:{
                'Authorization':`Bearer ${getCookie("token")}`,  
                'Content-Type': 'multipart/form-data',
                'Accept': "*/*",
                'mode':"no-cors"
            },
        }).then(res=>res);
        console.log(sucess);
    }

    function compareJson(a,b){
        const nameA = typeof a === 'string'? a.toUpperCase() : a; 
        const nameB = typeof b === 'string'? b.toUpperCase() : b;
        if (nameA < nameB) {
            return -1;
        }
        if (nameA > nameB) {
            return 1;
        }

        return 0;
    }

    function orderBy(type){
        items.sort((a,b)=>compareJson(a[type],b[type]));
        console.table(items);
        createTable(items);
    }

    function createTable(value){
        const table = document.querySelector(".tableContainer tbody");
        table.innerHTML="";
        value.forEach((item)=>{
            let htmlStructured="<tr>";
            htmlStructured += "<td>"+item.id+"</td>";
            htmlStructured += "<td>"+item.thumbnail+"</td>";
            htmlStructured += "<td>"+item.title+"</td>";
            htmlStructured += "<td>"+item.description+"</td>";
            htmlStructured += "<td>"+item.category+"</td>";
            htmlStructured += "<td>"+item.price+"</td>";
            htmlStructured += "<td>"+item.discount+"</td>";
            htmlStructured+="</tr>";
            table.innerHTML+= htmlStructured;
        });
    }

    orderBy("id");
</script>