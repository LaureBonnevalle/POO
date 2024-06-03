import { Warrior } from "./warrior.js";
import { Mage } from "./mage.js";

window.addEventListener("DOMContentLoaded", () => {
    let defMage = new Mage("Default Mage");
    let defWar = new Warrior("Default Warrior");

    let mage = new Mage("Gandalf", 1000, 42000);
    let warrior = new Warrior("Gimli", 4200, 56);

    console.log(defWar);
    console.log(defMage);
    console.log(mage);
    console.log(warrior);
});