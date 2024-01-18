function numbersplit(num){
    var mid = Math.ceil(num / 2);

    console.log(num-mid+",",mid);
}

numbersplit(4); //[2,2]
numbersplit(10); //[5,5]
numbersplit(11); //[5,6]
numbersplit(-9); //[-5,-4]