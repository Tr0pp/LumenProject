<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use \Illuminate\Http\JsonResponse;

class CourseController extends Controller
{

    private Course $course;

    public function __construct(Course $course)
    {
        $this->course = $course;
    }

    public function index()
    {
        return $this->course->paginate(10);
    }

    public function show($id)
    {
        return $this->course->find($id);
    }

    public function store(Request $request): JsonResponse
    {
        $this->course->create($request->all());

        return response()->json(
            ['data' =>
                ['message' => 'Curso criado com sucesso.']
            ]);
    }

    public function update($id)
    {

    }

    public function delete($id)
    {

    }

}
