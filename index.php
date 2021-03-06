<?php
  require_once("./lib/auth.php");
  require_once("./lib/ego.php");

  $ego = new Ego("http://ego.globo.com/");

  $html_topo_direita = <<<EOD
  
<div class="destaque destaque-flexivel-vertical">
  <div class="chamada ">
    <a class="animated" href="./profiles/palmito.php" title="Baggio confirma relacionamento">
      <style type="text/css">#foto-palmito {background-image:url('./imgs/egopalmito2_thumb.jpg'); background-repeat: no-repeat; background-position: top left; }
      </style>
      <div id="foto-palmito" class="foto" style="height: 228px;">Baggio confirma relacionamento
      </div>
      <div class="texto">
        <div class="wrapper-chapeu">
          <p class="chapeu">que vacilo!</p>
          <div class="wrapper-comentarios">
            <span class="comentarios">0</span>
          </div>
        </div>

        <h2 class="wrapper-titulo">
          <div class="animated titulo">
            <span class="animated background">Baggio confirma relacionamento</span>
            <span class="foreground">Baggio confirma relacionamento</span>
          </div>
        </h2>
      </div>
    </a>
  </div>
</div>

<div class="destaque destaque-flexivel-vertical" style="margin-bottom: 0px;">
  <div class="chamada ">
    <a class="animated" href="./profiles/gusta.php" title="Gustavo Martins protagoniza polêmica">
      <style type="text/css">#foto-gusta {background-image:url('./imgs/gusta_thumb.jpg'); background-repeat: no-repeat; background-position: top left; }
      </style>
      <div id="foto-gusta" class="foto" style="height: 227px;">Gustavo Martins protagoniza polêmica
      </div>
      <div class="texto">
        <div class="wrapper-chapeu">
          <p class="chapeu">Amor e Ódio</p>
          <div class="wrapper-comentarios">
            <span class="comentarios">0</span>
          </div>
        </div>

        <h2 class="wrapper-titulo">
          <div class="animated titulo">
            <span class="animated background">Gustavo Martins protagoniza polêmica</span>
            <span class="foreground">Gustavo Martins protagoniza polêmica</span>
          </div>
        </h2>
      </div>
    </a>
  </div>
</div>
EOD;

  $html_area_topo = <<<EOD
<div class="glb-grid-4 glb-primeiro evtrk evtrk-topo-esquerda">
  <div class="destaque destaque-principal destaque-principal-vertical">
    <div class="chamada ">
      <a class="animated" href="./profiles/heitor.php" title="Heitor abre o coração">
        <style type="text/css">#foto-heitor {background-image:url('./imgs/egoheitor1_thumb.jpg'); background-repeat: no-repeat; background-position: top left; }</style>            
        <div id="foto-heitor" class="foto">Heitor abre o coração</div>
        <div class="texto">
          <div class="wrapper-chapeu">
            <p class="chapeu">o tempo fechou</p>
            <div class="wrapper-comentarios">
              <span class="comentarios">0</span>
            </div>
          </div>

          <h2 class="wrapper-titulo">
            <div class="animated titulo">
              <span class="animated background">Heitor abre o coração</span>
              <span class="foreground">Heitor abre o coração</span>
            </div>
          </h2>
        </div>
      </a>
    </div>
  </div>
</div>

<div class="glb-grid-4 glb-ultimo area-topo-meio">
  <div class="destaque destaque-secundario destaque-secundario-ego hentry">
    <div class="chamada ">
      <a class="animated" href="./profiles/buiu.php" title=""Não jogo mais no time dos solteiros"">
        <style type="text/css">#foto-buiu {background-image:url('./imgs/egobuiu1_thumb.jpg'); background-repeat: no-repeat; background-position: top left; }</style>
        <div id="foto-buiu" class="foto">"Não jogo mais no time dos solteiros"</div>
        <div class="texto">
          <div class="wrapper-chapeu">
            <p class="chapeu">malaco</p>
            <div class="wrapper-comentarios">
              <span class="comentarios visible">1</span>
            </div>
          </div>
          
          <h2 class="wrapper-titulo">
            <div class="animated titulo">
              <span class="animated background">"Não jogo mais no time dos solteiros"</span>
              <span class="foreground">"Não jogo mais no time dos solteiros"</span>
            </div>
          </h2>
        </div>
      </a>
    </div>
  </div>    
	
  <div class="destaque destaque-terciario destaque-terciario-ego hentry">
    <div class="duplo esquerda">
      <div class="chamada ">
        <a class="animated" href="./profiles/ludy.php" title="Ludmila Lopes e Eric Ranieri">
          <style type="text/css">#foto-foto-ludy {background-image:url('./imgs/egoludy1_thumb.jpg'); background-repeat: no-repeat; background-position: top left; }</style>
          <div id="foto-foto-ludy" class="foto">Ludmila Lopes e Eric Ranieri</div>
          <div class="texto">
            <div class="wrapper-chapeu">
              <p class="chapeu">agressiva</p>
            </div>

            <div class="wrapper-titulo">
              <div class="animated titulo">
                <span class="animated background">Ludmila Lopes e Eric Ranieri</span>
                <span class="foreground">Ludmila Lopes e Eric Ranieri</span>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>

    <div class="duplo direita">
      <div class="chamada ">
        <a class="animated" href="./profiles/arthur.php" title="Arthur Bilbão na balada">
        <style type="text/css">#foto-arthur {background-image:url('./imgs/egoarthur1_thumb.jpg'); background-repeat: no-repeat; background-position: top left; }</style>
        <div id="foto-arthur" class="foto">Arthur Bilbão na balada (Instagram/ Reprodução)</div>
        <div class="texto">
          <div class="wrapper-chapeu">
            <p class="chapeu">ousado</p>
          </div>

          <div class="wrapper-titulo">
            <div class="animated titulo">
              <span class="animated background">Arthur Bilbão na balada</span>
              <span class="foreground">Arthur Bilbão na balada</span>
            </div>
          </div>
        </div>
      </a>
    </div>
  </div>
</div>

  <div class="destaque destaque-secundario destaque-secundario-ego hentry">
    <div class="chamada ">
      <a class="animated" href="./profiles/marlos.php" title="Marlos Fernandes molha o cabelo">
        <style type="text/css">#foto-marlos {background-image:url('./imgs/egomarlos1_thumb.jpg'); background-repeat: no-repeat; background-position: top left; }</style>
        <div id="foto-marlos" class="foto">Marlos Fernandes molha o cabelo</div>
        <div class="texto">
          <div class="wrapper-chapeu">
            <p class="chapeu">só no shampoo</p>
            <div class="wrapper-comentarios">
              <span class="comentarios visible">2</span>
            </div>
          </div>

          <h2 class="wrapper-titulo">
            <div class="animated titulo">
              <span class="animated background">Marlos Fernandes molha o cabelo</span>
              <span class="foreground">Marlos Fernandes molha o cabelo</span>
            </div>
          </h2>
        </div>
      </a>
    </div>
  </div>
</div>
EOD;

  $ego->replace_html("div.evtrk-topo-direita", $html_topo_direita);
  $ego->replace_html("div.area-topo", $html_area_topo);
  $ego->render();