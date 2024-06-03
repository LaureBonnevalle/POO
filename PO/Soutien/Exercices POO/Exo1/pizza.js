class Pizza {
    #name;
    #ingredient1;
    #ingredient2;
    #ingredient3;

    constructor(name, ingredient1, ingredient2, ingredient3) {
        this.#name = name;
        this.#ingredient1 = ingredient1;
        this.#ingredient2 = ingredient2;
        this.#ingredient3 = ingredient3;
    }

    get name() {
        return this.#name;
    }

    set name(value) {
        this.#name = value;
    }

    get ingredient1() {
        return this.#ingredient1;
    }

    set ingredient1(value) {
        this.#ingredient1 = value;
    }

    get ingredient2() {
        return this.#ingredient2;
    }

    set ingredient2(value) {
        this.#ingredient2 = value;
    }

    get ingredient3() {
        return this.#ingredient3;
    }

    set ingredient3(value) {
        this.#ingredient3 = value;
    }
}

export { Pizza };