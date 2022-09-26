<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="stylesheet" href="<?= $static("pages/Admin/modal@css") ?>">
    <?php $component("Head", array("title"=>$title,"style"=>[$style,$styleComponent])) ?>
</head>
<?=$constants()?>
<script>
    function getRoute(name){
        return routes.server.baseURL + routes.server[name];
    }
</script>
<body>
    <div class="container">
        <?php $component("SideBarAdmin/index") ?>
        <?php require_once ROOT."/app/Views/pages/{$file}.php"; ?>
    </div>
</body>
</html>
