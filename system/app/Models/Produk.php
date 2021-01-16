<?php 

namespace App\Models;

class Produk extends Model{
	protected $table = 'produk';
	
    //Date Mutator
	//protected $dates = ['created_at'];

	protected $casts = [
		'created_at' => 'datetime',
		'updated_at' => 'datetime',
		'harga' => 'decimal:2'
		
	];

	function seller(){
		return $this->belongsTo(User::class, 'id_user');
	}

	function getHargaStringAttribute(){
		return "Rp. ".number_format($this->attributes['harga']);
	}


    //Acessor
	//function getHargaAttribute(){
		//return "Rp. ".number_format($this->attributes['harga']);
	//}

	//function getTanggalProduksiAttribute(){
		//$tanggal = $this->created_at;
		//return strftime("%d %b %y", strtotime($this->created_at));
	//}



} 