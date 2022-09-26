<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php $component("Head", array("title"=>$title,"style"=>[$style,$styleComponent,$styleComponentNavbar])) ?>

</head>
<body>
    <?php $component("NavBar/NavBar", compact("ids","user")) ?>

    <?php require_once ROOT."/app/Views/pages/{$file}.php"; ?>
</body>
</html>