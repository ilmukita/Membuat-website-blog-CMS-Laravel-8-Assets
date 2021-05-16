<?php
/*
language : English
*/
return [
    'title' => [
        'index' => 'Posts',
        'create' => 'Add post',
        'edit' => 'Edit post',
        'detail' => 'Detail post',
    ],
    'label' => [
        'no_data' => [
            'fetch' => "No post data yet",
            'search' => ":keyword post not found",
        ]
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
            'category' => [
                'label' => 'Category',
                'placeholder' => 'Choose category',
                'attribute' => 'category'
            ],
            'search' => [
                'label' => 'Search',
                'placeholder' => 'Search for posts',
                'attribute' => 'search'
            ]
        ],
        'select' => [
            'tag' => [
                'label' => 'Tag',
                'placeholder' => 'Enter tag',
                'attribute' => 'tag',
                'option' => [
                    'publish' => 'Publish',
                    'draft' => 'Draft'
                ],
            ],
            'status' => [
                'label' => 'Status',
                'placeholder' => 'Choose status',
                'attribute' => 'status',
                'option' => [
                    'draft' => 'Draft',
                    'publish' => 'Publish',
                ]
            ],
        ],
        'textarea' => [
            'description' => [
                'label' => 'Description',
                'placeholder' => 'Enter description',
                'attribute' => 'description'
            ],
            'content' => [
                'label' => 'Content',
                'placeholder' => 'Enter content',
                'attribute' => 'content'
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
        'apply' => [
            'value' => 'Apply'
        ]
    ],
    'alert' => [
        'create' => [
            'title' => 'Add post',
            'message' => [
                'success' => "Post saved successfully.",
                'error' => "An error occurred while saving the post. :error"
            ]
        ],
        'update' => [
            'title' => 'Edit post',
            'message' => [
                'success' => "Post updated successfully.",
                'error' => "An error occurred while updating the post. :error"
            ]
        ],
        'delete' => [
            'title' => 'Delete post',
            'message' => [
                'confirm' => "Are you sure you want to delete the :title post?",
                'success' => "Post deleted successfully.",
                'error' => "An error occurred while deleting the post. :error"
            ]
        ],
    ]
];
