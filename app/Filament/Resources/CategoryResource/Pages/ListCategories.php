<?php

namespace App\Filament\Resources\CategoryResource\Pages;

use App\Filament\Resources\CategoryResource;
use Filament\Resources\Pages\ListRecords;
// use Illuminate\Database\Eloquent\Builder;
// use App\Models\Category;

class ListCategories extends ListRecords
{
    protected static string $resource = CategoryResource::class;

	/**
	 * @return string
	 */
	public static function getResource(): string {
		return self::$resource;
	}

	/**
	 * @param string $resource
	 */
	public static function setResource(string $resource) {
		self::$resource = $resource;
		return;
	}
}
