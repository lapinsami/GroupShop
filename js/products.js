const searchParams = new URLSearchParams(window.location.search);
let search = "";
let product = "";

if (!searchParams.has("query")) {
    search = "";
} else {
    search = searchParams.get("query")
}

if (!searchParams.has("product")) {
    product = "";
} else {
    product = searchParams.get("product")
}

class Product {
    constructor(name, description, price, image_url, variations) {
        this.product_name = name;
        this.description = description;
        this.price = price;
        this.image_url = image_url;
        this.variations = variations;
    }
}

let products = [];
products.push(new Product("spork", "SPORK, din bästa vän i naturen!", 12.90, "img/spork-color.jpg", ["Blå", "Grön", "Rosa", "Gul"]))
products.push(new Product("fork", "FORK (it's just a fork)", 7.90, "img/fork.jpg", ["Large", "Medium", "Small"]))
products.push(new Product("knife", "KNIFE, for slicin'", 6.90, "img/knife.jpg", ["Sharp", "Dull", "Rusty"]))
products.push(new Product("spoon", "SPOON. Eat soup.", 7.90, "img/spoon.jpg", ["Tea-sized", "Normal"]))