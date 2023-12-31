const { resolve } = require("path");

function promiseTimeout(ms) {
    return new Promise((resolve , reject) => {
        setTimeout(resolve, ms);
    });
}
console.log("begin");
async function longRunningOperation() {
    return 42;
}

async function run() {
    console.log("Start!!");
    await promiseTimeout(2000);
    const response = await longRunningOperation();
    console.log(response);

    console.log("Stop!!");
}

run();