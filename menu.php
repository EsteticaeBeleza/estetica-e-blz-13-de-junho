<ul>
<?php 
//Menu só aparece para os administradores.
if($_SESSION['acesso']=="Admin"){
    echo "<li class='dropdown'><a href='javascript:void(0)' class='dropbtn'>Administração do Site</a>";
	echo "<div class='dropdown-content'><a href='#'>Link 1</a><a href='usuarioscontrolar.php'>Controlar Usuários</a><a href='usuariocadastrartela.php'>Cadastrar Usuário</a></div></li>";
}  
?>
  <li class="dropdown" style="float:right">
    <a href="javascript:void(0)" class="dropbtn">Login/Cadastro<?php echo $logado;?></a>
    <div class="dropdown-content"
      <a href="login.php">Cadastro</a>
      <a href="deslogar.php">Deslogar</a>
    </div>
  </li>
</ul>