<?php
include '../layout/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function hello(){
        let obj = document.getElementById("nurul");
        obj.innerHTML = "Universitas Nurul Fikri"
        obj.style.background = "yellow";

        }
    </script>

    
</head>
<body>
    <span id="nurul">Nurul Fikri</span><br>
    <button onclick ="hello()">Hello</button>
</body>
</html>
<?php
include'../layout/footer.php';
?>