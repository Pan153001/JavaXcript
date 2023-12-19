function createQuote(quote ,callback) { 
    let myQuote = "Like I alway say, " + quote;
    callback(myQuote);
}

function logQuote(quote) {
    console.log(quote + ' Yes...');
}

createQuote(" you willgetting better!", logQuote);