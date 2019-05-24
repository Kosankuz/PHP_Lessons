<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<div class="container">
    <div class="inputDiv">
        <input type="text" id="input" style="width: 300px;height: 300px">
         <h1 id="input1"></h1>
        <button id="button" onclick="buttonClick()">button</button>
    </div>
</div>
<script>
    function buttonClick() {

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("input").value = this.responseText;
                }
            };
            xmlhttp.open("POST", "second.php" , true);
            xmlhttp.send();

    }
</script>
</body>
</html>