<!DOCTYPE html>
<html>
    
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WebCreators - Personalizar Plano</title>
  <link rel="stylesheet" href="perso.css">
</head>

<body>
  <header>

<button id="toggle-mode">Tema</button>

<h1 class="titulo-principal"><a href="../index.html"> <i class="fa-solid fa-laptop-code"></i> WebCreators</a></h1>
<h2 class="slogan">- Digitalizando seus Sonhos -</h2>

</header>
  <main class="container">
        <form method="post" action="" class="section1">
          <div class="card">
            <label for="item1">Acesso a modelos de sites prontos</label>
            <input type="checkbox" name="itens[]" value="item1" id="item1">
            <p>Proporciona aos clientes uma ampla variedade de modelos de sites pré-construídos e personalizáveis. Com essa funcionalidade, os clientes podem economizar tempo e esforço no processo de desenvolvimento, utilizando modelos profissionais e esteticamente atraentes como ponto de partida para seus projetos./p>
          </div>
            
          <div class="card">
            <label for="item2">Personalização Avançada</label>
            <input type="checkbox" name="itens[]" value="item2" id="item2">
            <p>A liberdade de personalizar cada detalhe do site, desde o layout até os elementos visuais, cores, fontes e estilos. A personalização avançada permite criar uma identidade visual única e sob medida para cada projeto, garantindo uma experiência totalmente personalizada para os usuários finais.?</p>
          </div>

          <div class="card">
            <label for="item3">Recursos Avançados</label>
            <input type="checkbox" name="itens[]" value="item3" id="item3">
            <p>Esses recursos incluem bibliotecas de código pré-construídas, frameworks poderosos, plugins personalizados e APIs avançadas que ampliam as possibilidades de desenvolvimento. Com os recursos avançados, os clientes podem implementar funcionalidades complexas.</p>
          </div>

          <div class="card">
            <label for="item4">Chat ao vivo</label>
            <input type="checkbox" name="itens[]" value="item4" id="item4">
            <p>Com essa funcionalidade, os visitantes do site têm a capacidade de iniciar uma conversa instantânea com uma equipe, permitindo que tirem dúvidas, solicitem informações adicionais e mais. O chat ao vivo oferece uma experiência interativa e personalizada, permitindo uma comunicação direta e eficiente</p>
          </div>
            
          <div class="card">
            <label for="item5">Hospedagem Básica</label>
            <input type="checkbox" name="itens[]" value="item5" id="item5">
            <p>Essa opção oferece recursos essenciais para garantir o funcionamento adequado do site, como armazenamento de arquivos, largura de banda suficiente para lidar com o tráfego de visitantes e suporte técnico básico para resolver problemas relacionados à hospedagem. Além disso, a hospedagem básica também inclui recursos de segurança para proteger os sites contra ameaças</p>
          </div>  

          <div class="card">
            <label for="item6">Hospedagem Completa</label>
            <input type="checkbox" name="itens[]" value="item6" id="item6">
            <p>Os clientes têm acesso a recursos e benefícios adicionais para aprimorar a experiência de seus clientes. Essa opção oferece um desempenho excepcional, com servidores de alta velocidade e capacidade de processamento otimizada, garantindo que os sites sejam carregados rapidamente, mesmo durante picos de tráfego. Além disso, a hospedagem avançada oferece recursos de segurança avançados.</p>
          </div>
           
          <div class="card">
            <label for="item7">Integração com Redes Sociais</label>
            <input type="checkbox" name="itens[]" value="item7" id="item7">
            <p>A integração permite que os visitantes compartilhem o conteúdo do site nas redes sociais, aumentando a visibilidade e alcance das informações. Além disso, é possível adicionar botões de compartilhamento, curtidas e comentários em postagens, estimulando a interação e o engajamento dos usuários.</p>
          </div>

          <div class="card">
            <label for="item8">Integração com Serviços de pagamentos</label>
            <input type="checkbox" name="itens[]" value="item8" id="item8">
            <p>Projetada especialmente para clientes que desejam fornecer aos seus usuários uma experiência de compra online simplificada e segura. Com essa função, é possível integrar facilmente os sites desenvolvidos a diferentes serviços de pagamento, como PayPal, Stripe, PagSeguro, entre outros</p>
          </div>

          <div class="card">
            <label for="item9">Analytics Básico</label>
            <input type="checkbox" name="itens[]" value="item9" id="item9">
            <p>Com o Analytics Básico, é possível acompanhar estatísticas e métricas importantes, como número de visitantes, origem do tráfego, páginas mais populares, taxa de rejeição e tempo médio de permanência no site. Essas informações permitem que os clientes entendam melhor o comportamento dos usuários, identifiquem tendências, tomem decisões embasadas e melhorem a experiência do usuário. </p>
          </div>

          <div class="card">
            <label for="item10">Analytics Avançado</label>
            <input type="checkbox" name="itens[]" value="item10" id="item10">
            <p>Os clientes têm acesso a um conjunto abrangente de recursos e métricas detalhadas que proporcionam uma compreensão profunda do desempenho do site,  o Analytics Avançado oferece informações avançadas, como análise de funil, segmentação de público, comportamento do usuário, conversões e metas personalizadas.</p>
          </div>
          <div class=card>
          <label for="item11">Email Profissional</label>
          <input type="checkbox" name="itens[]" value="item11" id="item11">
          <p>Você terá um endereço de email personalizado com o nome do seu domínio, transmitindo profissionalismo e credibilidade aos seus contatos. Além disso, você terá acesso a recursos avançados de email, como armazenamento amplo, proteção contra spam, backup automático e sincronização em dispositivos múltiplos.</p>
          </div>

            <input class="botao" type="submit" name="submit" value="Calcular Preço">
        </form>
    <section class="section2">
        <p>Soma:</p>

  <?php
  // Verifica se o formulário foi enviado
  if (isset($_POST['submit'])) {
      // Obtém os itens selecionados
      $itensSelecionados = $_POST['itens'];
      
      // Define os preços dos itens
      $precoItem1 = 25;
      $precoItem2 = 40;
      $precoItem3 = 40;
      $precoItem4 = 25;
      $precoItem5 = 25;
      $precoItem6 = 40;
      $precoItem7 = 25;
      $precoItem8 = 40;
      $precoItem9 = 40;
      $precoItem10 = 40;
      $precoItem11 = 40;
      
      // Calcula o preço total
      $precoTotal = 0;
    foreach ($itensSelecionados as $item) {
        switch ($item) {
            case 'item1':
              $precoTotal += $precoItem1;
              break;
            case 'item2':
              $precoTotal += $precoItem2;
              break;
            case 'item3':
              $precoTotal += $precoItem3;
              break;
            case 'item4':
              $precoTotal += $precoItem4;
              break;
           case 'item5':
              $precoTotal += $precoItem5;
              break;  
              case 'item6':
                $precoTotal += $precoItem6;
                break; 
                case 'item7':
                  $precoTotal += $precoItem7;
                  break; 
                  case 'item8':
                    $precoTotal += $precoItem8;
                    break; 
                    case 'item9':
                      $precoTotal += $precoItem9;
                      break; 
                      case 'item10':
                        $precoTotal += $precoItem10;
                        break; 
                        case 'item11':
                        $precoTotal += $precoItem11;
                        break;
                    }
                }
                
                // Exibe o preço total
                echo "<p>O preço total é: R$ " . number_format($precoTotal, 2) . "</p>";
            }
            ?>
  </section>
