function printHello(name) {
    console.log("Hello " + name);
    return name + "Hello!";
}

console.log(printHello.name)

let result = printHello("Pannwat!");
console.log(result);