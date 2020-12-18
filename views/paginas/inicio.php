<?php
    include PATH."/views/tema/header.php";
    include PATH."/views/tema/nav.php";
    include PATH."/views/tema/msg.php";
    

?>

    
    <main>
        <div class="wrap">
            <h1>Programação Orientada a Objetos com PHP</h1>
            <p>	Programação orientada a objetos é um estilo de programação que permite os desenvolvedores agruparem tarefas semelhantes em classes.</p>

            <h2>Classes</h2>
            <p>A definição de uma classe começa com a palavra chave class, seguida do nome da classe, seguido de um par de colchetes que englobam as definições de propriedades e métodos pertecentes à classe.</p>

            <h2>Objetos</h2>
            <p>Para criar uma instância de uma classe, a instrução new deve ser utilizada. Um objeto sempre será criado a não ser que a classe tenha um construtor definido que dispare uma exceção em caso de erro. Classes devem ser definidas antes de instanciadas</p>

            <h2>Propriedades e Métodos</h2>
            <p>Propriedades e métodos de classe vivem em "namespaces" separados, de forma que é possível ter uma propriedade e método com mesmos nomes. A referência a propriedades e métodos tem a mesma notação, e a decisão de se uma propriedade será acessada ou uma chamada a um método feita, depende somente do contexto, ou seja, se está tentando acessar uma variável ou chamar um método.</p>

            <h2>Herança</h2>
            <p> Uma classe pode herdar métodos e propriedades de outra classe usando a palavra-chave extends na declaração da classe. Não é possível herdar múltiplas classes; uma classe só pode herdar uma classe base.</p>


        </div> 

    </main>
    <?php
    include PATH."/views/tema/footer.php";