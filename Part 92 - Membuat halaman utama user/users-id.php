<?php
/*
language : Indonesia
*/
return [
    'title' => [
        'index' => 'User',
        'create' => 'Tambah user',
        'edit' => 'Ubah user',
    ],
    'form_control' => [
        'input' => [
            'name' => [
                'label' => 'Nama',
                'placeholder' => 'Masukan nama',
                'attribute' => 'nama'
            ],
            'email' => [
                'label' => 'Email',
                'placeholder' => 'Masukan email',
                'attribute' => 'email'
            ],
            'password' => [
                'label' => 'Password',
                'placeholder' => 'Masukan password',
                'attribute' => 'password'
            ],
            'password_confirmation' => [
                'label' => 'Konfirmasi password',
                'placeholder' => 'Ketik ulang password',
                'attribute' => 'konfirmasi password'
            ],
            'search' => [
                'label' => 'Cari',
                'placeholder' => 'Cari pengguna',
                'attribute' => 'cari'
            ]
        ],
        'select' => [
            'role' => [
                'label' => 'Wewenang',
                'placeholder' => 'Pilih wewenang',
                'attribute' => 'wewenang'
            ]
        ]
    ],
    'label' => [
        'name' => 'Nama',
        'email' => 'Email',
        'role' => 'Wewenang',
        'no_data' => [
            'fetch' => "Data user belum ada",
            'search' => "User :keyword tidak ditemukan",
        ],
    ],
    'button' => [
        'create' => [
            'value' => 'Tambah'
        ],
        'save' => [
            'value' => 'Simpan'
        ],
        'edit' => [
            'value' => 'Ubah'
        ],
        'delete' => [
            'value' => 'Hapus'
        ],
        'cancel' => [
            'value' => 'Batal'
        ],
    ],
    'alert' => [
        'create' => [
            'title' => "Tambah user",
            'message' => [
                'success' => "User berhasil disimpan.",
                'error' => "Terjadi kesalahan saat menyimpan user. :error"
            ]
        ],
        'update' => [
            'title' => 'Ubah user',
            'message' => [
                'success' => "User berhasil diperbaharui.",
                'error' => "Terjadi kesalahan saat perbarui user. :error"
            ]
        ],
        'delete' => [
            'title' => 'Hapus user',
            'message' => [
                'confirm' => "Yakin akan menghapus user :title ?",
                'success' => "User berhasil dihapus",
                'error' => "Terjadi kesalahan saat menghapus user. :error"
            ]
        ],
    ]
];
