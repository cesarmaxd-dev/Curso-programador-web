<?php
 
 
include("conexao.php");
 
$sql = "SELECT * FROM alunos";
 
$resultado = mysqli_query($conexao, $sql);
 
 
 
?>
 
<h1>lista de alunos</h1>
 
<table border="1">
    <tr>
        <th>ID</th>
        <th>nome</th>
        <th>idade</th>
        <th>Editar</th>
        <th>excluir</th>
    </tr>
 
    <?php
 
      while($linha=mysqli_fetch_assoc($resultado)){
?>
 
<tr>
    <td><?php echo $linha['id']; ?></td>
    <td><?php echo $linha['nome']; ?></td>
    <td><?php echo $linha['idade']; ?></td>
    <td>
        <a href="editar.php?id=<?php echo $linha['id']; ?>">
            Editar
        </a>
    </td>
    <td>
         <a href="excluir.php?id=<?php echo $linha['id']; ?>">
            excluir
        </a>
    </td>
</tr>
<?php
}
?>
</table>
<br>
<a href="index.php">
    novo cadastro
</a>
 