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
  fetch('/api/addItem', {
     method: 'POST',
     body: data
  }).then(data => (data.text()))
  .then(data => {
    if(data == 1)
    {
      if(document.getElementById('cant-cart-'+id)){
        let item = document.getElementById('cant-cart-'+id);
        item.value = parseInt(item.value) + 1;
      } else {
          e.style= "background-color: green";
      }
    } else if(data == -1)
    {
      e.style= "background-color: gray";
    }
  })
}
function remFromCart(e , id) {
  var data = new FormData();
  data.append( "id", id );
  fetch('api/remItem', {
     method: 'POST',
     body: data
  }).then(data => (data.text()))
  .then(data => {
    if(data == 1)
    {
      if(document.getElementById('cant-cart-'+id)){
        let item = document.getElementById('cant-cart-'+id);
        item.value = parseInt(item.value) - 1;
      }
    } else if(data == -1)
    {
      e.style= "background-color: gray";
    }
  })
}
document.addEventListener('DOMContentLoaded', ()=> {
  if(document.getElementById('register-form')){
    let form = document.getElementById('register-form');
    let name = document.getElementById('name');
    var itemName = false;
    let email = document.getElementById('email');
    var itemEmail = false;
    let password = document.getElementById('password');
    var itemPassword = false;
    let confirmPassword = document.getElementById('password-confirm');
    var itemConfirmPassword = false;
    var regexEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    name.addEventListener('keyup', (e)=>{
      if(name.value.length>3){
        name.style = "border: 1px solid green";
        itemName = true;
      } else {
        name.style = "border: 1px solid false";
        itemName = false;
      }
    })
    email.addEventListener('keyup', () => {
      if(regexEmail.test(email.value)){
        email.style = "border: 1px solid green";
        itemEmail = true;
      } else {
        email.style = "border: 1px solid red";
        itemEmail = false;
      }
    })
    password.addEventListener('keyup',()=>{
      confirmPassword.style = "border: 1px solid red";
      if(password.value.length>6){
        password.style = "border: 1px solid green";
        if(confirmPassword.value == password.value){
          itemConfirmPassword = true;
          confirmPassword.style = "border: 1px solid green";
        } else {
          itemConfirmPassword = false;
          confirmPassword.style = "border: 1px solid red";
        }
        itemPassword = true;
      } else {
        password.style = "border: 1px solid red";
        confirmPassword.style = "border: 1px solid red";
        itemPassword = false;
      }
    })
    confirmPassword.addEventListener('keyup',()=>{
      if(confirmPassword.value == password.value && password.value.length >6){
        confirmPassword.style = "border: 1px solid green";
        itemConfirmPassword = true;
      } else {
        confirmPassword.style = "border: 1px solid red";
        itemConfirmPassword = false;
      }
    })
    var itsOk = false;
    form.addEventListener('submit', (e) =>{
      e.preventDefault();
      console.log(itemName,itemEmail,itemPassword, itemConfirmPassword);
      if(itemName && itemEmail && itemPassword && itemConfirmPassword){
        form.submit();
      }
    })
  }
  if(document.getElementById('main-search')){
    let article = document.getElementById('articles');
    let paginator = document.getElementById('paginator');
    let searcher = document.getElementById('main-search');
    let newPaginator = "";
    let loader = document.getElementById('loading');
    searcher.addEventListener('keyup', (e) =>{
      window.history.replaceState(`/?s=`, "", `/?s=${searcher.value.toLowerCase()}`);
      if(searcher.value.length > -1)
      {
        article.innerHTML = "";
        loader.style = "display:block";
        var once = true;
        if(document.getElementById('articles')) {
          let article = document.getElementById('articles');
          fetch('/api/getProducts/'+ searcher.value.toLowerCase()).then(data => (data.json()))
          .then(data => {
            article.innerHTML = "";
            loader.style = "display:none";
            for (item of data.data) {
                article.innerHTML += `<article class="articulo" style=>
                  <a href="/product/${ item.id }">
                  <div class="articulo-imagen">
                    <img src="/storage/products/${ item.image}" alt="" class="img-article">
                    <div class="cart ${ (!item.stock > 0 ) ? "disabled" : "" }" ${ (item.stock > 0 ) ? "onclick=addToCart(this," + item.id + ")" : "" } ">
                       <a><i class="material-icons">add_shopping_cart</i></a>
                    </div>
                  </div>
                  <div class="article-footer">
                    <h4>${ item.name }</h4>
                    <h4>${ "$"+ item.price }</h4>
                  </div>
                </a>
                </article>`;
            }
          newPaginator =`<ul class="pagination-s" role="navigation">`;
          for (let i = 1; i <= Math.ceil(data.total/8); i++) {
            newPaginator  += `<li class="page-item ${(i == data.current_page) ? "active" : ""}">
            ${(i == data.current_page) ? `<span class="page-link">${i}</span>` : `<a class="page-link" href="http://localhost?s=${ searcher.value.toLowerCase() }&amp;page=${ i }">${i}</a>`}</li>`;
          }
          newPaginator  += `${(data.current_page == Math.ceil(data.total/8)) ? ""  :`
            <li class="page-item">
              <a class="page-link" href="http://localhost?s=${ searcher.value.toLowerCase() }&amp;page=${ data.current_page + 1 }" rel="next" aria-label="Next »">›</a>
          </li>
            ` }
          </ul>`;
          if((data.total/8) == 1){
            newPaginator = "";
          }
          paginator.innerHTML = newPaginator ;
          })
        }
      }
    })
  }
});
