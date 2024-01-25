function missingLetters(str) {
    for (let i = 0; i < str.length - 1; i++) {
      if (str.charCodeAt(i + 1) - str.charCodeAt(i) !== 1) {
        return String.fromCharCode(str.charCodeAt(i) + 1);
      }
    }
    return "not missing";
  }
console.log(missingLetters("abdef")); // c
console.log(missingLetters("hijklmn")); // not missing
console.log(missingLetters("oqrstu"));

