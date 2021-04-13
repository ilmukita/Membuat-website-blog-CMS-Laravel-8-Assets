<?php
/*
language : Indonesia
*/
return [
    'title' => [
        'index' => 'Kategori',
        'create' => 'Tambah kategori',
        'edit' => 'Ubah kategori',
        'detail' => 'Detail kategori',
    ],
    'form_control' => [
        'input' => [
            'title' => [
                'label' => 'Judul',
                'placeholder' => 'Masukan judul',
                'attribute' => 'judul'
            ],
            'slug' => [
                'label' => 'Slug',
                'placeholder' => 'Automatis dibuatkan',
                'attribute' => 'slug'
            ],
            'thumbnail' => [
                'label' => 'Thumbnail',
                'placeholder' => 'Telusuri thumbnail',
                'attribute' => 'thumbnail'
            ],
            'search' => [
                'label' => 'Pencarian',
                'placeholder' => 'Cari kategori',
                'attribute' => 'pencarian'
            ]
        ],
        'select' => [
            'parent_category' => [
                'label' => 'Induk kategori',
                'placeholder' => 'Pilih induk kategori',
                'attribute' => 'induk kategori'
            ]
        ],
        'textarea' => [
            'description' => [
                'label' => 'Deskripsi',
                'placeholder' => 'Masukan deskripsi',
                'attribute' => 'deskripsi'
            ],
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
        'browse' => [
            'value' => 'Telusuri'
        ],
        'back' => [
            'value' => 'Kembali'
        ],
    ],
    'alert' => [
        'create' => [
            'title' => "Tambah kategori",
            'message' => [
                'success' => "Kategori berhasil disimpan.",
                'error' => "Terjadi kesalahan saat menyimpan kategori. :error"
            ]
        ],
        'update' => [
            'title' => 'Ubah kategori',
            'message' => [
                'success' => "Kategori berhasil diperbaharui.",
                'error' => "Terjadi kesalahan saat perbarui kategori. :error"
            ]
        ],
        'delete' => [
            'title' => 'Hapus kategori',
            'message' => [
                'confirm' => "Yakin akan menghapus kategori :title ?",
                'success' => "Kategori berhasil dihapus",
                'error' => "Terjadi kesalahan saat menghapus kategori. :error"
            ]
        ],
    ]
];
