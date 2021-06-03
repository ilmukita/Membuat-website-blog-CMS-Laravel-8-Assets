<?php
/*
language : English
*/
return [
    'title' => [
        'index' => 'Roles',
        'create' => 'Add role',
        'edit' => 'Edit role',
        'detail' => 'Detail role',
    ],
    'form_control' => [
        'input' => [
            'name' => [
                'label' => 'Name',
                'placeholder' => 'Enter name',
                'attribute' => 'name'
            ],
            'permission' => [
                'label' => 'Permission',
                'placeholder' => 'Choose permission',
                'attribute' => 'permission'
            ],
            'search' => [
                'label' => 'Search',
                'placeholder' => 'Search for roles',
                'attribute' => 'search'
            ]
        ],
    ],
    'label' => [
        'no_data' => [
            'fetch' => "Roles Not Yet Available!",
            'search' => ":keyword role not found",
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
        'back' => [
            'value' => 'Back'
        ],
    ],
    'alert' => [
        'create' => [
            'title' => 'Add role',
            'message' => [
                'success' => "Category saved successfully.",
                'error' => "An error occurred while saving the role. :error"
            ]
        ],
        'update' => [
            'title' => 'Edit role',
            'message' => [
                'success' => "Category updated successfully.",
                'error' => "An error occurred while updating the role. :error"
            ]
        ],
        'delete' => [
            'title' => 'Delete role',
            'message' => [
                'confirm' => "Are you sure you want to delete the :name role?",
                'success' => "Category deleted successfully.",
                'error' => "An error occurred while deleting the role. :error"
            ]
        ],
    ]
];
