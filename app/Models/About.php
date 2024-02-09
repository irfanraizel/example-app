<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About
{
    private static $about = [
        [
            "title" => "Irfan Raizel",
            "name" => "IrfanRaizel",
            "slug" => "irfan-raizel",
            "email" => "irfanraizel@gmail.com",
            "image" => "irfan.jpg",
            "quote" => "I Want to be a SoftWare Engineer",
            "detail" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt nisi reiciendis cum est tempora tenetur error voluptate quis, ex magnam, nulla impedit! Magni veritatis eveniet dignissimos temporibus, culpa id hic numquam laboriosam qui tenetur maiores unde accusantium sequi repudiandae deleniti explicabo eius corrupti consequatur atque sunt, asperiores ipsum impedit. Cumque enim dolorem eligendi. Rerum, id ab, tempora quo quia dolorem laborum quisquam dolorum quaerat, optio ducimus praesentium culpa corrupti dolor blanditiis sint quas ullam reiciendis quod! In molestiae voluptatibus iure fugiat error. Alias dolor nulla sed, quod ipsa ipsum hic excepturi? Voluptas iusto, inventore aspernatur beatae dolorum quibusdam dicta repudiandae! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt nisi reiciendis cum est tempora tenetur error voluptate quis, ex magnam, nulla impedit! Magni veritatis eveniet dignissimos temporibus, culpa id hic numquam laboriosam qui tenetur maiores unde accusantium sequi repudiandae deleniti explicabo eius corrupti consequatur atque sunt, asperiores ipsum impedit. Cumque enim dolorem eligendi. Rerum, id ab, tempora quo quia dolorem laborum quisquam dolorum quaerat, optio ducimus praesentium culpa corrupti dolor blanditiis sint quas ullam reiciendis quod! In molestiae voluptatibus iure fugiat error. Alias dolor nulla sed, quod ipsa ipsum hic excepturi? Voluptas iusto, inventore aspernatur beatae dolorum quibusdam dicta repudiandae! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt nisi reiciendis cum est tempora tenetur error voluptate quis, ex magnam, nulla impedit! Magni veritatis eveniet dignissimos temporibus, culpa id hic numquam laboriosam qui tenetur maiores unde accusantium sequi repudiandae deleniti explicabo eius corrupti consequatur atque sunt, asperiores ipsum impedit. Cumque enim dolorem eligendi. Rerum, id ab, tempora quo quia dolorem laborum quisquam dolorum quaerat, optio ducimus praesentium culpa corrupti dolor blanditiis sint quas ullam reiciendis quod! In molestiae voluptatibus iure fugiat error. Alias dolor nulla sed, quod ipsa ipsum hic excepturi? Voluptas iusto, inventore aspernatur beatae dolorum quibusdam dicta repudiandae! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt nisi reiciendis cum est tempora tenetur error voluptate quis, ex magnam, nulla impedit! Magni veritatis eveniet dignissimos temporibus, culpa id hic numquam laboriosam qui tenetur maiores unde accusantium sequi repudiandae deleniti explicabo eius corrupti consequatur atque sunt, asperiores ipsum impedit. Cumque enim dolorem eligendi. Rerum, id ab, tempora quo quia dolorem laborum quisquam dolorum quaerat, optio ducimus praesentium culpa corrupti dolor blanditiis sint quas ullam reiciendis quod! In molestiae voluptatibus iure fugiat error. Alias dolor nulla sed, quod ipsa ipsum hic excepturi? Voluptas iusto, inventore aspernatur beatae dolorum quibusdam dicta repudiandae!"
        ], [
            "title" => "BaeSuzy",
            "name" => "Bae Suzy",
            "slug" => "bae-suzy",
            "email" => "baesuzy@gmail.com",
            "image" => "suzy.jpg",
            "quote" => "I'm most popular korean actress",
            "detail" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt nisi reiciendis cum est tempora tenetur error voluptate quis, ex magnam, nulla impedit! Magni veritatis eveniet dignissimos temporibus, culpa id hic numquam laboriosam qui tenetur maiores unde accusantium sequi repudiandae deleniti explicabo eius corrupti consequatur atque sunt, asperiores ipsum impedit. Cumque enim dolorem eligendi. Rerum, id ab, tempora quo quia dolorem laborum quisquam dolorum quaerat, optio ducimus praesentium culpa corrupti dolor blanditiis sint quas ullam reiciendis quod! In molestiae voluptatibus iure fugiat error. Alias dolor nulla sed, quod ipsa ipsum hic excepturi? Voluptas iusto, inventore aspernatur beatae dolorum quibusdam dicta repudiandae! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt nisi reiciendis cum est tempora tenetur error voluptate quis, ex magnam, nulla impedit! Magni veritatis eveniet dignissimos temporibus, culpa id hic numquam laboriosam qui tenetur maiores unde accusantium sequi repudiandae deleniti explicabo eius corrupti consequatur atque sunt, asperiores ipsum impedit. Cumque enim dolorem eligendi. Rerum, id ab, tempora quo quia dolorem laborum quisquam dolorum quaerat, optio ducimus praesentium culpa corrupti dolor blanditiis sint quas ullam reiciendis quod! In molestiae voluptatibus iure fugiat error. Alias dolor nulla sed, quod ipsa ipsum hic excepturi? Voluptas iusto, inventore aspernatur beatae dolorum quibusdam dicta repudiandae! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt nisi reiciendis cum est tempora tenetur error voluptate quis, ex magnam, nulla impedit! Magni veritatis eveniet dignissimos temporibus, culpa id hic numquam laboriosam qui tenetur maiores unde accusantium sequi repudiandae deleniti explicabo eius corrupti consequatur atque sunt, asperiores ipsum impedit. Cumque enim dolorem eligendi. Rerum, id ab, tempora quo quia dolorem laborum quisquam dolorum quaerat, optio ducimus praesentium culpa corrupti dolor blanditiis sint quas ullam reiciendis quod! In molestiae voluptatibus iure fugiat error. Alias dolor nulla sed, quod ipsa ipsum hic excepturi? Voluptas iusto, inventore aspernatur beatae dolorum quibusdam dicta repudiandae! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt nisi reiciendis cum est tempora tenetur error voluptate quis, ex magnam, nulla impedit! Magni veritatis eveniet dignissimos temporibus, culpa id hic numquam laboriosam qui tenetur maiores unde accusantium sequi repudiandae deleniti explicabo eius corrupti consequatur atque sunt, asperiores ipsum impedit. Cumque enim dolorem eligendi. Rerum, id ab, tempora quo quia dolorem laborum quisquam dolorum quaerat, optio ducimus praesentium culpa corrupti dolor blanditiis sint quas ullam reiciendis quod! In molestiae voluptatibus iure fugiat error. Alias dolor nulla sed, quod ipsa ipsum hic excepturi? Voluptas iusto, inventore aspernatur beatae dolorum quibusdam dicta repudiandae! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt nisi reiciendis cum est tempora tenetur error voluptate quis, ex magnam, nulla impedit! Magni veritatis eveniet dignissimos temporibus, culpa id hic numquam laboriosam qui tenetur maiores unde accusantium sequi repudiandae deleniti explicabo eius corrupti consequatur atque sunt, asperiores ipsum impedit. Cumque enim dolorem eligendi. Rerum, id ab, tempora quo quia dolorem laborum quisquam dolorum quaerat, optio ducimus praesentium culpa corrupti dolor blanditiis sint quas ullam reiciendis quod! In molestiae voluptatibus iure fugiat error. Alias dolor nulla sed, quod ipsa ipsum hic excepturi? Voluptas iusto, inventore aspernatur beatae dolorum quibusdam dicta repudiandae!"
        ]
    ];

    public static function all() {
        return self::$about;
    }

    public static function title($slug) {
        $titles = self::$about;
        $title = [];
        foreach($titles as $t){
            if($t['slug'] == $slug) {
                $title = $t;
            }
        }
        return $title['title'];
    }

    public static function find($slug) {
        $items = self::$about;
        $item = [];
        foreach($items as $it){
            if($it['slug'] == $slug) {
                $item = $it;
            }
        }
        return $item;
    }
}
