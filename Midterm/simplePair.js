function simplePair(num, result){
    for(let n = 0; n < num.length; n++){
        for(let m = n + 1; m < num.length; m++){
            if(num[n] * num[m] === result){
                return [num[n], num[m]];
            }
        }
    }
    return null;
}

console.log(simplePair([1 ,2 ,3], 3)); //-> [1, 3]
console.log(simplePair([1 ,2 ,3], 6)); //-> [2, 3]
console.log(simplePair([1 ,2 ,3], 9)); //-> [null]