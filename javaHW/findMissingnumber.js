//Program for checking for missing digit numbers [0-9] in a string
//example: 123456789 has  missing digit is 0 
//example: 53657687691428890 is not missing any digit
//example: 1981023568910 has missing digits 4, 7


const numStr1 = "123456789";
const numStr2 = "53657687691428890";
const numStr3 = "1981023568910";


function missingDigits(numStr) {
  const allDigits = "0123456789";
  const missingDigits = [];
  const main = "Program for checking for missing digit numbers [0-9] in a string";

  
  for (let digit of allDigits) {
    if (!numStr.includes(digit)) {
      missingDigits.push(digit);
    }

  }



  if (missingDigits.length === 0) {
    return `${numStr} is not missing any digit.`;
  } 
  else {
    return `${numStr} has missing digits is ${missingDigits.join(", ")}.`;
  }
}

  

console.log(missingDigits(numStr1));
console.log(missingDigits(numStr2));
console.log(missingDigits(numStr3));