<?php header("Content-type: text/html; charset=utf-8");

$GetParam = filter_input_array(INPUT_POST,FILTER_DEFAULT);



$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];


$usuario = "From: " .$name;

$corpo = 'Contato - WalletBus 

          Nome: ' .$name.'
          E-mail: ' .$email.'
          Telefone: ' .$phone.'
          Mensagem: ' .$message.'';

if(mail("adryannoplay10@gmail.com", "Contato",$corpo)){
    echo "<script>alert('Mensagem enviada com sucesso!');</script>";
    header("Location: index.html");
    
    
}else{
    echo"<script>alert('Erro ao enviar, tente novamente');</script>";
}
?>