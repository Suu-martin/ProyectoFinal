function answer(id) {
  var x = document.getElementById(id);
  if (x.style.display == "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}
function show() {
  var x = document.getElementById("menu");
  var y = document.getElementById("hamb");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}
function addToCart(e , id)
{
  var data = new FormData();
  data.append( "id", id );
  fetch('api/addItem', {
     method: 'POST',
     body: data
  })
  .then(function(response) {
     if(response.ok) {
         console.log(response.text());
     } else {
         console.log("Error en la llamada Ajax");
     }
  })
  .then(function(texto) {
     console.log(texto);
  })
}
