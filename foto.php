if(isset($_POST['btnEnviar'])){
    var_dump($FILES['foto']);

    move_uploaded_file($_FILES['foto']['tmp_name'], 'dados/'.$_FILES['foto']['name']);
}