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
        return $this->course->findOrFail($id);
    }

    public function store(Request $request): JsonResponse
    {
        $this->course->create($request->all());

        return response()
            ->json([
                'data' => [
                    'message' => 'Curso criado com sucesso!'
                ]
            ]);
    }

    public function update($id, Request $request): JsonResponse
    {
         $this->course->find($id)
             ->update($request->all());

        return response()
            ->json([
                'data' => [
                    'message' => 'Curso atualizado com sucesso!'
                ]
            ]);
    }

    public function destroy($id): JsonResponse
    {
        $this->course->find($id)
            ->deleteOrFail();

        return response()
            ->json([
                'data' => [
                    'message' => 'Curso removido com sucesso!'
                ]
            ]);
    }

}
