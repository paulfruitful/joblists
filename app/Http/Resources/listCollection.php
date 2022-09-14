<?php
namespace App\Http\Resources;
 
use Illuminate\Http\Resources\Json\JsonResource;
 
class listCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'title'=>$this->title,
            'company'=>$this->company,
            'description'=>$this->description,
            'website'=>$this->website,
            'email'=>$this->email,
            'location'=>$this->location

        ];
    }
}
