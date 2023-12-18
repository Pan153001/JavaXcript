function criticalCode(){
    throw "Throwing an exception";
}

function logError(theException) {
    console.log(theException);
}

console.log("\n******Try Catch******\n");

try {
    criticalCode();
}

catch(ex) {
    console.log("Got an error");
    logError(ex);
}

console.log("\n******Throwing in Try Catch******\n");

try {
    throw "An exception that is throw every time";
} catch (ex) {
    console.log("Got an error");
    logError(ex);
}

console.log("\n******Try Catch Final******\n");

try {
    criticalCode();
} catch (ex) {
    console.log("Got an error");
    logError(ex);
} finally {
    console.log("Code that alway will run");
}
function hello() {
    console.log("\n******Throwing Exceptions******\n");
}