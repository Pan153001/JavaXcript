function promiseTimeout(ms) {
    return new Promise((resolve, reject) => {
        setTimeout(resolve, ms);
    });
}
console.log("begin");
async function run() {
    console.log("Start!!");

    await promiseTimeout(2000);
    console.log("Stop!!");
}

run();


console.log("end");