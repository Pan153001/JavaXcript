const person = {

    name: 'Pannawat',
    weight : 65

}

function sayHello(){
    console.log("Hello world!")
}

function cube(x){
    return x*x*x;
}

const add = (a,b) => a+b;

const static = true;

module.exports = {person, sayHello , cube , add , static}