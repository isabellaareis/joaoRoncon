<?php
    namespace PHP\JoaoRoncon;
    require_once('Aluno.php');
    require_once('Professor.php');
    use PHP\JoaoRoncon\Aluno;
    use PHP\JoaoRoncon\Professor;

    //Criando o objeto
    $aluno1 = new Aluno("12345678910","João Carlos","","Ele/Dele","joaoCarlos@gmail.com","1199999-5656","09/02/2006","123");

    $professor1= new Porfessor("12345678910","João Carlos","","Ele/Dele","joaoCarlos@gmail.com","1199999-5656","09/02/2006","123");

    //Visualizar
    echo $aluno1->imprimir();
    echo "<br>".$professor1->imprimir();
?>