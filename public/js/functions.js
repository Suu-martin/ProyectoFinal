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
          newPaginator  += `${(data.current_page == data.total/8) ? ""  :`
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
