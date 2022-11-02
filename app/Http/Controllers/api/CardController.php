<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Card;
use http\Client\Response;
use Illuminate\Http\Request;
use mysql_xdevapi\Exception;

class CardController extends Controller
{
    private static string $CARD_STATUS_AVAILABLE= "AVAILABLE";
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $record = Card::all();
        return response()->json($record);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        try{
            $card = Card::create([
                'CardID'=> $request->CardID,
                'CardStatus'=>self::$CARD_STATUS_AVAILABLE,
            ]);
        }catch (Exception $exception)
        {
            return response()->json([
                'success'=>false,
                'message'=>$exception->getMessage()
        ]);
        }
        return response()->json([
            'success'=>true,
            'message'=> "Create card succesfuly"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
