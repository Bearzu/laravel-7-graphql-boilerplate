<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Syndicate Defaults
    |--------------------------------------------------------------------------
    |
    | These options controls the default user model that syndicate will use to generate a members relationship.
    |
    */
    'user_model' => App\Models\User::class,

    /**
     * Create a default organization for the user
     */
    'create_default_organization' => true
];
