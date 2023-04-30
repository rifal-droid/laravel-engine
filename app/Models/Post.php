<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "By: T.Rifal Aulia",
            "body" => " Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt officiis exercitationem eaque excepturi reiciendis inventore reprehenderit alias ad voluptates quos labore quisquam, est hic incidunt deleniti accusantium corporis nostrum consequatur quas nam enim praesentium maiores fugit iste! Repellendus molestiae quis saepe dolorum quam, reiciendis modi natus labore sed necessitatibus amet unde soluta ipsa quo nostrum corrupti vitae sint est tempore dolores corporis impedit culpa eveniet odit? Beatae, perspiciatis. Tenetur fugiat ea molestias provident ipsum sequi praesentium impedit delectus corrupti mollitia?"
        ],
     [
            "title" => "Judul Post kedua",
            "slug" => "judul-post-kedua",
            "author" => "By: raif",
            "body" => " 
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, adipisci est? In sapiente ut repellendus nostrum deleniti necessitatibus aliquam assumenda accusamus perspiciatis eligendi cupiditate, ipsam provident praesentium quis fuga. Aut laborum molestias accusamus cum nesciunt velit quas incidunt veritatis? Perspiciatis, tempora rerum a corrupti optio nam eos adipisci magnam facilis officiis accusamus sapiente voluptatibus molestiae eveniet consectetur praesentium. Molestias facilis obcaecati, quam praesentium quidem expedita nobis earum pariatur recusandae natus corporis illum unde, libero aspernatur beatae quod consectetur veritatis dicta officiis? Iure, deserunt cumque incidunt repellat id autem neque mollitia dolorem ea facere? Animi, voluptatibus earum ut porro libero laudantium."
            
        ],
     [
            "title" => "Judul Post ketiga",
            "slug" => "judul-post-ketiga",
            "author" => "by: furqan",
            "body" => " 
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia totam non numquam nulla commodi magnam doloribus? Molestiae quisquam maxime neque, ea ullam unde soluta iusto impedit sit odio, minima saepe hic harum, libero a! Exercitationem praesentium quasi et explicabo. Quidem facere repellendus rerum dignissimos deleniti at nesciunt impedit eos similique reprehenderit ut eum magnam, ipsam voluptates, laborum rem distinctio. Rerum mollitia voluptatem voluptas quas recusandae dolorum provident ratione unde amet, similique quos aperiam numquam quam modi. Culpa delectus ipsa aperiam enim odio nam asperiores corporis error, minima earum labore totam deserunt possimus ducimus, quam natus explicabo alias, eius officiis harum amet nihil. Voluptas fuga natus deserunt praesentium. Dolorum temporibus sequi vero adipisci numquam quia perferendis, corrupti repellendus ipsa, voluptas recusandae."
            
        ]
     ];

     public static function all(){
        return self::$blog_posts;
     }

     public static function find($slug)
     {
        $posts = self::$blog_posts;
        $post = null;
        foreach ($posts as $p) {
            if ($p["slug"] === $slug) {
                $post = $p;
                break;
            }
        }
        return $post;
     }
}
