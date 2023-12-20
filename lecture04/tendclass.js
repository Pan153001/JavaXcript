class Media {
    constructor(info){
        this.publisDate = info.publisDate;
        this.name = info.name;
    }

}

class Song extends Media{

    constructor(songData){
        super(songData);
        this.artist = songData.artist;
    }

}

const mySong = new Song({

    artist: "Queen",
    name: "Bohemian Rhasody",
    publisDate: 1975,

});

console.log(mySong);