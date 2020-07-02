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
    'create_default_organization' => true,

    /**
     * If this option is set to true, members that are invited into organizations will need to accept/decline
     */
    'invites' => true,

    /**
     * Define the mail templates to be used. these will be published by default
     */
    'mail' => [
        'member_invite' => 'mail.memberinvite'
    ]
];
