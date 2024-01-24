function digitalClock(sec){
    const h = Math.floor((sec / 3600) % 24);
    const m = 1
    const s = sec % 60;

    const formatH = String(h).padStart(2,'0');
    const formatM = m < 10 ? '0' + m : m;
    const formatS = String(s).padStart(2,'0');
    return `${h}:${m}:${s}`
}

console.log(digitalClock(5025));
digitalClock(61201)
console.log(digitalClock(87000))