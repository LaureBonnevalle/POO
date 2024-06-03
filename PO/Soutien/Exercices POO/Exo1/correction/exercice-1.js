import { Pizza } from "./pizza.js";

window.addEventListener('DOMContentLoaded', () => {

    let veggie = new Pizza("La Veggie", "tomate", "fromage", "légumes");
    let meattie = new Pizza("La Meattie", "tomate", "fromage", "viande");
    let fishie = new Pizza("La Fishie", "tomate", "fromage", "poisson");

    console.log(veggie);
    console.log(meattie);
    console.log(fishie);
})