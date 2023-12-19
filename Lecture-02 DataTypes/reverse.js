function reverseString(value) {
    let reverseValue = "";

    value.split("").forEach((char) => {
        reverseString = char + reverseValue;
    });

    return reverseValue;
}

console.log(reverseString("Reverse Me"));