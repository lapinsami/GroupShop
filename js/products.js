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
    constructor(name, description, price, image_url) {
        this.product_name = name;
        this.description = description;
        this.price = price;
        this.image_url = image_url;
    }
}

let products = [];
products.push(new Product("spork", "A versatile 2-in-1 utensil that combines the functionality of a spoon and fork. Crafted from durable materials, it’s perfect for camping, picnics, travel, or everyday meals. Lightweight and easy to clean, the spork saves space and simplifies your dining experience.", "12.90", "img/spork-color.jpg"))
products.push(new Product("fork", "A high-quality fork designed for everyday use, featuring a comfortable grip and polished tines for smooth handling. Whether you’re enjoying a hearty meal or a delicate dish, this fork is a reliable choice for your tableware collection.", "7.90", "img/fork.jpg"))
products.push(new Product("knife", "A sharp and sturdy knife designed for precision cutting, whether you're slicing through meats, vegetables, or bread. With an ergonomic handle for a secure grip, this knife combines practicality and durability, making it an indispensable kitchen tool.", "6.90", "img/knife.jpg"))
products.push(new Product("spoon", "This durable and elegant spoon is perfect for everything from soups and stews to desserts and cereal. Its smooth edges and ergonomic design make it both practical and stylish, an essential addition to any kitchen or dining set.", "7.90", "img/spoon.jpg"))
products.push(new Product("bamboo-set", "An eco-friendly set of bamboo utensils that includes forks, spoons, and knives. Perfect for travel, camping, or everyday use, this set is lightweight, reusable, and sustainably crafted. Comes with a convenient carrying pouch to keep your utensils organized and ready to go wherever you are.", "29.90", "img/bamboo-set.png"))
products.push(new Product("pot", "A lightweight and durable camping pot designed for outdoor cooking adventures. Made from high-quality materials, it heats evenly and is easy to clean, making it ideal for preparing meals on the trail or at the campsite. Compact and portable, it’s a must-have for any outdoor enthusiast.", "231.90", "img/pot.png"))