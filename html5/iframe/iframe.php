<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/png" href="../../images/favicon.png">
  <link rel="stylesheet" href="../../styles/main.css" >
  <title>Iframes</title>
  <style>
    *{
      max-width: 100%;
    }

    a{
      text-decoration: none;
    }

    ul li a:hover{
      font-size: 20px;
      color: #f90056;
    }

    div[class] a{
      display: block;
    }

    #interface{
      display: flex;
      flex-flow: row wrap;
    }

    #interface > *{
      flex: 1 100%;
    }

    #artigo{
      padding: 8px;
    }

    #page-header, #artigo, #page-footer{
      font-size: 20px;
    }

    #page-header{
      background-image: linear-gradient(to bottom, #b3b3b3, white);
    }

    #side-menu{
      background-image: linear-gradient(to right, #b3b3b3, white);
    }

    #page-footer{
      background-image: linear-gradient(to top, #999999, white);
    }

    .linha-bloco{
      display: inline-block;
    }

    @media all and (min-width: 100px){
      #interface > *{
        flex: 100%;
      }
    }

    @media all and (min-width: 800px) {
      #side-menu{
        flex: 1;
      }
      #interface > section{
        flex: 4;
      }
    }

    /* Imagens */

    img{
      display: block;
      margin-left: auto;
      margin-right: auto;
    }

    /* Iframes */

    iframe{
      border: none;
    }

    .iframes{
      width: 100%;
      height: 340px;
    }

    .celular1{
      width: 360px;
      height: 640px;
    }

    .celular2{
      width: 370px;
      height: 400px;
    }

    /* Tabelas */

    table{
      width: 100%;
      text-align: left;
      border-collapse: collapse;
    }

    td, th{
      padding: 8px;
      border-bottom: 1px solid #cccccc;
    }

    th{
      background-color: #999999;
    }

    tr:hover{
      background-color:#cccccc;
    }

    /* Códigos */

    .codigo{
      background-color: #272822;
      padding: 10px;
    }

    .amarelo{
      color: #e6d95c;
    }
    
    .azul{
      color: #66d9ef;
    }

    .branco{
      color: #ffffff;
    }

    .cinza, #interface > header > h1, #interface > nav > h2, #interface > nav > h3, #interface > footer > p{
      color: #757150;
    }

    .rosa{
      color: #f90056;
    }

    .verde{
      color: #95dd07;
    }
  </style>
