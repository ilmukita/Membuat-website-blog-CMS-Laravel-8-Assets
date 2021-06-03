<?php
/*
language : Indonesia
*/
return [
    'title' => [
        'index' => 'Wewenang',
        'create' => 'Tambah wewenang',
        'edit' => 'Ubah wewenang',
        'detail' => 'Detail wewenang',
    ],
    'form_control' => [
        'input' => [
            'name' => [
                'label' => 'Nama',
                'placeholder' => 'Masukan nama',
                'attribute' => 'nama'
            ],
            'permission' => [
                'label' => 'Hak akses',
                'placeholder' => 'Pilih hak akses',
                'attribute' => 'hak akses'
            ],
            'search' => [
                'label' => 'Cari',
                'placeholder' => 'Cari wewenang',
                'attribute' => 'cari'
            ]
        ],
    ],
    'label' => [
        'no_data' => [
            'fetch' => 'Wewenang Belum Tersedia!',
            'search' => "Wewenang :keyword tidak ditemukan",
            ]
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
        'back' => [
            'value' => 'Kembali'
        ],
    ],
    'alert' => [
        'create' => [
            'title' => "Tambah wewenang",
            'message' => [
                'success' => "Wewenang berhasil disimpan.",
                'error' => "Terjadi kesalahan saat menyimpan wewenang. :error"
            ]
        ],
        'update' => [
            'title' => 'Ubah wewenang',
            'message' => [
                'success' => "Wewenang berhasil diperbaharui.",
                'error' => "Terjadi kesalahan saat perbarui wewenang. :error"
            ]
        ],
        'delete' => [
            'title' => 'Hapus wewenang',
            'message' => [
                'confirm' => "Yakin akan menghapus wewenang :name ?",
                'success' => "Wewenang berhasil dihapus",
                'error' => "Terjadi kesalahan saat menghapus wewenang. :error"
            ]
        ],
    ]
];
