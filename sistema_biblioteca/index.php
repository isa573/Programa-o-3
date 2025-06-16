<?php
require_once 'Livro.php';
require_once 'Leitor.php';
require_once 'Biblioteca.php';

$bib = new Biblioteca("Biblioteca Comunitária");

// Criando livros
$livro1 = new Livro("O Alquimista", "Paulo Coelho", 1988);
$livro2 = new Livro("Dom Casmurro", "Machado de Assis", 1899);
$livro3 = new Livro("1984", "George Orwell", 1949);

// Criando leitores
$leitor1 = new Leitor("Ana Silva", "ana@email.com", "11987654321");
$leitor2 = new Leitor("Carlos Souza", "carlos@email.com", "11912345678");

// Adicionando ao sistema
$bib->adicionarLivro($livro1);
$bib->adicionarLivro($livro2);
$bib->adicionarLivro($livro3);

$bib->adicionarLeitor($leitor1);
$bib->adicionarLeitor($leitor2);

// Simulando empréstimo
$livro1->emprestar($leitor1->getNome());
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title><?php echo $bib->nomeBiblioteca; ?></title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div class="container">
        <h1><?php echo $bib->nomeBiblioteca; ?></h1>

        <h2>📚 Livros</h2>
        <?php foreach ([$livro1, $livro2, $livro3] as $livro): ?>
            <div class="card">
                <h3><?php echo $livro->getTitulo(); ?></h3>
                <p><span class="label">Autor:</span> <?php echo $livro->getAutor(); ?></p>
                <p><span class="label">Ano:</span> <?php echo $livro->getAnoPublicacao(); ?></p>
                <p><span class="label">Disponibilidade:</span> <?php echo $livro->estaDisponivel(); ?></p>
                <p><span class="label">Leitor Atual:</span> <?php echo $livro->quemPegou(); ?></p>
            </div>
        <?php endforeach; ?>

        <h2>👤 Leitores</h2>
        <?php foreach ([$leitor1, $leitor2] as $leitor): ?>
            <div class="card">
                <h3><?php echo $leitor->getNome(); ?></h3>
                <p><span class="label">Email:</span> <?php echo $leitor->getEmail(); ?></p>
                <p><span class="label">Telefone:</span> <?php echo $leitor->getTelefone(); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>