<?php
/*
language : English
*/
return [
    'title' => [
        'index' => 'Categories',
        'create' => 'Add category',
        'edit' => 'Edit category',
        'detail' => 'Detail category',
    ],
    'form_control' => [
        'input' => [
            'title' => [
                'label' => 'Title',
                'placeholder' => 'Enter title',
                'attribute' => 'title'
            ],
            'slug' => [
                'label' => 'Slug',
                'placeholder' => 'Auto generate',
                'attribute' => 'slug'
            ],
            'thumbnail' => [
                'label' => 'Thumbnail',
                'placeholder' => 'Browse thumbnails',
                'attribute' => 'thumbnail'
            ],
            'search' => [
                'label' => 'Search',
                'placeholder' => 'Search for categories',
                'attribute' => 'search'
            ]
        ],
        'select' => [
            'parent_category' => [
                'label' => 'Parent category',
                'placeholder' => 'Choose parent category',
                'attribute' => 'parent category'
            ]
        ],
        'textarea' => [
            'description' => [
                'label' => 'Description',
                'placeholder' => 'Enter description',
                'attribute' => 'description'
            ],
        ]
    ],
    'button' => [
        'create' => [
            'value' => 'Add'
        ],
        'save' => [
            'value' => 'Save'
        ],
        'edit' => [
            'value' => 'Edit'
        ],
        'delete' => [
            'value' => 'Delete'
        ],
        'cancel' => [
            'value' => 'Cancel'
        ],
        'browse' => [
            'value' => 'Browse'
        ],
        'back' => [
            'value' => 'Back'
        ],
    ],
    'alert' => [
        'create' => [
            'title' => 'Add category',
            'message' => [
                'success' => "Category saved successfully.",
                'error' => "An error occurred while saving the category. :error"
            ]
        ],
        'update' => [
            'title' => 'Edit category',
            'message' => [
                'success' => "Category updated successfully.",
                'error' => "An error occurred while updating the category. :error"
            ]
        ],
        'delete' => [
            'title' => 'Delete category',
            'message' => [
                'confirm' => "Are you sure you want to delete the :title category?",
                'success' => "Category deleted successfully.",
                'error' => "An error occurred while deleting the category. :error"
            ]
        ],
    ]
];
