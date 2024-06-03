import { Tache } from "./tache.js";

window.addEventListener("DOMContentLoaded", () => {
    let Menage = new Tache("Ménage",15, "haute");
    let Cuisine = new Tache("Cuisine", 45, "haute");
    let Lessive = new Tache("Lessive", 120, "normale");
    let TrierCourrier = new Tache ("Courrier", 20, "basse");
    let AcheterShoesNoah = new Tache ("Noah shoes", 60, "normale");
    
    
    console.log(Menage);
    console.log(Cuisine);
    console.log(Lessive);
    console.log(TrierCourrier);
    console.log(AcheterShoesNoah);
    
    for(i=0, i<5, i++) {
        let ul= document.getElementById("list");
        let li = document.createElement("li"):
        let txt = document.createTextNode({Tache.name})
        li.appendchild(txt);
    };
    
    let btn = document.getElementById("btn");

btn.addEventListener("click", (event) => {
	let clickedli = event.target;
    let index =clickedLi.getAttribute(Tache)
});
    
});
