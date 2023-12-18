const { resolve } = require("path");

function who() {
    return new Promise((resolve) => {
        setTimeout(() => {
            resolve("0");
        } , 200);
    });
}

function what() {
    return new Promise ((resolve) => {
        setTimeout(() => {
            resolve("lurks");
        }, 300);
    })
}

function where() {
    return Promise((resolve) => {
        setTimeout(() => {
            resolve("in the shadows");
        }, 500);
    });
}

async function msg() {

    const a = await who();
    const b = await what();
    const c = await where();

    console.log('We are looking for : ')
    msg();
    console.log('hello');
}