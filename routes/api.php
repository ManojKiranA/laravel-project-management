<?php

Route::group(['prefix' => 'v1', 'as' => 'admin.', 'namespace' => 'Api\V1\Admin'], function () {
    Route::apiResource('permissions', 'PermissionsApiController');

    Route::apiResource('roles', 'RolesApiController');

    Route::apiResource('users', 'UsersApiController');

    Route::apiResource('currencies', 'CurrencyApiController');

    Route::apiResource('transaction-types', 'TransactionTypeApiController');

    Route::apiResource('income-sources', 'IncomeSourceApiController');

    Route::apiResource('client-statuses', 'ClientStatusApiController');

    Route::apiResource('project-statuses', 'ProjectStatusApiController');

    Route::apiResource('clients', 'ClientApiController');

    Route::apiResource('projects', 'ProjectApiController');

    Route::apiResource('notes', 'NoteApiController');

    Route::apiResource('documents', 'DocumentApiController');

    Route::apiResource('transactions', 'TransactionApiController');

    Route::apiResource('client-reports', 'ClientReportApiController');

    Route::apiResource('time-work-types', 'TimeWorkTypeApiController');

    Route::apiResource('time-projects', 'TimeProjectApiController');

    Route::apiResource('time-entries', 'TimeEntryApiController');

    Route::apiResource('time-reports', 'TimeReportApiController');
});