</main>
  <footer class="footer">
      
      <div class="footer-head">
          <h2 class="titulo-footer"><a href="../index.html">WebCreators</a></h2>
  <ul class="icons">
      <li><i class="fa-brands fa-whatsapp" style="color: #ffffff;"></i></li>
      <li><i class="fa-brands fa-github" style="color: #ffffff;"></i></li>
      <li><i class="fa-brands fa-linkedin" style="color: #ffffff;"></i></li>
      <li><i class="fa-brands fa-instagram" style="color: #ffffff;"></i></li>
    </ul>
</div>

<div class="footer-body">

  <div class="footer-card">
    <h3>orçamento</h3>
    <a href="../contato/contato.html">pedir orçamento</a>
    <a href="../planos/formulario.html">assinaturas</a>
  </div>

  <div class="footer-card">
    <h3>quem somos</h3>
    <a href="../index.html#proj">projetos</a>
    <a href="../sobrenos/sobre.html">equipe</a>
  </div>

  <div class="footer-card">
    <h3>sobre</h3>
    <a href="../clausulas/termos.html">termos e condições</a>
    <a href="../clausulas/priva.html">privacidade</a>
  </div>

</div>

</footer>

<script src="../main.js"></script>
<script src="https://kit.fontawesome.com/85984e7e4e.js" crossorigin="anonymous"></script>


</body>

</html>