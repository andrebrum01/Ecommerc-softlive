<div class="containerLogin">
    <div class="background">
        <img src="<?=$static("src/img/login@svg")?>" alt="" loading="lazy()"/>
    </div>
    <div class="foreground">

      <form method="post" onsubmit="submitForm(this,event)">
        <img 
            class="imgLogo"
            alt="Logo do Site"
            src="https://static.pichau.com.br/logo-pichau-2021-dark.png"
        />
        <div class="containerInput">
            <label for="email">Email</label>
            <input 
              id="email"
              type="email"
              name="email"
              placeholder="Insira o seu email"
              required
            >
        </div>
        <div class="containerInput">
            <label for="password">Senha</label>
            <input
              id="password"
              type="password"
              name="password"
              placeholder="Insira a sua senha"
              required
            >
        </div>
        <div class="containerCheckbox">
            <input type="checkbox" name="check" id="check" checked>
            <label for="check">
              <div><i class="bi bi-check"></i></div>
              Lembre-se de mim
            </label>
        </div>
        <button type="submit">Acessar sua conta</button>
      </form>
    </div>
</div>
<script>


  async function submitForm(form,event){
      event.preventDefault();
      const body =new FormData(form);
      const { baseURL, accountLogin } = routes.server;
      const token = await fetch( baseURL + accountLogin,{
      body,
      method:"post"
      }
      ).then(res => res.json())
      .then(json=> json.token);
      if(token){
        setCookie("token",token,1);
        // console.log(routes);
        window.location.href = routes.app.baseURL + routes.app.dashBoardPage;
      }
  }    


</script>