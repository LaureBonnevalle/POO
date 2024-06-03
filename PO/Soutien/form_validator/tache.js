class Tache {
    #name;
    #duree;
    #priorite;
    
    constructor(id, name, duree, priorite, done=false) {
        this.#id = id;
        this.#name = name;
        this.#duree = duree;
        this.#priorite = priorite;
        this.#done = done;
    }


    get name() {
        return this.#name;
    }

    set name(value) {
        this.#name = value;
    }
    
    
    get duree() {
        return this.#duree;
    }

    set duree(value) {
        this.#duree = value;
    }
    
    
    get priorite() {
        return this.#priorite;
    }

    set priorite(value) {
        this.#name = value;
    }
    
}

export { Tache };