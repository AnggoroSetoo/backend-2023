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


const main = async () =>{
    console.log(await persiapan());
    console.log(await merebusAir());
    console.log(await masak());
    console.log("Selesai");
};

main();