<?php
 
namespace App\Models;
 
use App\Models\Acessos\User;
use App\Models\Clientes\Clientes;
use App\Scopes\ClienteFilter;
use App\Services\TrackerLogs\TransactionService;
use Eloquent;
use Illuminate\Database\Eloquent\Model;
 
/**
* @mixin Eloquent
*/
class BaseModel extends Model
{
  protected static $idUser;
  protected static $idCliente;
 
  protected static function boot()
  {
    parent::boot();
  }
 
 
  public function createdBy()
  {
    return $this->belongsTo(User::class, 'id_created_by');
  }
 
  public function updatedBy()
  {
    return $this->belongsTo(User::class, 'id_updated_by');
  }
 
  public function deletedBy()
  {
    return $this->belongsTo(User::class, 'id_deleted_by');
  }
 
  public function cliente()
  {
    return $this->belongsTo(Clientes::class, 'id_cliente');
  }
}