function capToFront(str){
    const upper = [];
    const lower = [];

    for(const char of str){
        if(char === char.toUpperCase()){
            upper.push(char);
        }
        else lower.push(char);
    }
    result = upper.join('') + lower.join('');
    return result;

}

console.log(capToFront("hApPy")) //"APhpy"
console.log(capToFront("moveMENT")) //"MENTmove"
console.log(capToFront("shOrtCAKE")) //"OCAKEshrt"