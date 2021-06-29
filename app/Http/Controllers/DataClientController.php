<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataClient;
use Carbon\Carbon;
use GuzzleHttp\Psr7\Message;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\QueryException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\VarDumper\Cloner\Data;

class DataClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = DataClient::orderBy('tanggal', 'DESC')->get();
        $response = [
            'message' => 'List data Client order by time',
            'data' => $client
        ];

        return response()->json($response, Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => ['required'],
            'tanggal' => ['required'],
            'no_telp' => ['required'],
            'jasa' => ['required'],
            'no_invoice' => ['required'],
            'status' => ['required', 'in:deal,konsultasi']

        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $client = DataClient::create($request->all());
            $response = [
                'message' => 'client created',
                'data' => $client
            ];

            return response()->json($response, Response::HTTP_CREATED);
        } catch (QueryException $e) {
            return response()->json([
                'message' => "Failed" . $e->errorInfo
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = DataClient::findOrFail($id);
        $response = [
            'message' => 'Detail of client resource',
            'data' => $client
        ];

        return response()->json($response, Response::HTTP_OK);
    }
    /**
     *
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function baru()
    {
        $date = \Carbon\Carbon::today()->subDays(30);
        $client = DataClient::where('tanggal', '>=', $date)->get();
        $response = [
            'message' => 'Last Client',
            'data' => $client
        ];
        return response()->json($response, Response::HTTP_OK);
    }
    /**
     *
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function deal(Request $request)
    {
        $client = \DB::table('data_clients')
            ->select([
                \DB::raw('count(*) as jumlah'),
                \DB::raw('DATE(tanggal) as tanggal'),
                \DB::raw('status as status'),
            ])
            ->groupBy('tanggal', 'status')
            ->whereRaw('status = ? ', 'deal')
            ->whereRaw('DATE(tanggal) >= ?', [date('Y-m-d', strtotime('-7days'))])
            ->orderBy('tanggal', 'ASC')
            ->get()
            ->toArray();
        $response = [
            'data' => $client
        ];
        return response()->json($response, Response::HTTP_OK);
    }
    /**
     *
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function dealfull(Request $request)
    {
        $client = \DB::table('data_clients')
            ->select([
                \DB::raw('count(*) as jumlah'),
                \DB::raw('DATE(tanggal) as tanggal'),
                \DB::raw('status as status'),
            ])
            ->groupBy('tanggal', 'status')
            ->whereRaw('status = ? ', 'deal')
            ->whereRaw('DATE(tanggal) >= ?', [date('Y-m-d', strtotime('-30days'))])
            ->orderBy('tanggal', 'ASC')
            ->get()
            ->toArray();
        $response = [
            'data' => $client
        ];
        return response()->json($response, Response::HTTP_OK);
    }





    /**
     * Display the specified resource.
     *
     * @param  string  $name
     * @return \Illuminate\Http\Response
     */
    public function search($name)
    {
        $client = DataClient::where("nama", "like", "%" . $name . "%")->get();
        $response = [
            'message' => 'Client',
            'data' => $client
        ];

        return response()->json($response, Response::HTTP_OK);
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
        $client = DataClient::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'nama' => ['required'],
            'no_telp' => ['required'],
            'jasa' => ['required'],
            'no_invoice' => ['required'],
            'status' => ['required']
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $client->update($request->all());
            $response = [
                'message' => 'client update',
                'data' => $client
            ];

            return response()->json($response, Response::HTTP_OK);
        } catch (QueryException $e) {
            return response()->json([
                'message' => "Failed" . $e->errorInfo
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = DataClient::findOrFail($id);

        try {
            $client->delete();
            $response = [
                'message' => 'client deleted',
            ];

            return response()->json($response, Response::HTTP_OK);
        } catch (QueryException $e) {
            return response()->json([
                'message' => "Failed" . $e->errorInfo
            ]);
        }
    }
}
