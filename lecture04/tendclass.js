class Media {
    constructor(info){
        this.publisDate = info.publisDate;
        this.name = info.name;
    }

}

class Song extends Media{

    constructor(songData){
        super(songData);
        this.artist = songData,this.artist;
    }

}

const mySong = new Song({

    artist: "Queen",
    name: "Bohemian Rhasody",
    publishDate: 1975,

});

console.log(mySong);