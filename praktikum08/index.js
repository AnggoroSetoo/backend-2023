// Variable
let name = "Anggoro Seto";
console.log(name);

// Array
let angka = [1, 2, 3, 4, 5];
console.log(angka[0]);
console.log(angka.length);

// Object
let mahasiswa = {
    nama: "Anggoro Seto",
    nim: "0110222016",
    jurusan: "Teknik Informatika"
};
console.log(mahasiswa.nim);

// Array Object
let mahasiswas = [
    {
        nama: "Anggoro Seto",
        nim: "0110222016",
        jurusan: "Teknik Informatika"
    },
    {
        nama: "Anggoro Seto2",
        nim: "011022202222",
        jurusan: "SI"
    }
];
console.log(mahasiswas[1].nim);


// If else
let nilai = 80;
if (nilai >= 75) {
    console.log("kamu lulus");
}else {
    console.log("kamu tidak lulus");
}

// Looping 
for (let i = 0; i <= 3; i++) {
    console.log(i);
}

// Function pertambahan dan perkalian
function tambah(a, b) {
    return a + b;
}
function kali(a, b) {
    return a * b;
}
console.log(tambah(10, 20));
console.log(kali(10, 20));

