<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $city // 'LA' or 'Tokio'
 * @property int $nitro
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 */
class Pilot extends Model
{
    public static $rules = [
        'name' => 'required|string|max:255',
        'city' => 'required|string|in:LA,Tokio',
        'nitro' => 'required|numeric|min:0',
    ];

    protected $fillable = [
        'name',
        'city',
        'nitro',
    ];

    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function setId(int $id): void
    {
        $this->attributes['id'] = $id;
    }

    public function getName(): string
    {
        return $this->attributes['name'];
    }

    public function setName(string $name): void
    {
        $this->attributes['name'] = $name;
    }

    public function getCity(): string
    {
        return $this->attributes['city'];
    }

    public function setCity(string $city): void
    {
        $this->attributes['city'] = $city;
    }

    public function getNitro(): int
    {
        return $this->attributes['nitro'];
    }

    public function setNitro(int $nitro): void
    {
        $this->attributes['nitro'] = $nitro;
    }

    public function getCreatedAt(): ?Carbon
    {
        return $this->attributes['created_at'];
    }

    public function getUpdatedAt(): ?Carbon
    {
        return $this->attributes['updated_at'];
    }
}
