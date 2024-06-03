class Character {
    #name;
    #healthPoints;

    constructor(name, healthPoints) {
        this.#name = name;
        this.#healthPoints = healthPoints;
    }


    get name() {
        return this.#name;
    }

    set name(value) {
        this.#name = value;
    }

    get healthPoints() {
        return this.#healthPoints;
    }

    set healthPoints(value) {
        this.#healthPoints = value;
    }
}

export { Character };