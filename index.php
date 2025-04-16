<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src=" https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js "></script>
  <link href=" https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css " rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <button id="button">Clique moi !</button>
  </div>
<script>
let button = document.getElementById('button');

button.addEventListener('click',() =>{

Swal.fire({
  title: "Aĩe, tu m'as cliqué dessus !",
  imageUrl: "ouch-7169962_640.png",
  imageWidth: 400,
  imageHeight: 200,
  imageAlt: "Custom image"
});
} )
</script>

</body>
</html>