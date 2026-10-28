<?php

class MahasiswaModel
{
    public function getAll()
    {
        return [
            [
                "nama" => "John Doe",
                "nim" => "123456789",
                "prodi" => "Teknik Informatika"
            ],
            [
                "nama" => "Jane Smith",
                "nim" => "987654321",
                "prodi" => "Sistem Informasi"
            ],
            [
                "nama" => "Michael Johnson",
                "nim" => "456789123",
                "prodi" => "Teknik Elektro"
            ],
            [
                "nama" => "Emily Davis",
                "nim" => "789123456",
                "prodi" => "Teknik Mesin"
            ],
            [
                "nama" => "William Brown",
                "nim" => "321654987",
                "prodi" => "Teknik Sipil"
            ]
        ];
    }
}