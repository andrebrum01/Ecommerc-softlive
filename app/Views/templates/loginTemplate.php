<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php $component("Head", array("title"=>$title,"style"=>[$style])) ?>

</head>
<?=$constants()?>

<body>
    <?php require_once ROOT."/app/Views/pages/{$file}.php"; ?>
</body>
</html>