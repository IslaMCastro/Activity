<!DOCTYPE html>
<!-- Tag principal -->
<!-- internacionalização "ptBR para portugues brasil -->
<html lang="eng"> 
    <!-- informações da tela -->
<head>
<!--  charset é usado para informar o formato da letra -->
    <meta charset="UTF-8">
    <!-- para dispositivo móvel -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Projeto PHP </title>
    <!-- carreha o js e css -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Cabeçalho -->
    <header>
    <!-- menus -->
    <!-- barra de navegação -->
    <!-- sempre que usa-se # é que vai procurar o ID -->
        <nav>
            <a href="#">Home</a>
            <a href="#quemsomos">Quem Somos</a>
            <a href="#produtos">Produtos</a>
            <a href="#contato">Contato</a>
            <a href="http://www.google.com/" target="_blank">Google</a>
        </nav>
    </header>
    <!-- Corpo principal -->

    <main>

        <section id="quemsomos">
            <h1>Quem somos!</h1>
            <!-- utilizar para textos -->
            <p>Digite aqui quem somos!</p>
            <!-- p é para paragrafos -->
            <span >Digite aqui o texto que voce quer dar destaque.</span>
            <!-- utiliza-se as tags para facilitar no uso do css -->
        </section>

        <section id="produtos">
            <h2>Produtos Vendidos!</h2>
            <!-- usa-se para listas com marcadores -->
            <ul>
                <li>Maça</li>
                <li>Uva</li>
                <li>Pera</li>              
                <li>Laranja</li>           
            </ul>
            <!-- criar lista ordenada por numeral 'ol>li*5' seria uma lista com 5 itens -->
            <ol>
                <li>File Lombo</li>
                <li>Costela</li>
                <li>Granito</li>
                <li>Fraldinha</li>
                <li>Maminha</li>
            </ol>            
         </section>

        <section id="contato">
            <h3>Contato</h3>
            <div>
                <!-- form é usado para enviar algo para o servidor (get, post, put, delete) -->
                <form>
                    
                    <div>                        
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" name="nome">
                    </div>

                    <div>
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email">                    
                    </div>

                    <div>
                        <label for="idade">Idade</label>
                        <input type="number" id="idade" name="idade">
                    </div>

                    <div>
                        <input type="submit" value="Enviar">
                        <input type="reset" value="Limpar">
                    </div>

                </form>
            </div>
        </section>
    
    </main>
    
    <footer>    
<!-- Rodape -->
    </footer>

    <!-- Carregar java script -->
    <script> 


    </script> 

</body>
</html>

