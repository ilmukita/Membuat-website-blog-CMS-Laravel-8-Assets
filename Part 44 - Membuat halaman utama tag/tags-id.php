<?php
/*
language : Indonesia
*/
return [
    'title' => [
        'index' => 'Tag',
        'create' => 'Tambah tag',
        'edit' => 'Ubah tag',
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
            'search' => [
                'label' => 'Pencarian',
                'placeholder' => 'Cari tag',
                'attribute' => 'pencarian'
            ]
        ],
    ],
    'label' => [
        'no_data' => [
            'fetch' => "Data tag belum ada",
            'search' => "Tag :keyword tidak ditemukan",
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
    ],
    'alert' => [
        'create' => [
            'title' => "Tambah tag",
            'message' => [
                'success' => "Tag berhasil disimpan.",
                'error' => "Terjadi kesalahan saat menyimpan tag. :error"
            ]
        ],
        'update' => [
            'title' => 'Ubah tag',
            'message' => [
                'success' => "Tag berhasil diperbaharui.",
                'error' => "Terjadi kesalahan saat perbarui tag. :error"
            ]
        ],
        'delete' => [
            'title' => 'Hapus tag',
            'message' => [
                'confirm' => "Yakin akan menghapus tag :title ?",
                'success' => "Tag berhasil dihapus",
                'error' => "Terjadi kesalahan saat menghapus tag. :error"
            ]
        ],
    ]
];
