<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ConexoAnswerRequest;
use App\Repositories\Interfaces\ConexoRepositoryInterface;

class ConexoController extends Controller
{

    private $colors;
    public function __construct(
        private ConexoRepositoryInterface $conexoRepository
    ) {
        $this->colors = $this->conexoRepository->getColors();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ConexoAnswerRequest $request)
    // public function store(Request $request)
    {
        $conexo = $this->conexoRepository->createGame($request->date('date'));
        $categories = [];
        foreach ($request->input('groups') as $group) {
            $category = $this->conexoRepository->createGameCategory($conexo, [
                'group_id' => $this->colors[$group['color']],
                'label' => $group['label']
            ]);

            foreach ($group['words'] as $word) {

                $this->conexoRepository->createGameAnswers($conexo, [
                    'category_id' => $category->id,
                    'label' => $word
                ]);
            }
            array_push($categories, $category);
        }
        return $categories;
        return $conexo;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
