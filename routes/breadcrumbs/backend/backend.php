<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});

require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';

Breadcrumbs::for('admin.category.index', function ($trail) {
    $trail->push('Category', route('admin.category.index'));
});
Breadcrumbs::for('admin.category.edit', function ($trail) {
    $trail->push('Edit Category', route('admin.category.edit',1));
});
Breadcrumbs::for('admin.category.sub_category', function ($trail) {
    $trail->push('Add Sub Category', route('admin.category.sub_category',1));
});

Breadcrumbs::for('admin.sub_category.index', function ($trail) {
    $trail->push('Sub Category', route('admin.sub_category.index'));
});

Breadcrumbs::for('admin.products.index', function ($trail) {
    $trail->push('Products', route('admin.products.index'));
});

Breadcrumbs::for('admin.inquire.index', function ($trail) {
    $trail->push('Inquire', route('admin.inquire.index'));
});
Breadcrumbs::for('admin.inquire.edit', function ($trail) {
    $trail->push('View Inquire', route('admin.inquire.edit',1));
});

Breadcrumbs::for('admin.careers.index', function ($trail) {
    $trail->push('Job Opportunity', route('admin.careers.index'));
});
Breadcrumbs::for('admin.careers.edit', function ($trail) {
    $trail->push('Edit Job Opportunity', route('admin.careers.edit',1));
});
Breadcrumbs::for('admin.candidate.candidate_index', function ($trail) {
    $trail->push('Candidates', route('admin.candidate.candidate_index'));
});

Breadcrumbs::for('admin.news.index', function ($trail) {
    $trail->push('News', route('admin.news.index'));
});

Breadcrumbs::for('admin.news.create', function ($trail) {
    $trail->push('Create News', route('admin.news.create'));
});

Breadcrumbs::for('admin.news.edit', function ($trail) {
    $trail->push('Edit News', route('admin.news.edit',1));
});




