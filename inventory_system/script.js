document.getElementById("productForm")
.addEventListener("submit", function(e){

    let errors = [];

    let product =
    document.getElementById("product_name").value.trim();

    let price =
    document.getElementById("price").value;

    let quantity =
    document.getElementById("quantity").value;

    if(product.length < 3){
        errors.push(
            "Product Name must be at least 3 characters."
        );
    }

    if(price <= 0){
        errors.push(
            "Price must be greater than 0."
        );
    }

    if(quantity < 1){
        errors.push(
            "Quantity must be at least 1."
        );
    }

    let errorBox =
    document.getElementById("errorBox");

    errorBox.innerHTML = "";

    if(errors.length > 0){

        e.preventDefault();

        errors.forEach(function(error){

            errorBox.innerHTML +=
            "<p>" + error + "</p>";

        });

    }

});