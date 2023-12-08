const persiapan = () =>{
    return new Promise((resolve) => {
        setTimeout(() =>{
            resolve("Mempersiapkan bahan...");
        }, 3000);
    });
};

const merebusAir = () =>{
    return new Promise((resolve) => {
        setTimeout(() =>{
            resolve("Merebus Air...");
        }, 7000);
    });
};

const masak = () =>{
    return new Promise((resolve) => {
        setTimeout(() =>{
            resolve("Memasak mie...");
        }, 5000);
    });
};


const main = () =>{
    persiapan()
        .then((result) =>{
            console.log(result);
            return merebusAir();
        })
        .then((result) =>{
            console.log(result);
            return masak();
        })
        .then((result) =>{
            console.log(result);
            console.log("Selesai");
        });
};


main();