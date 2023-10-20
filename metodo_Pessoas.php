<!-- Exemplo de métodos
Veremos também na pratica os metódos de inicialização (construtor) e finalização (destrutor).
-Criar métodos para suas classes
-Entender melhor a criação dos objetos 
-Entender melhor o método de criação e destrução.  -->
<?php
    // Incluindo a classe que foi criada na pasta "Classes"
    include ("class_do_Metodo_Pessoas.php");

    // Instanciando um novo objeto (p1)
    $p1 = new Pessoa();

    // Atribuindo valores aos atributos 
    $p1->nome           ="Kauã Lira";
    $p1->altura         =1.63;
    $p1->nascimento     ="2007-01-05";
    $p1->hobbie         ="Tocar guitarra";

    // Imprimindo valores inseridos no objeto (p1) usando echo 
    echo "Nome: ".$p1->nome."<br/>
        Altura: ".$p1->altura."<br/>
        Nascimento: ".$p1->nascimento."<br/>
        Hobbie: ".$p1->hobbie."<br/><br/><hr><br/>";

    // Agora vamos imprimir os 2 objetos (p1 e p2) usando o método 
    // Para isso é preciso criar o (p2) que ainda não foi criado 

    // Instanciando um novo objeto (p2) 
    $p2 = new Pessoa();

    // Atribuindo valores aos atributos 
    $p2->nome           ="Ana Clara Ferreira";
    $p2->altura         =1.55;
    $p2->nascimento     ="21-03-2007";
    $p2->hobbie         ="Pintar";

    // Instanciando um novo objeto (p3) 
    $p3 = new Pessoa();

    // Atribuindo valores aos atributos 
    $p3->nome           ="Ana Clara Maciel";
    $p3->altura         =1.50;
    $p3->nascimento     ="19-01-2007";
    $p3->hobbie         ="Ler e Ouvir Música";

    // Instanciando um novo objeto (p4) 
    $p4 = new Pessoa();

    // Atribuindo valores aos atributos 
    $p4->nome           ="Ana Zinatto";
    $p4->altura         =1.60;
    $p4->nascimento     ="03-11-2006";
    $p4->hobbie         ="Treinar e Ouvir Música";

    // Instanciando um novo objeto (p5) 
    $p5 = new Pessoa();

    // Atribuindo valores aos atributos 
    $p5->nome           ="Beatriz Baccaro";
    $p5->altura         =1.60;
    $p5->nascimento     ="02-08-2006";
    $p5->hobbie         ="Esporte";

    // Instanciando um novo objeto (p6) 
    $p6 = new Pessoa();

    // Atribuindo valores aos atributos 
    $p6->nome           ="Beatriz Mayumi";
    $p6->altura         =1.65;
    $p6->nascimento     ="03-03-2007";
    $p6->hobbie         ="Ler livros, Jogar Video Games e Ouvir Musica";
    
    // Instanciando um novo objeto (p7) 
    $p7 = new Pessoa();

    // Atribuindo valores aos atributos 
    $p7->nome           ="Bruno Alvez";
    $p7->altura         =1.78;
    $p7->nascimento     ="28-05-2007";
    $p7->hobbie         ="Tocar instrumentos";

    // Instanciando um novo objeto (p8) 
    $p8 = new Pessoa();

    // Atribuindo valores aos atributos 
    $p8->nome           ="Camilly Vitória de Oliveira";
    $p8->altura         =1.60;
    $p8->nascimento     ="22-01-2007";
    $p8->hobbie         ="Ouvir Musica e ir para a Aula de Jazz";

    // Instanciando um novo objeto (p9) 
    $p9 = new Pessoa();

    // Atribuindo valores aos atributos 
    $p9->nome           ="Felipe Wilbert";
    $p9->altura         =1.78;
    $p9->nascimento     ="06-12-2006";
    $p9->hobbie         ="Academia";

    // Instanciando um novo objeto (p10) 
    $p10 = new Pessoa();

    // Atribuindo valores aos atributos 
    $p10->nome           ="Gabriel Alves Santos";
    $p10->altura         =1.84;
    $p10->nascimento     ="03-08-2006";
    $p10->hobbie         ="Jogar Video Games e Praticar Esportes";

    // Instanciando um novo objeto (p11) 
    $p11 = new Pessoa();

    // Atribuindo valores aos atributos 
    $p11->nome           ="Gabriel Diaz";
    $p11->altura         =1.74;
    $p11->nascimento     ="21-03-2007";
    $p11->hobbie         ="Jogar";

    // Instanciando um novo objeto (p12) 
    $p12 = new Pessoa();

    // Atribuindo valores aos atributos 
    $p12->nome           ="Gabriel Credendio";
    $p12->altura         =1.70;
    $p12->nascimento     ="28-07-2006";
    $p12->hobbie         ="Jogar Video Game";

    // Instanciando um novo objeto (p13) 
    $p13 = new Pessoa();

    // Atribuindo valores aos atributos 
    $p13->nome           ="Giovana Lupo";
    $p13->altura         =1.62;
    $p13->nascimento     ="14-05-2007";
    $p13->hobbie         ="Pintar";

    // Instanciando um novo objeto (p14) 
    $p14 = new Pessoa();

    // Atribuindo valores aos atributos 
    $p14->nome           ="Guilherme Carvalho";
    $p14->altura         =1.75;
    $p14->nascimento     ="09-06-2007";
    $p14->hobbie         ="Jogar Video Games";

    // Instanciando um novo objeto (p15) 
    $p15 = new Pessoa();

    // Atribuindo valores aos atributos 
    $p15->nome           ="Gustavo Otaviano";
    $p15->altura         =1.85;
    $p15->nascimento     ="04-03-2007";
    $p15->hobbie         ="Esportes";

    // Instanciando um novo objeto (p16) 
    $p16 = new Pessoa();

    // Atribuindo valores aos atributos 
    $p16->nome           ="Henrique Nagata";
    $p16->altura         =1.58;
    $p16->nascimento     ="25-10-2006";
    $p16->hobbie         ="Andar de Bicicleta";

    // Instanciando um novo objeto (p17) 
    $p17 = new Pessoa();

    // Atribuindo valores aos atributos 
    $p17->nome           ="Henrique Tavares";
    $p17->altura         =1.63;
    $p17->nascimento     ="27-07-2006";
    $p17->hobbie         ="Jogar e Ouvir Musica";

    // Instanciando um novo objeto (p18) 
    $p18 = new Pessoa();

    // Atribuindo valores aos atributos 
    $p18->nome           ="José Luiz Oliveira Costa";
    $p18->altura         =1.71;
    $p18->nascimento     ="15-09-2006";
    $p18->hobbie         ="Assistir e Criticar Filmes";

    // Instanciando um novo objeto (p19) 
    $p19 = new Pessoa();

    // Atribuindo valores aos atributos 
    $p19->nome           ="Julião Pombero Mogi";
    $p19->altura         =1.70;
    $p19->nascimento     ="08-11-1897";
    $p19->hobbie         ="Jogar e Ouvir Musica";

    // Instanciando um novo objeto (p1) 
    $p1 = new Pessoa();

    // Atribuindo valores aos atributos 
    $p1->nome           ="Kauã Lira";
    $p1->altura         =1.63;
    $p1->nascimento     ="05-01-2007";
    $p1->hobbie         ="Tocar Guitarra";

    // Instanciando um novo objeto (p20) 
    $p20 = new Pessoa();

    // Atribuindo valores aos atributos 
    $p20->nome           ="Kauã Silva Vieira";
    $p20->altura         =1.68;
    $p20->nascimento     ="02-09-2006";
    $p20->hobbie         ="Jogar Video Game";

    // Instanciando um novo objeto (p21) 
    $p21 = new Pessoa();

    // Atribuindo valores aos atributos 
    $p21->nome           ="Laura Perez Pivato";
    $p21->altura         =1.70;
    $p21->nascimento     ="03-08-2006";
    $p21->hobbie         ="Ler";

    // Instanciando um novo objeto (p22) 
    $p22 = new Pessoa();

    // Atribuindo valores aos atributos 
    $p22->nome           ="Leticia Gabrielle";
    $p22->altura         =1.65;
    $p22->nascimento     ="30-09-2006";
    $p22->hobbie         ="Ouvir Musica e Assistir Série";

    // Instanciando um novo objeto (p23) 
    $p23 = new Pessoa();

    // Atribuindo valores aos atributos 
    $p23->nome           ="Luis Gustavo Magela";
    $p23->altura         =1.77;
    $p23->nascimento     ="06-03-2007";
    $p23->hobbie         ="Dormir e Jogar Video Game";

    // Instanciando um novo objeto (p24) 
    $p24 = new Pessoa();

    // Atribuindo valores aos atributos 
    $p24->nome           ="Maria Eduarda";
    $p24->altura         =1.65;
    $p24->nascimento     ="02-04-2007";
    $p24->hobbie         ="Ver Serie e Jogar Vôlei";

    // Instanciando um novo objeto (p25) 
    $p25 = new Pessoa();

    // Atribuindo valores aos atributos 
    $p25->nome           ="Miguel Romero";
    $p25->altura         =1.70;
    $p25->nascimento     ="17-04-2007";
    $p25->hobbie         ="Jogar Futebol";

    // Instanciando um novo objeto (p26) 
    $p26 = new Pessoa();

    // Atribuindo valores aos atributos 
    $p26->nome           ="Natally Reis";
    $p26->altura         =1.60;
    $p26->nascimento     ="07-01-2007";
    $p26->hobbie         ="Ouvir Música";

    // Instanciando um novo objeto (p27) 
    $p27 = new Pessoa();

    // Atribuindo valores aos atributos 
    $p27->nome           ="Pedro Araújo";
    $p27->altura         =1.68;
    $p27->nascimento     ="24-09-2006";
    $p27->hobbie         ="Jogar Videogame";

    // Instanciando um novo objeto (p28) 
    $p28 = new Pessoa();

    // Atribuindo valores aos atributos 
    $p28->nome           ="Pedro Grechi";
    $p28->altura         =1.68;
    $p28->nascimento     ="23-03-2007";
    $p28->hobbie         ="Jogar e Desenhar";

    // Instanciando um novo objeto (p30) 
    $p30 = new Pessoa();

    // Atribuindo valores aos atributos 
    $p30->nome           ="Raí Franca";
    $p30->altura         =1.82;
    $p30->nascimento     ="12-09-2006";
    $p30->hobbie         ="Esporte, Ouvir Musica e Jogos Eletrônicos";

    // Instanciando um novo objeto (p31) 
    $p31 = new Pessoa();

    // Atribuindo valores aos atributos 
    $p31->nome           ="Ryan Silveira";
    $p31->altura         =1.72;
    $p31->nascimento     ="02-09-2006";
    $p31->hobbie         ="Jogar Video Game";

    // Instanciando um novo objeto (p32) 
    $p32 = new Pessoa();

    // Atribuindo valores aos atributos 
    $p32->nome           ="Samuel Américo";
    $p32->altura         =1.85;
    $p32->nascimento     ="26-01-2007";
    $p32->hobbie         ="Tocar Piano";

    // Instanciando um novo objeto (p33) 
    $p33 = new Pessoa();

    // Atribuindo valores aos atributos 
    $p33->nome           ="Thell Zardi";
    $p33->altura         =1.65;
    $p33->nascimento     ="31-10-2000";
    $p33->hobbie         ="Jogar";

    // Imprimindo valores inseridos no objeto (p1 e p2) usando método 
    // Observe que você executa o mesmo método MostrarPessoa() para exibir os dados 
    echo "Abaixo um exemplo pratico do uso de metodos: <br/><br/>";
    $p2->MostrarPessoa();
    echo "<br/><br/>";
    $p3->MostrarPessoa();
    echo "<br/><br/>";
    $p4->MostrarPessoa();
    echo "<br/><br/>";
    $p5->MostrarPessoa();
    echo "<br/><br/>";
    $p6->MostrarPessoa();
    echo "<br/><br/>";
    $p7->MostrarPessoa();
    echo "<br/><br/>";
    $p8->MostrarPessoa();
    echo "<br/><br/>";
    $p9->MostrarPessoa();
    echo "<br/><br/>";
    $p10->MostrarPessoa();
    echo "<br/><br/>";
    $p11->MostrarPessoa();
    echo "<br/><br/>";
    $p12->MostrarPessoa();
    echo "<br/><br/>";
    $p13->MostrarPessoa();
    echo "<br/><br/>";
    $p14->MostrarPessoa();
    echo "<br/><br/>";
    $p15->MostrarPessoa();
    echo "<br/><br/>";
    $p16->MostrarPessoa();
    echo "<br/><br/>";
    $p17->MostrarPessoa();
    echo "<br/><br/>";
    $p18->MostrarPessoa();
    echo "<br/><br/>";
    $p19->MostrarPessoa();
    echo "<br/><br/>";
    $p1->MostrarPessoa();
    echo "<br/><br/>";
    $p20->MostrarPessoa();
    echo "<br/><br/>";
    $p21->MostrarPessoa();
    echo "<br/><br/>";
    $p22->MostrarPessoa();
    echo "<br/><br/>";
    $p23->MostrarPessoa();
    echo "<br/><br/>";
    $p24->MostrarPessoa();
    echo "<br/><br/>";
    $p25->MostrarPessoa();
    echo "<br/><br/>";
    $p26->MostrarPessoa();
    echo "<br/><br/>";
    $p27->MostrarPessoa();
    echo "<br/><br/>";
    $p28->MostrarPessoa();
    echo "<br/><br/>";
    $p30->MostrarPessoa();
    echo "<br/><br/>";
    $p31->MostrarPessoa();
    echo "<br/><br/>";
    $p32->MostrarPessoa();
    echo "<br/><br/>";
    $p33
    ->MostrarPessoa();
    echo "<br/><br/>";
?>










    







