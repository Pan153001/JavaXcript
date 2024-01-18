function highestDigit(number) {
    // Convert the number to a string to iterate through its digits
    const numberString = number.toString();

    // Initialize a variable to store the highest digit
    let highest = 0;

    // Iterate through each digit in the string
    for (let i = 0; i < numberString.length; i++) {
        // Convert the current digit back to a number
        const digit = parseInt(numberString[i]);

        // Update the highest digit if the current digit is greater
        if (digit > highest) {
            highest = digit;
        }
    }

    // Output the highest digit
    console.log(`The highest digit in ${number} is: ${highest}`);
}

// Test cases
highestDigit(379);
highestDigit(2);
highestDigit(377401);