</head>
<body>
  <div id="interface">
    <header id="page-header">
      <?php include '../../page-header.html'; ?>
    </header>
    
    <nav id="side-menu">
      <?php include '../../side-menu.html'; ?>
    </nav>
    
    <section>
      <div id="artigo">
        <header class="pcenter">
          <h1 class="pcenter">A tag &lt;<code class="rosa">iframe</code>&gt;</h1>
          <h4 class="pcenter cinza">
            Reproduzindo um website ou mídia dentro de um website através de um link.
          </h4>
        </header>
        
        <hr>
        
        <section>
          <article>
            <h2>Sintaxe</h2>
            <p>A sintaxe principal é definida por:</p>    

            <div class="codigo">
              <code class="branco">&lt;</code><code class="rosa">iframe </code>
              <code class="verde">src</code><code class="branco">=</code><code class="amarelo">"URL"</code><code class="branco">&gt;</code>
              <code class="branco">&lt;/</code><code class="rosa">iframe</code><code class="branco">&gt;</code>
            </div>

            <p>
              Pode-se colocar tags internas a ela, geralmente para avisar o usuário caso o navegador não suporte a tag &lt;iframe&gt;, pois somente será exibido caso isto ocorra. Exemplo:
            </p>
            
            <div class="codigo">
              <code class="branco">&lt;</code><code class="rosa">iframe </code>
              <code class="verde">src</code><code class="branco">=</code><code class="amarelo">"iframe.html"</code><code class="branco">&gt;</code>
              <br>
              <code class="branco">&nbsp;&nbsp;&lt;</code><code class="rosa">p</code><code class="branco">&gt;</code>
              <code class="branco">Este navegador não suporta a tag &lt;iframe&gt;.</code>
              <code class="branco">&lt;/</code><code class="rosa">p</code><code class="branco">&gt;</code>
              <br>
              <code class="branco">&lt;/</code><code class="rosa">iframe</code><code class="branco">&gt;</code>
            </div>

            <p>
              Por padrão, o iframe é exibido com bordas. Elas podem ser removidas através do css. Exemplo:
            </p>

            <div class="codigo">
              <code class="branco">&lt;</code><code class="rosa">style</code><code class="branco">&gt;</code>
              <br>
              <code class="rosa">&nbsp;&nbsp;iframe</code>
              <code class="branco">{</code>
              <code class="azul">border</code><code class="branco">:</code>
              <code class="azul">none</code><code class="branco">;</code>
              <code class="branco">}</code>
              <br>
              <code class="branco">&lt;/</code><code class="rosa">style</code><code class="branco">&gt;</code>
            </div>
            
            <iframe class="iframes" src="iframe.html">
              <p>Este navegador não suporta a tag &lt;iframe&gt;.</p>
            </iframe>

            <p>
              Todos os navegadores atuais e atualizados da imagem abaixo suportam a tag. Entre os atributos, somente o srcdoc não é suportado pelo navegador Internet Explorer / Edge (<a href="https://www.w3schools.com/TAGs/att_iframe_srcdoc.asp">w3school.com</a>).
            </p>

            <a href="http://1.bp.blogspot.com/-8IfBfM07ZH4/UDwMlZxVpTI/AAAAAAAAATk/bLsReLpaufI/s1600/39654109014123727.jpg">
              <figure>
                <img src="http://1.bp.blogspot.com/-8IfBfM07ZH4/UDwMlZxVpTI/AAAAAAAAATk/bLsReLpaufI/s1600/39654109014123727.jpg" alt="Internet Explorer | Safari | Opera | Mozilla Firefox | Google Chrome" title="Navegadores web">
              </figure>
            </a>
          </article>
        
          <hr>

          <article>
            <h2>Atributos suportados no HTML 5</h2>
            <p>São suportados os seguintes atributos:</p>

            <article>
              <h3>src</h3>
              <p>
                Especifica uma URL absoluta ou relativa. Faz parte da sintaxe básica da tag &lt;iframe&gt;. Exemplos:
              </p>

              <div class="codigo">
                <code class="branco">&lt;</code><code class="rosa">iframe </code>
                <code class="verde">src</code><code class="branco">=</code><code class="amarelo">"../images/&shy;html-logo.png"</code><code class="branco">&gt;</code>
                <code class="branco">&lt;/</code><code class="rosa">iframe</code><code class="branco">&gt;</code>
                <code class="cinza">&lt;!-- URL relativa --&gt;</code>
                <br>
                <code class="branco">&lt;</code><code class="rosa">iframe </code>
                <code class="verde">src</code><code class="branco">=</code><code class="amarelo">"https://www.&shy;w3schools.com/&shy;TAGs/tag_iframe.&shy;asp"</code><code class="branco">&gt;</code>
                <code class="branco">&lt;/</code><code class="rosa">iframe</code><code class="branco">&gt;</code>
                <code class="cinza">&lt;!-- URL absoluta --&gt;</code>
              </div>
            </article>

            <article>
              <h3>srcdoc</h3>
              <p>
                É um atributo novo no HTML 5. Especifica um conteúdo HTML para ser exibido no frame. Se o navgador suportar esta tag e houver o atributo src, ele substituirá o conteúdo do mesmo. Do contrário, será exibido o conteúdo do atributo src. O site w3schools.com recomenda ser usado com o atributo sandbox. Exemplos:
              </p>

              <div class="codigo">
                <code class="branco">&lt;</code><code class="rosa">iframe </code>
                <code class="verde">srcdoc</code><code class="branco">=</code><code class="amarelo">"&lt;h1&gt;Hello, world!&lt;/h1&gt;"</code><code class="branco">&gt;</code>
                <code class="branco">&lt;/</code><code class="rosa">iframe</code><code class="branco">&gt;</code>
                <br>
                <code class="branco">&lt;</code><code class="rosa">iframe </code>
                <code class="verde">srcdoc</code><code class="branco">=</code>
                <code class="amarelo">"&lt;h1&gt;Hello, world!&lt;/h1&gt;"</code>
                <code class="verde">src</code><code class="branco">=</code><code class="amarelo">"../images/&shy;html-logo.png"</code><code class="branco">&gt;</code>
                <code class="branco">&lt;/</code><code class="rosa">iframe</code><code class="branco">&gt;</code>
              </div>

              <iframe class="iframes" srcdoc="
                <h1 style=&quot;text-align: center;&quot;>Hello, world!</h1>
                <h2 style=&quot;text-align: center;&quot;>Hello, world!</h2>
                <h3 style=&quot;text-align: center;&quot;>Hello, world!</h3>
                <h4 style=&quot;text-align: center;&quot;>Hello, world!</h4>
                <h5 style=&quot;text-align: center;&quot;>Hello, world!</h5>
                <h6 style=&quot;text-align: center;&quot;>Hello, world!</h6>
                <p style=&quot;text-align: center;&quot;>Hello, world!</p>">
                <p>Este navegador não suporta a tag &lt;iframe&gt;.</p>
              </iframe>
            </article>

            <article>
              <h3>name</h3>
              <p>
                Especifica o nome de um &lt;iframe&gt;. O valor do atributo nome pode ser utilizado no atributo target. Exemplo:
              </p>

              <div class="codigo">
                <code class="branco">&lt;</code><code class="rosa">iframe </code>
                <code class="verde">src</code><code class="branco">=</code><code class="amarelo">"../images/&shy;nature-mini.jpg"</code>
                <code class="verde">name</code><code class="branco">=</code><code class="amarelo">"iframe"</code><code class="branco">&gt;</code>
                <code class="branco">&lt;/</code><code class="rosa">iframe</code><code class="branco">&gt;</code>
                <br>
                <code class="branco">&lt;</code><code class="rosa">p</code><code class="branco">&gt;</code>
                <code class="branco">&lt;</code><code class="rosa">a </code>
                <code class="verde">href</code><code class="branco">=</code><code class="amarelo">"../images/&shy;nature-menor.jpg"</code>
                <code class="verde">target</code><code class="branco">=</code><code class="amarelo">"iframe"</code><code class="branco">&gt;</code>
                <code class="branco">Ampliar</code>
                <code class="branco">&lt;/</code><code class="rosa">a</code><code class="branco">&gt;</code>
                <code class="branco">&lt;/</code><code class="rosa">p</code><code class="branco">&gt;</code>
                <br>
                <code class="branco">&lt;</code><code class="rosa">p</code><code class="branco">&gt;</code>
                <code class="branco">&lt;</code><code class="rosa">a </code>
                <code class="verde">href</code><code class="branco">=</code><code class="amarelo">"../images/&shy;nature-mini.jpg"</code>
                <code class="verde">target</code><code class="branco">=</code><code class="amarelo">"iframe"</code><code class="branco">&gt;</code>
                <code class="branco">Reduzir</code>
                <code class="branco">&lt;/</code><code class="rosa">a</code><code class="branco">&gt;</code>
                <code class="branco">&lt;/</code><code class="rosa">p</code><code class="branco">&gt;</code>
              </div>

              <iframe class="iframes" src="page.html">
                <p>Este navegador não suporta a tag &lt;iframe&gt;.</p>
              </iframe>
            </article>

            <article>
              <h3>sandbox</h3>
              <p>
                Outro atributo novo no HTML 5. Especifica um conjunto extra de permissões para o conteúdo de um &lt;iframe&gt;, tais como bloqueio e desativação de:
              </p>
              <ul>
                <li>APIs;</li>
                <li>Formulários;</li>
                <li>Plugins;</li>
                <li>Recursos automáticos (áudio, vídeo ou foco);</li>
                <li>Redirecionamento; e</li>
                <li>Scripts.</li>
              </ul>
              <p>
                Os valores para o atributo são pré definidos, sendo eles:
              </p>

              <table>
                <tr>
                  <th>Valor</th>
                  <th>Definição</th>
                </tr>
                <tr>
                  <td>(Sem valor)</td>
                  <td>Aplica todas as restrições.</td>
                </tr>
                <tr>
                  <td>allow-forms</td>
                  <td>Reabilita envio de formulários.</td>
                </tr>
                <tr>
                  <td>allow-pointer-lock</td>
                  <td>Reabilita APIs.</td>
                </tr>
                <tr>
                  <td>allow-popups</td>
                  <td>Reabilita popups.</td>
                </tr>
                <tr>
                  <td>allow-same-origin</td>
                  <td>Permite que o conteúdo do iframe seja tratado como sendo da mesma origem.</td>
                </tr>
                <tr>
                  <td>allow-scripts</td>
                  <td>Reabilita scripts.</td>
                </tr>
                <tr>
                  <td>allow-top-navigation</td>
                  <td>Permite que o conteúdo do iframe navegue no contexto de navegação de nível superior do usuário.</td>
                </tr>
              </table>

              <p>
                Exemplos:
              </p>
              
              <div class="codigo">
                <code class="branco">&lt;</code><code class="rosa">iframe </code>
                <code class="verde">src</code><code class="branco">=</code><code class="amarelo">"calculadora-js.html" </code>
                <code class="verde">sandbox</code><code class="branco">&gt;</code>
                <code class="branco">&lt;/</code><code class="rosa">iframe</code><code class="branco">&gt;</code>
                <code class="cinza">&lt;!-- Aplica todas as restrições --&gt;</code>
                <br>
                <code class="branco">&lt;</code><code class="rosa">iframe </code>
                <code class="verde">src</code><code class="branco">=</code><code class="amarelo">"calculadora-js.html" </code>
                <code class="verde">sandbox</code><code class="branco">=</code><code class="amarelo">"allow-scripts"</code><code class="branco">&gt;</code>
                <code class="branco">&lt;/</code><code class="rosa">iframe</code><code class="branco">&gt;</code>
                <code class="cinza">&lt;!-- Reabilita scripts --&gt;</code>
              </div>

              <div class="linha-bloco">
                <p>sandbox</p>
                <iframe class="celular2" src="calculadora-js.html" sandbox>
                  <p>Este navegador não suporta a tag &lt;iframe&gt;.</p>
                </iframe>
              </div>
              <div class="linha-bloco">
                <p>sandbox="allow-scripts"</p>
                <iframe class="celular2" src="calculadora-js.html" sandbox="allow-scripts">
                  <p>Este navegador não suporta a tag &lt;iframe&gt;.</p>
                </iframe>
              </div>

            </article>

            <article>
              <h3>height</h3>
              <p>
                Especifica a dimensão vertical de um &lt;iframe&gt; em pixels. Exemplo:
              </p>
              <div class="codigo">
                <code class="branco">&lt;</code><code class="rosa">iframe </code>
                <code class="verde">src</code><code class="branco">=</code><code class="amarelo">"../index.&shy;html"</code>
                <code class="verde">height</code><code class="branco">=</code><code class="amarelo">"640"</code><code class="branco">&gt;</code>
                <code class="branco">&lt;/</code><code class="rosa">iframe</code><code class="branco">&gt;</code>
              </div>
            </article>
            <article>
              <h3>width</h3>
              <p>
                Especifica a dimensão horizontal de um &lt;iframe&gt; em pixels. Exemplo:
              </p>

              <div class="codigo">
                <code class="branco">&lt;</code><code class="rosa">iframe </code>
                <code class="verde">src</code><code class="branco">=</code><code class="amarelo">"../index.&shy;html"</code>
                <code class="verde">width</code><code class="branco">=</code><code class="amarelo">"360"</code><code class="branco">&gt;</code>
                <code class="branco">&lt;/</code><code class="rosa">iframe</code><code class="branco">&gt;</code>
              </div>

              <div class="pcenter">
                <iframe class="celular1" src="../../index.php">
                  <p>Este navegador não suporta a tag &lt;iframe&gt;.</p>
                </iframe>
              </div>
            </article>
          </article>
          
          <hr>
          
          <article>
            <h2>Atributos não suportados no HTML 5</h2>

            <p>
              Há vários atributos que não são mais suportados, porém ainda são utilizados. São eles:
            </p>

            <table>
              <tr>
                <th>Valor</th>
                <th>Definição</th>
              </tr>
              <tr>
                <td>align</td>
                <td>Especifica o alinhamento de um frame.</td>
              </tr>
              <tr>
                <td>frame&shy;border</td>
                <td>Especifica exibição ou não de uma borda em volta do frame.</td>
              </tr>
              <tr>
                <td>longdesc</td>
                <td>Especifica uma página que contém uma longa descrição do conteúdo de um frame.</td>
              </tr>
              <tr>
                <td>margin&shy;height</td>
                <td>Especifica as margens de cima e de baixo de um frame.</td>
              </tr>
              <tr>
                <td>margin&shy;width</td>
                <td>Especifica as margens da esquerda e da direita de um frame.</td>
              </tr>
              <tr>
                <td>scrolling</td>
                <td>Especifica exibição ou não de uma barra de rolagem.</td>
              </tr>
            </table>
          </article>
        </section>

        <hr>

        <footer>
          <div class="pcenter">
            <h2 class="pcenter rosa">Fontes:</h2>
            <a href="https://www.w3schools.com/">
              <figure>
                <img src="http://mostlywebsites.net/wp-content/uploads/w3schools-logo.jpg" alt="w3schools-logo.jpg" title="w3schools">
              </figure>
            </a>
            <a href="https://www.w3schools.com/TAGs/tag_iframe.asp">HTML &lt;iframe&gt; Tag</a>
            <a href="https://www.w3schools.com/html/html_iframe.asp">HTML Iframes</a>
            <p class="pcenter">#CSTADS - 2017</p>
          </div>
        </footer>
      </div>
    </section>
    
    <footer id="page-footer">
      <?php include '../../page-footer.html'; ?>
    </footer>
  </div>
</body>
</html>