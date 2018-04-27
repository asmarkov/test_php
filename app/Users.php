<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    public static function joinTables() :Builder
    {
        return self::query()->select("users.name","cities.name as city_name","qualifications.name as qualifications_name")
            ->join('qualifications', 'users.qualification_id', '=', 'qualifications.id')
            ->join('users_cities', 'users_cities.user_id', '=', 'users.id')
            ->join('cities', 'users_cities.city_id', '=', 'cities.id');
    }

    public static function groupData(Builder $users)
    {
        $users = $users->get()->groupBy("name");
        foreach ($users as $key => $collection) {
            $users[$key] = $collection->groupBy("qualifications_name");
        }
        return $users;
    }

    public static function getUsersIdByRequest($parameters)
    {
        $users = Users::query();
        if (isset($parameters["cities"]) && !empty($parameters["cities"]) && is_array($parameters["cities"])) {
            $users = $users->join('users_cities', 'users_cities.user_id', '=', 'users.id');
            $users = $users->whereIn("users_cities.city_id", $parameters["cities"]);
        }
        if (isset($parameters["qualification"]) && !empty($parameters["qualification"]) && is_array($parameters["qualification"])) {
            $users = $users->whereIn("users.qualification_id", $parameters["qualification"]);
        }
        return $users->pluck("users.id");
    }
}
