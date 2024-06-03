Pour pouvoir commencer à dynamiser le HTML nous allons avoir besoin d'interragir avec le DOM de la page. Pour pouvoir sélectionner du HTML, le modifier, écouter les évenements.

## Sélectionner des éléments du DOM

Avant tout nous allons avoir besoin de sélectionner des éléments dans le DOM, pour pouvoir les modifier, en récupérer les informations ou écouter leurs evenements.

### getElementById

Pour récupérer un élément du DOM en utilisant son `id` :

```html
<section id="yep">

</section>
```

```js
let yep = document.getElementById("yep");
```

### getElementsByClassName

Pour récupérer tous les éléments qui ont une même `class` :

```html
<article class="product">

</article>

<article class="product">

</article>
```

```js
let productList = document.getElementsByClassName("product");
```

### querySelector

Pour utiliser directement un sélecteur CSS et récupérer le premier élément correspondant 

```html
<ul>
	<li>
		Salade
	</li>
	<li>
		Tomate
	</li>
	<li>
		Oignon
	</li>
</ul>
```

```js
let tomate = document.querySelector("ul li:nth-of-type(2)");
```

### querySelectorAll


```html
<ul>
	<li>
		Salade
	</li>
	<li>
		Tomate
	</li>
	<li>
		Oignon
	</li>
</ul>
```

```js

let ingredients = document.querySelectorAll("ul li:not(:first-of-type)"); 

// [Tomate, Oignon]
```


## Modifier le DOM

### style

Pour modifier directement le style d'un élément :

```js
let box = document.getElementById("box");

box.style.backgroundColor = "red";
```

### classList

L'attribut classList permet de modifier la liste des classes présentes sur un élément :

```js
let box = document.getElementById("box");
box.classList.add("open"); // box aura la classe open
box.classList.remove("open"); // box n'aura plus la classe open
```

### id

L'attribut id permet de lire ou modifier l'id d'un élément :

```js
let box = document.querySelector("ul li:first-of-type");
let id = box.id; // box 
box.id = "box1"; // box1
```

### getAttribute() / setAttribute()

Vous pouvez utiliser `getAttribute()` pour récupérer un attribut.
Vous pouvez utiliser `setAttribute()` pour modifier un attribut.

```js
let box = document.getElementById("box");
box.setAttribute("titi", "toto");
let titi = box.getAttribute("titi"); // toto
```

```html
<section id="box" titi="toto">
</section>
```

### createElement

Pour créer un nouvel élément HTML :

```js
let ul = document.createElement("ul");
let li = document.createElement("li");
```

### appendChild

Pour ajouter un élément dans un autre élément (à la fin):

```html
<ul id="list">

</ul>
```


```js
let ul = document.getElementById("list");

let li = document.createElement("li");

ul.appendChild(li);
```


### createTextNode

Pour ajouter du contenu texte :

```js
let li = document.createElement("li");
let txt = document.createTextNode("Salade");

li.appendChild(txt);
```

### insertBefore

Pour insérer un élément avant un autre

```html
<article id="post">
	
	<p>
	
	</p>
<article>
```


```js
let p = document.querySelector("#post p");

let header = document.createElement("header");

p.insertBefore(header);
```


## Les events

### addEventListener

Ajouter un listener sur un event, ça veut dire surveiller si un evenement se produit et si c'est le cas déclencher une action précise.

```html
<button id="btn">Click Me!</button>
```

Pour lui désigner l'action qu'il va devoir faire on utilise une fonction qui n'a pas de nom. On appelle ça une fonction anonyme.

```js
let btn = document.getElementById("btn");

btn.addEventListener("click", function(event){
	alert("On a cliqué sur le bouton!");
});
```

### Quelques events

#### DomContentLoaded

L'event `DOMContentLoaded` de la `window` vous indique que le contenu de votre page a bien été chargé, par prudence, placez tout le reste de votre code dedans :

```js
window.addEventListener("DOMContentLoaded", function(){
	// tout le reste de mon script
});
```

#### click

L'event `click` vous signale que l'utilisateur a cliqué sur l'élément.

#### Keyboard events

On peut également capter des évenements du clavier :

```js
document.addEventListener("keydown", function(event){
	console.log(event.code); // affichera le nom de la touche appuyée
});
```

#### Mouse events

Les évenements de la souris que l'on peut capter :

- mousedown
- mouseup
- mousemov
- mouseover
- mouseout
- click
- dblclick
- contextmenu