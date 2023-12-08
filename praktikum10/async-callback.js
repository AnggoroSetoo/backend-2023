const persiapan = () =>{
    console.log("Mempersiapkan bahan...");
};

const merebusAir = () =>{
    console.log("Merebus Air...");
};

const masak = () =>{
        console.log("Memasak mie...");
        console.log("Selesai");
};


const main = () => {
    setTimeout(() => {
        persiapan();
        
        setTimeout(() => {
            merebusAir();

            setTimeout(() => {
                masak();
            }, 5000);
        }, 7000);
    }, 3000);
};

main();