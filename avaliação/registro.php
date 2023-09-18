<?php
    if(isset($_POST['Nome']) and isset($_POST['Ra']) and isset($_POST['Placa']))
    {
        $saving_data = fopen("infoalunos.txt", "a");
        fwrite($saving_data, "\n" . $_POST['Nome'] . "|" . $_POST['Ra'] . "|" . $_POST['Placa']);
        fwrite($saving_data, "\n");
        fflush($saving_data);
        fclose($saving_data);

        header("location: index.php");
        exit;
    }else
    {
        echo "Erro, tente novamente. <br>";
        header("location: index.php");
    }
?>

