// Selecionando o botão "Add to Cart"
const addToCartButton = document.getElementById("add-to-cart");

// Adicionando um evento de clique ao botão
addToCartButton.addEventListener("click", function() {
  alert("Produto adicionado ao carrinho.");
});

// Obtendo os dados do produto da API
fetch("https://api.myproduct.com/products/123")
  .then(response => response.json())
  .then(data => {
    // Atualizando a imagem, nome, descrição e preço do produto
    document.getElementById("product-image").src = data.image;
    document.getElementById("product-name").innerHTML = data.name;
    document.getElementById("product-description").innerHTML = data.description;
    document.getElementById("product-price").innerHTML = "$" + data.price.toFixed(2);
  })
  .catch(error => console.error(error));
