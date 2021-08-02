<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class application extends Model
{
    use HasFactory;
    protected $table = 'applications';
    
    protected $fillable = [
        'id',
        'child_name',
        'sex',
        'date_of_birth',
        'place_of_birth',
        'id_number',
        'level',
        'child_inclinations',
        'father_profession',
        'academic_qualification_dad',
        'mother_name',
        'mother_profession',
        'academic_qualification_mom',
        'parents_marital_status',
        'The_arrangement_of_the_child_in_the_family',
        'phone_number',
        'The_person_authorized_to_accompany_the_child_in_the_emergency',
        'full_address',
        'problem_patiant',
        'taking_medication',
        'accidant',
        'movment_disorders',
        'bathroom_remember',
        'self_relinat_bathroom',
        'behavioral_problems',
        'need_transportation',
    ];

}
