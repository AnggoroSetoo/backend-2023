<?php

# membuat class Animal
class Animal
{
    # property animals
    public $animals;

    # method constructor - mengisi data awal
    # parameter: data hewan (array)
    public function __construct($data)
    {
        # Menginisialisasi properti $animals dgn data yang diberikan saat buat objek.
        $this->animals = $data;
    }

    # method index - menampilkan data animals
    public function index()
    {
        # Gunakan foreach untuk menampilkan data animals (array) satu per satu.
        foreach ($this->animals as $animal) {
            echo "$animal <br>";
        }

        return $this; # Kembalikan objek saat selesai
    }

    # method store - menambahkan hewan baru
    # parameter: hewan baru
    public function store($data)
    {
        # Method array_push untuk menambahkan data baru ke dalam array $animals.
        array_push($this->animals, $data);

        return $this; # Kembalikan objek saat selesai
    }

    # method update - mengupdate hewan
    # parameter: index dan hewan baru
    public function update($index, $data)
    {
        # Mengganti data di indeks tertentu dengan data baru.
        $this->animals[$index] = $data;

        return $this; # Kembalikan objek saat selesai
    }

    # method delete - menghapus hewan
    # parameter: index
    public function destroy($index)
    {
        # Menghapus data di indeks tertentu menggunakan unset.
        unset($this->animals[$index]);

        return $this; # Kembalikan objek saat selesai
    }
}

# object
echo "Nama mahasiswa : Anggoro Seto";
echo "<br> NIM : 0110222016" ;
echo "<br> Kelas : 3SE02<br><br>";
$animal = new Animal(["1. Ayam", "2. Ikan", "3. Harimau", "4. Macan"]);

echo "Index - Menampilkan seluruh hewan <br>";
$animal->index();
echo "<br>";

echo "Store - Menambahkan hewan baru <br>";
$animal->store('5. Kucing');
$animal->index();
echo "<br>";

echo "Update - Mengupdate hewan kucing no.5<br>";
$animal->update(4, '5. Kucing Anggora');
$animal->index();
echo "<br>";

echo "Destroy - Menghapus hewan no.1 <br>";
$animal->destroy(0);
$animal->index();
echo "<br>";