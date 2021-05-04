<?php
/*
language : English
*/
return [
    'title' => [
        'index' => 'Tags',
        'create' => 'Add tag',
        'edit' => 'Edit tag',
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
            'search' => [
                'label' => 'Search',
                'placeholder' => 'Search for tags',
                'attribute' => 'search'
            ]
        ]
    ],
    'label' => [
        'no_data' => [
            'fetch' => "No tag data yet",
            'search' => ":keyword tag not found",
        ]
    ]
    ,
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
    ],
    'alert' => [
        'create' => [
            'title' => 'Add tag',
            'message' => [
                'success' => "Tag saved successfully.",
                'error' => "An error occurred while saving the tag. :error"
            ]
        ],
        'update' => [
            'title' => 'Edit tag',
            'message' => [
                'success' => "Tag updated successfully.",
                'error' => "An error occurred while updating the tag. :error"
            ]
        ],
        'delete' => [
            'title' => 'Delete tag',
            'message' => [
                'confirm' => "Are you sure you want to delete the :title tag?",
                'success' => "Tag deleted successfully.",
                'error' => "An error occurred while deleting the tag. :error"
            ]
        ],
    ]
];
