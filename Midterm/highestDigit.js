function highestDigit(num) {
    numStr = num.toString();
    let highestDigit = 0;
    for(let i = 0; i < numStr.length; i++){
        const digit = numStr[i];
        
        if(digit > highestDigit){
            highestDigit = digit;
        }
    }
    console.log(highestDigit);
}

highestDigit(379);
highestDigit(2);
highestDigit(377401);
