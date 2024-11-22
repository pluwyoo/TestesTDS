<?php require_once 'condiguracoes.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Memórias Terceirão</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="style2.css">
  <link rel="icon" href="/img/LOGO303T.png">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
   <style>
  body {
    background-image: url(img/backgroundOFC.png);
    background-size: cover;
    background-attachment: fixed;
}

a {
    text-decoration: none;
    /* Remove o sublinhado */
    outline: none;
    /* Remove a linha azul de foco */
    color: black;
    /* Define a cor do texto */
}

a p {
    margin: 0;
    font-size: 19px;
}

a:active,
a:focus {
    outline: none;
}

h1 {
    font-family: MinhaFonte, sans-serif;
}

/* Estilo da navbar */
.navbar {
    display: flex;
    flex-direction: center; /* Alinha os itens em coluna */
    justify-content: center;
    align-items: center;
    background-color: transparent;
    padding: 20px 0;
    position: sticky;
    width: 100%;
    z-index: 1000;
}

/* Logo */
.navbar .logo {
    margin-bottom: 20px; /* Espaçamento entre a logo e os links */
}

/* Estilo dos links */
.navbar .links {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row; /* Alinha os links na horizontal */
    flex-wrap: wrap;
}

.navbar a {
    color: #ffdbff; /* Cor roxa para os links */
    text-decoration: none;
    padding: 20px;
    font-size: 28px;
    font-weight: bold;
    transition: all 0.3s ease-in-out;
    border-radius: 4px;
    margin-left: 30px;
    margin-right: 60px; /* Ajuste de espaçamento entre os links */
}

/* Efeito de hover nos links */
.navbar a:hover {
    background-color: rgba(138, 43, 226, 0.2);
    /* Cor roxa suave para o hover */
    color: #fff; /* Muda o texto para branco no hover */
    transform: scale(1.1); /* Efeito de zoom */
}

/* Ajustes de foco para melhorar acessibilidade */
.navbar a:focus {
    outline: 2px solid #8a2be2; /* Borda roxa no foco */
}

/* Responsividade para telas menores */
@media (max-width: 768px) {
    .navbar .links {
        flex-direction: column; /* Alinha os links em coluna para telas menores */
    }

    .navbar a {
        margin: 10px 0;
        font-size: 20px;
        padding: 15px;
    }
}



</style>
</head>
<body>
  <header>
    <img src="/img/logoterceirao3.png" alt="memorias" class="logo">
  </header>
  <div class="navbar">
  <a style="opacity: 0%;">.</a>
  <a href="fotos.php" class="nav-link">Fotos</a>
  <a href="videos.php" class="nav-link">Vídeos</a>
  <a href="#trabalhos" class="nav-link">Trabalhos</a>
  <a href="#alunos" class="nav-link">Alunos</a>
  <a href="#professores" class="nav-link">Professores</a>
  <span style="opacity: 0%;">.......</span>
</div>

<div class="section" id="trabalhos">

<header2 id="seção fotos">
    <h1>Trabalhos</h1>
  </header2>
  <!-- Conteúdo da seção de trabalhos -->
<center>
  <div class="field-sec">

    <fieldset>

      <label style="--_img: url(img/Memorys.png)">
        <input type="radio" name="images" value="Fiddle Leaf">
      </label>

      <label style="--_img: url(img/DuartePeloRS.png)">
        <input type="radio" name="images" value="Pink Princess">
      </label>

      <label style="--_img: url(img/DuartePeloRS2.png)">
        <input type="radio" name="images" value="Monstera" checked>
      </label>

      <label style="--_img: url(img/camisas.png)">
        <input type="radio" name="images" value="Pothos">
      </label>

      <label style="--_img: url(img/f5.jpeg)">
        <input type="radio" name="images" value="Rubber Tree">
      </label>

    </fieldset>

  </div>

  <div class="field-sec" style="margin-top: 50px;">

    <fieldset>

      <label style="--_img: url(img/UsGuri.png)">
        <input type="radio" name="images" value="Fiddle Leaf">
      </label>


    </fieldset>

  </div>
</div>
</center>
<div class="section" id="alunos">
 

