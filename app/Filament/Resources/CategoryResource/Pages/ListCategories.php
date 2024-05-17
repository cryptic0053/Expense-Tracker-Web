<?php

namespace App\Filament\Resources\CategoryResource\Pages;

use App\Filament\Resources\CategoryResource;
use Filament\Resources\Pages\ListRecords;
// use Illuminate\Database\Eloquent\Builder;
// use App\Models\Category;

class ListCategories extends ListRecords
{
    protected static string $resource = CategoryResource::class;

    // Not Required
    // protected function getTableQuery(): Builder
    // {
    //     return Category::query()->where('user_id', auth()->id());
    // }

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
