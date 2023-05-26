<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Termo de Responsabilidade - JUCEMAT</title>
    <link rel="stylesheet" href="./css/screen.css" media="screen">
    <link rel="stylesheet" href="./css/print.css" media="print">
</head>

<body>  
    <main>
        <header>
            <h1>TERMO DE COMPROMISSO E RESPONSABILIDADE</h1>
        </header>

        <article>
            
            <?php 
                require_once "../../includes/banco.php";
                require_once "../../includes/dados.php";
            ?>

            <section>
                <p>
                    <?php 
                        echo "
                            Eu, $reg->nome  $reg->sobrenome , portador do documento de identidade de nº. $reg->rg  $reg->orgExp_rg/$reg->uf, CPF Nº  $reg->cpf, Condomínio Edifício American Business Center - Av. historiador Rubens de Mendonça, 2254 - Bosque da Saúde. Cuiabá - MT, 78050-000, lotado na <span style='background-color: red'>'NOME DO LOCAL DE TRABALHO'</span>, matrícula de nº. [ --- MATRICULA ---], e-mail institucional  $reg->email, declaro estar ciente para manter sigilo quanto aos dados cadastrais existentes no módulo de Integração, bem como às disposições constantes no Termo de Cooperação de nº. 097/2019 firmado entre JUCEMAT e Defensoria Pública do Estado de Mato Grosso.
                         "
                    ?>
                    
                </p>
            </section>

            <section>
                <h3>Comprometo-me a:</h3>

                <ol type="a">
                    <li>
                        <p>
                            Não revelar fora do âmbito profissional fato ou informação de qualquer natureza de que tenha conhecimento por força de minhas atribuições.
                        </p>
                    </li> 

                    <li>
                        <p>
                            Manter o necessário cuidado quando da exibição de dados em tela, impressos ou gravados em meios eletrônicos, a fim de evitar que deles venham a tomar ciência pessoas não autorizadas.
                        </p>
                    </li>

                    <li>
                        <p>
                            Responder, em todas as instâncias, pelas consequências das ações ou omissões de minha parte que possam colocar em risco ou comprometer a exclusividade do conhecimento de minha senha ou a utilização dos privilégios a que tenho acesso.
                        </p>
                    </li>

                    <li>
                        <p>
                            Informar ao cadastrador do sistema qualquer modificação na minha relação funcional estatutária ou contratual com o órgão/empresa a que estou vinculado.
                        </p>
                    </li>
                </ol>
                
                <p>
                    Declaro também que me comprometo a cumprir e fazer cumprir o estabelecido na legislação e no Termo de Cooperação existente, que regulamenta o acesso ao sistema Integrador, e, ainda, que quaisquer serviços técnicos de minha responsabilidade não sejam executados por indivíduos ou empresas que não possuam habilitação legal.
                </p>

            </section>
            
            <p class="date">Cuiabá,
                    <?php header('Content-type: text/html; charset=utf-8');
                        setlocale( LC_ALL, 'pt_BR.utf-8', 'pt_BR', 'Portuguese_Brazil');
                        date_default_timezone_set('Europe/Lisbon');
                    echo strftime('%d de %B de %Y', strtotime('today'))
                ?>
            
            </p>

            <div class="ass"> 
                <hr>
                <p>ASSINATURA DO SOLICITANTE</p>
            </div>

            <div class="ass">
                <hr>
                <p>COORD. DA UNIDADE DE INTELIGÊNCIA E SEGURANÇA INSTITUCIONAL</p>
            </div>
            
        </article>
        
    </main>


    <?php $banco->close();?>
</body>
</html>