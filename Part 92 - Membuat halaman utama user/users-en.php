<?php
/*
language : English
*/
return [
    'title' => [
        'index' => 'Users',
        'create' => 'Add user',
        'edit' => 'Edit user',
    ],
    'form_control' => [
        'input' => [
            'name' => [
                'label' => 'Name',
                'placeholder' => 'Enter name',
                'attribute' => 'name'
            ],
            'email' => [
                'label' => 'Email',
                'placeholder' => 'Enter email',
                'attribute' => 'email'
            ],
            'password' => [
                'label' => 'Password',
                'placeholder' => 'Enter password',
                'attribute' => 'password'
            ],
            'password_confirmation' => [
                'label' => 'Password confirmation',
                'placeholder' => 'Retype password',
                'attribute' => 'password confirmation'
            ],
            'search' => [
                'label' => 'Search',
                'placeholder' => 'Search for users',
                'attribute' => 'search'
            ]
        ],
        'select' => [
            'role' => [
                'label' => 'Role',
                'placeholder' => 'Choose role',
                'attribute' => 'role'
            ]
        ]
    ],
    'label' => [
        'name' => 'Name',
        'email' => 'Email',
        'role' => 'Role',
        'no_data' => [
            'fetch' => "No user data yet",
            'search' => ":keyword user not found",
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
    ],
    'alert' => [
        'create' => [
            'title' => 'Add user',
            'message' => [
                'success' => "User saved successfully.",
                'error' => "An error occurred while saving the user. :error"
            ]
        ],
        'update' => [
            'title' => 'Edit user',
            'message' => [
                'success' => "User updated successfully.",
                'error' => "An error occurred while updating the user. :error"
            ]
        ],
        'delete' => [
            'title' => 'Delete user',
            'message' => [
                'confirm' => "Are you sure you want to delete :name users?",
                'success' => "User deleted successfully.",
                'error' => "An error occurred while deleting the user. :error"
            ]
        ],
    ]
];
