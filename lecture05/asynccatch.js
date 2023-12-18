function yayOrNay() {
    return new Promise((resolve, rejects) => {
        const val = Math.round(Math.random() * 1);
        val ? resolve("Lucky!!") : rejects("Nope");
    });
}

async function msg() {
    try {
        const msg = await yayOrNay();
        console.log(msg);
    } catch (err) {
        console.log(err);
    }
}

msg();
msg();
msg();
msg();
msg();
msg();
msg();

