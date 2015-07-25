<?php

namespace SysProjectManagement;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
                            'cli_name',
                            'cli_responsible',
                            'cli_email',
                            'cli_phone',
                            'cli_address',
                            'cli_obs'
                          ];
}