<header2 id="seção fotos">
    <h1>Alunos</h1>
  </header2>
  <center>
  <main>
  
    <div class="field-sec">
  
      <fieldset>
  
        <label style="--_img: url(img/fernanda.png)">
          <input type="radio" name="images" value="Fiddle Leaf">
        </label>
  
        <label style="--_img: url(img/shelby.png)">
          <input type="radio" name="images" value="Pink Princess">
        </label>
  
        <label style="--_img: url(img/polaco.png)">
          <input type="radio" name="images" value="Monstera" checked>
        </label>
  
        <label style="--_img: url(img/Balu.png)">
          <input type="radio" name="images" value="Pothos">
        </label>
  
        <label style="--_img: url(img/Diego.png)">
          <input type="radio" name="images" value="Rubber Tree">
        </label>
  
      </fieldset>
  
    </div>
  
    <div class="field-sec" style="margin-top: 50px;">
  
      <fieldset>
  
        <label style="--_img: url(img/Felipe.png)">
          <input type="radio" name="images" value="Fiddle Leaf">
        </label>
  
        <label style="--_img: url(img/Bigode.png)">
          <input type="radio" name="images" value="Pink Princess">
        </label>
  
        <label style="--_img: url(img/Cristian.png)">
          <input type="radio" name="images" value="Monstera" checked>
        </label>
  
        <label style="--_img: url(img/Braian.png)">
          <input type="radio" name="images" value="Pothos">
        </label>
  
        <label style="--_img: url(img/José.png  )">
          <input type="radio" name="images" value="Rubber Tree">
        </label>



      </fieldset>
      <fieldset>
        
      <label style="--_img: url(img/Erika.png  )">
          <input type="radio" name="images" value="Rubber Tree">
        </label>
        
      </fieldset>
  
    </div>
  </div>
  </center>

</div>

<div class="section" id="professores">

<header2 id="seção fotos">
    <h1>Professores</h1>
  </header2>
  <center>
    <div class="field-sec">
  
      <fieldset>
  
        <label style="--_img: url(img/professor.png)">
          <input type="radio" name="images" value="Fiddle Leaf">
        </label>
  
        <label style="--_img: url(img/CAMILA.png)">
          <input type="radio" name="images" value="Pink Princess">
        </label>
  
        <label style="--_img: url(img/GUILHERME.png)">
          <input type="radio" name="images" value="Monstera" checked>
        </label>
  
        <label style="--_img: url(img/JEFFERSON.png)">
          <input type="radio" name="images" value="Pothos">
        </label>
  
        <label style="--_img: url(img/SOL.png)">
          <input type="radio" name="images" value="Rubber Tree">
        </label>
  
      </fieldset>
  
    </div>
  
    <div class="field-sec" style="margin-top: 50px;">
  
      <fieldset>
  
        <label style="--_img: url(img/MIRELA.png)">
          <input type="radio" name="images" value="Fiddle Leaf">
        </label>
  
        <label style="--_img: url(img/CRIS.png)">
          <input type="radio" name="images" value="Pink Princess">
        </label>
  
        <label style="--_img: url(img/ADRIANA.png)">
          <input type="radio" name="images" value="Monstera" checked>
        </label>
  
        <label style="--_img: url(img/LORENA.jfif)">
          <input type="radio" name="images" value="Pothos">
        </label>
  
        <label style="--_img: url(img/PORTUGUES.jfif)">
          <input type="radio" name="images" value="Rubber Tree">
        </label>
  
      </fieldset>
  
    </div>

    <div class="field-sec" style="margin-top: 50px;">
  
      <fieldset>
  
        <label style="--_img: url(img/INF.png)">
          <input type="radio" name="images" value="Fiddle Leaf">
        </label>
  
        <label style="--_img: url(img/INF.png)">
          <input type="radio" name="images" value="Pink Princess">
        </label>
  
        <label style="--_img: url(img/INF.png)">
          <input type="radio" name="images" value="Monstera" checked>
        </label>
  
        <label style="--_img: url(img/INF.png)">
          <input type="radio" name="images" value="Pothos">
        </label>
  
        <label style="--_img: url(img/INF.png)">
          <input type="radio" name="images" value="Rubber Tree">
        </label>
  
      </fieldset>
  
    </div>

  </div>
  </center>


