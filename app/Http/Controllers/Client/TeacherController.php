<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;


class TeacherController extends Controller
{
    public function index(Request $request)
    {
        $query = Teacher::query();
        $skills = $request->skills ?? [];
        $origin = $request->origin ?? [];
        $price = $request->price ?? 2000;
        if ($skills != []) {
            $query = $query->whereHas("skills", function (Builder $builder) use ($skills) {
                $builder->whereIn("id", $skills);
            });
        }
//        if ($skills != []) {
//            foreach ($skills as $skill) {
//                $query = $query->whereIn("skill_id", $skill);
//            }
//        }
        if ($price != null) {
            $query = $query->where("users.price", "<=", $price * 1000);
        }
        if ($origin != []) {
            $query->whereIn("origin", $origin);
        }

        $bag = [
            'page' => $request->page ?? 1,
            'teachers' => $query->offset(($request->page - 1) * 10 + 1)->take(10)->get(),
            'skills' => Skill::all(),
            'select_skills' => $skills,
            'select_origin' => $origin,
            'price' => $price
        ];
        $_SESSION["teachers_bag"] = $bag;
//        dd($query->get());
        return view("teachers", $bag);
    }
}
