<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="crud/post.php" method="POST">
        <input type="text" name="fname">
        <button>submit</button>
    </form>

    <div class="karyawan-table">
        <table class="karyawan">
        </table>
    </div>

</body>

<script>
    var url = window.location.origin + "/crud/get.php"
    var table = document.querySelector("table.karyawan")

    fetch(url).then(response => response.json()).then(data =>{
        data.map(obj => {
            var node = document.createElement('tr');
            node.appendChild(document.createTextNode(obj.fname))
            table.appendChild(node)
        })
    }).catch(function() {
        console.error('Something happen!')
    })
</script>

</html>