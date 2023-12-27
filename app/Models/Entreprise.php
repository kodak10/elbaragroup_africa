<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    use HasFactory;
    protected $fillable = [
        'type_entreprise',
        'name',
        'nationalite',
        'telephone',
        'photo',
        'email',
        'regime',
        'localisation',
        'approve',
        'num_inscription',
        'user_id',
        'approve',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function services()
    {
        return $this->belongsToMany(Service::class, 'service_entreprises', 'entreprise_id', 'service_id');
    }
    public function demandeServices()
    {
        return $this->hasMany(DemandeService::class, 'entreprise_id');
    }}
