<?php

namespace App\Http\Resources;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    { 

        return [
            'id' => $this->id,
            'user' => User::find($this->user_id),
            'category' => Category::find($this->category_id),
            'title' => $this->title,
            'content' => $this->content,

        ];
    }
}
