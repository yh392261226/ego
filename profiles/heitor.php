<?php
  require_once("../lib/auth.php");
  require_once("../lib/ego.php");
  $ego = new Ego("http://ego.globo.com/famosos/noticia/2013/04/gosto-de-reggae-e-mulher-bonita-diz-juliano-cazarre-de-volta-novelas.html");
  $ego->author("Heitor Gomide");
  $ego->title("Não foi dessa vez, mas pode ter certeza");
  $ego->subtitle("Aquele amor guardado há anos ainda irá se aflorar. Este foi o sentimento dos convidados presentes neste último sábado na charmosa cidade de Pará de Minas, MG.");
  $ego->add_image("../imgs/egoheitor1.jpg", "Tempo ao tempo: difícil aproximação entre Heitor<br>Gomide e Ludmila Lopes", "320", "394");
  $ego->add_paragraph("Quem achou que Lucas Lucco marcaria o grandioso evento na badalada Girus, enganou-se. Desta vez o protagonista da noite foi o sedutor Heitor Gomide, conhecido por muitos como \"Coração de Gelo\", que se derreteu todo por Ludmila Lopes.");
  $ego->add_section("A viagem");
  $ego->add_paragraph("O clima romântico começou cedo na mansão do engenheiro multimilionário Eric Ranieri e de seu sócio Thor Batista. Troca de olhares e uma disputa acirrada para se sentarem ao lado no carro que partia rumo a Pará de Minas, deixaram o ambiente fervendo. Foi preciso a interferência do rapper Fernando, o \"Buiu\", preocupado com sua branca e impecável Dodge, muito conhecida como White Horse nos campeonatos de tunning nacionais. A aproximação foi tão forçada que Heitor ainda argumentou que a Dodge Ram era menos espaçosa que o Uno do estagiário Arthur Bilbao. Uma loucura!");
  $ego->add_paragraph("Foi chegando ao hotel e a situação já passou a ser notável por todos. A tentativa de aproximação ocorria de fato! \"Fiquei impressionada, ele não tirava o olho da Ludy enquanto ela dormia, parecia cena de filme. Estava tão intenso que preferi não interromper\", relatou Mariana Leite. Como se não bastasse o interesse de Heitor, o destino fazia a sua parte: coincidentemente, os pombinhos hospedaram-se em quartos vizinhos. A noite prometia!");
  $ego->add_section("Girus: pegou fogo");
  $ego->add_paragraph("Heitor Gomide, muito acanhado, se via sem jeito para tomar atitude. A presença de Eric Ranieri incomodava. <span class=\"semantica-autolink-topico-tip\" id=\"span-autolink-id-ttp://ego.automacaonabalada.com/profiles/ludy.php\" rel=\"http://ego.automacaonabalada.com/profiles/ludy.php\"><a class=\"link-do-autolink-semantico\" href=\"http://ego.automacaonabalada.com/profiles/ludy.php\">Entenda. </a></span> Ludmila Lopes não podia dar um passo que os olhos vidrados de Heitor a acompanhavam incessantemente. Nem para uma pausa descontraída para uma foto com os amigos tirava sua concentração. É neste momento que o rapper e amigo do casal, Buiu, chateado com a situação resolve tomar uma atitude com o auxílio do cantor e compositor Gustavo Lima, que apreciava seu parceiro Lucco.");
  $ego->add_image("../imgs/egoheitor2.jpg", "Olhos vidrados de Heitor acompanhavam incessantemente Ludmila");
  $ego->add_paragraph("Buiu saiu a caça de rapazes sedutores para que tentassem uma aproximação com Ludmila e provocasse o coração de Heitor. Não deu outra, Heitor Gomide perdeu o chão, se viu ameaçado. Tentou de tudo, sua mente começou a até mesmo criar situações inexplicáveis, ele perdia a razão numa tentativa frustrada de denegrir a imagem do tranquilo Bilbao para Lore, acompanhante de Gustavo Lima.");
  $ego->add_image("../imgs/oliver.jpg", "Pura sedução","200","280");
  $ego->add_paragraph("Ludmila Lopes se rendeu aos encantos de Oliver, um verdadeiro cara de atitude. Cenas ardentes ocorreram em público. Os amigos de Heitor não acreditavam no que estava acontecendo e preferiram não presenciar aquele momento com os próprios olhos. Pessoas ao redor que sentiram o clima constrangedor ficaram espantados. Marlos Fernandes, em tentativa desesperada de interromper o inevitável, ameaçou cuspir em Oliver.");
  $ego->add_image("../imgs/egoheitor3.jpg", "Marlos ameaça cuspir, Buiú leva a mão à cabeça, Gustavo Lima se esconde com o balde e o público se espanta");
  $ego->add_paragraph(" Letícia Nogueira, empresária do ramo alimentício, comentou: \"A fila andou, eu te falei, não deu valor... agora chora\". Heitor Gomide deixou o local acabado e consolado pelo trapalhão Buiu, responsável pelo incidente.");
  $ego->render();
?>