<footer>
    <div id="footer_content">
      <div id="footer_contacts">
        <h1>Tds 303</h1>
        <p>A vida é melhor quando se tem amigos.</p>

        <div id="footer_social_media">
  <a style="margin-left: 200px;" href="https://www.instagram.com/terceiro_tds?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="footer-link" id="instagram" target="_blank" rel="noopener noreferrer">
    <i class="fa-brands fa-instagram" style="font-size: 32px;"></i>
  </a>
</div>
      </div>

      <ul class="footer-list">
        <li>
          <h3>Professores Regentes</h3>
        </li>
        <li>
          <a href="Rafael.php" class="footer-link">Rafael Felisbino Vitoretti</a>
        </li>
        <li>
          <a href="Eduardo.php" class="footer-link">Eduardo Biela</a>
        </li>
      </ul>

      <ul class="footer-list">
        <li>
          <h3>Informações</h3>
        </li>
        <li>
          <a href="#professores" class="footer-link">Professores</a>
        </li>
        <li>
          <a href="#alunos" class="footer-link">Alunos</a>
        </li>
        <li>
          <a href="fotos.php" class="footer-link">Fotos</a>
        </li>
      </ul>
    <div>
    <img style="margin-top: 20px;   margin-left: -20px; padding: 20px; width: 460px;" src="/img/logoterceirao3.png" alt="memorias" class="logo">
    </div>
      </div>
    </div>

    <div id="footer_copyright">
      &#169
      2024 Todos os direitos reservados
    </div>
  </footer>

<script>
  // Função para rolagem suave ao clicar nos links da barra de navegação
  document.querySelectorAll('.navbar a').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();
      
      const targetId = this.getAttribute('href').substring(1);
      const targetSection = document.getElementById(targetId);

      window.scrollTo({
        top: targetSection.offsetTop,
        behavior: 'smooth'
      });
    });fdfwsf
  });
  document.getElementById('addFotosBtn').addEventListener('click', function() {
  document.getElementById('inputFileTurma').click();
});

document.getElementById('inputFileTurma').addEventListener('change', function() {
  const turmaFotosContainer = document.getElementById('turma-fotos');
  const files = Array.from(this.files);

  files.forEach(file => {
    const reader = new FileReader();
    reader.onload = function(e) {
      const imgSrc = e.target.result;
      const turmaFoto = document.createElement('div');
      turmaFoto.classList.add('turma-foto');
      turmaFoto.innerHTML = `
        <img src="${imgSrc}">
        <button class="remover-foto-btn">Remover</button>`;
      turmaFotosContainer.appendChild(turmaFoto);
      
      // Adiciona um event listener para o botão de remover
      const removerBtn = turmaFoto.querySelector('.remover-foto-btn');
      removerBtn.addEventListener('click', function() {
        turmaFotosContainer.removeChild(turmaFoto);
      });
    };
    reader.readAsDataURL(file);
  });
});

function adicionarFoto(idElemento, caminhoFoto) {
    // Verificar se o elemento existe
    var elemento = document.getElementById(idElemento);
    if (!elemento) {
        console.error("Elemento não encontrado.");
        return;
    }
    
    // Criar um elemento de imagem
    var novaFoto = document.createElement("img");
    novaFoto.src = caminhoFoto;
    
    // Adicionar a nova foto ao elemento
    elemento.appendChild(novaFoto);
    
    // Adicionar um botão de remover
    var removerBtn = document.createElement("button");
    removerBtn.textContent = "Remover";
    removerBtn.addEventListener("click", function() {
        elemento.removeChild(novaFoto);
        elemento.removeChild(removerBtn);
    });
    elemento.appendChild(removerBtn);
}

function removerFoto(idElemento) {
    // Verificar se o elemento existe
    var elemento = document.getElementById(idElemento);
    if (!elemento) {
        console.error("Elemento não encontrado.");
        return;
    }
    
    // Remover a última foto do elemento, se existir
    if (elemento.lastChild) {
        elemento.removeChild(elemento.lastChild);
    }
}
var removerBtns = document.querySelectorAll('.remover-foto-btn');
    removerBtns.forEach(function(btn) {
      btn.style.backgroundColor = "#ff0000";
      btn.style.color = "#fff";
      btn.style.border = "none";
      btn.style.padding = "5px 10px";
      btn.style.borderRadius = "5px";
      btn.style.cursor = "pointer";
    });

</script>


</body>
</html>
