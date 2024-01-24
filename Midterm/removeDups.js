function removeDups(arr){
    const result = arr.filter((value,index,self) => {
        return self.indexOf(value) === index;
    });
    return [...new Set(arr)];
}

console.log(removeDups([1, 0, 1, 0])) //-> [1,0]
console.log(removeDups(["The","big","cat"])) //-> ["the","big","cat"]
console.log(removeDups(["John","Taylor","John"])) //-> ["John","Taylor","John"]