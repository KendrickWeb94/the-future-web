<?php

namespace App\Models; // Make sure this is correct, as it's in the Models folder

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use Searchable;
}
