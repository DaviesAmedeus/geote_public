<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class TextWidget extends Model
{
    use HasFactory;

    public function getTitle(string $key): string
    {
        $widget = Cache::remember("widget_{$key}", 60, function () use ($key) {
            return TextWidget::query()
                ->where('key', '=', $key)
                ->where('is_active', '=', true)
                ->first();
        });


        if($widget){
          return $widget->title;
        }

        return '';
    }


    public function getContent(string $key): string
    {
        $widget =  Cache::get('text-widget-' . $key, function () use ($key) {
            return TextWidget::query()
                ->where('key', '=', $key)
                ->where('is_active', '=', true)
                ->first();
        });

        if($widget){
            return $widget->content;
        }

        return '';
    }
}
