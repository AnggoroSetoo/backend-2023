const persiapan = () =>{
    setTimeout(function(){
        console.log("Mempersiapkan bahan...");
    }, 3000);
};

const merebusAir = () =>{
    setTimeout(function(){
        console.log("Merebus Air...");
    }, 7000);
};

const masak = () =>{
    setTimeout(function(){
        console.log("Memasak mie...");
        console.log("Selesai");
    }, 5000);
};


const main = () =>{
    persiapan();
    merebusAir();
    masak();
};

main();