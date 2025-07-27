<?php

namespace App\Models;

class Project
{
    protected $fillable = [
        'title',
        'description',
        'user_id',
        'status',
        'start_date',
        'end_date',
    ];

    public $id;
    public $title;
    public $description;
    public $user_id;
    public $status;
    public $start_date;
    public $end_date;
    public $created_at;
    public $updated_at;

    public function __construct($attributes = [])
    {
        foreach ($attributes as $key => $value) {
            if (property_exists($this, $key)) {
                $this->{$key} = $value;
            }
        }
        
        if (!isset($this->created_at)) {
            $this->created_at = date('Y-m-d H:i:s');
        }
        if (!isset($this->updated_at)) {
            $this->updated_at = date('Y-m-d H:i:s');
        }
        if (!isset($this->status)) {
            $this->status = 'active';
        }
    }

    /**
     * Get the user that owns the project.
     */
    public function user()
    {
        // Simulación de relación con User
        return (object)[
            'id' => $this->user_id,
            'name' => 'Usuario del Proyecto'
        ];
    }

    /**
     * Get project status options
     */
    public static function getStatusOptions()
    {
        return [
            'active' => 'Activo',
            'completed' => 'Completado',
            'suspended' => 'Suspendido',
            'cancelled' => 'Cancelado',
        ];
    }
}
