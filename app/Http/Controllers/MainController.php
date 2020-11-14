<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public $base = "storage/dat.json";

    public function index()
    {
        $dataJson = file_get_contents($this->base);
        $data = json_decode($dataJson);
        return view('/home', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataJson = file_get_contents($this->base);
        $data = json_decode($dataJson);
        var_dump(request()->only('title','theme','content'));

        $new = (object)[
            'title' => $request->name,
            'slug' => Str::slug($request->name),
            'theme' => $request->tema,
            'datetime' => date('Y-m-d H:i:s'),
            'content' => $request->content,
            'gambar' => md5($request->name) . '.' . $request->file('gambar')->getClientOriginalExtension()
        ];
        $request->file('gambar')->move('storage/home/', $new->gambar);
        array_push($data, $new);
        
        file_put_contents($this->base, json_encode($data,JSON_PRETTY_PRINT));
        return redirect(route('home.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dataJson = file_get_contents($this->base);
        $datadata = json_decode($dataJson);
        $data = [];
        foreach ($datadata as $data1) {
            if ($data1->slug == $id) {
                $data = $data1;
                break;
            }
        }
        return view('detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataJson = file_get_contents($this->base);
        $datadata = json_decode($dataJson);
        $data = [];
        foreach ($datadata as $data1) {
            if ($data1->slug == $id) {

                $data = $data1;
                break;
            }
        }
        return view('ubah', compact('data'));
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
        $dataJson = file_get_contents($this->base);
        $datadata = json_decode($dataJson);
        for ($i = 0; $i < count($datadata); $i++) {
            if ($datadata[$i]->slug == $id) {
                $datadata[$i]->title = $request->name;
                $datadata[$i]->theme = $request->tema;
                $datadata[$i]->content = $request->content;
                if ($request->file('gambar')) {
                    $request->file('gambar')->move('storage/home/', $datadata[$i]->gambar);
                }
                $datadata[$i]->datetime = date('Y-m-d H:i:s');
                break;
            }
        }
        file_put_contents($this->base, json_encode($datadata,JSON_PRETTY_PRINT));
        return redirect(route('home.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dataJson = file_get_contents($this->base);
        $datadata = json_decode($dataJson);
        $new = [];
        foreach ($datadata as $data1) {
            if ($data1->slug == $id) {
                continue;
            }
            array_push($new, $data1);
        }
        file_put_contents($this->base, json_encode($new));
        return redirect(route('home.index'));
        }
}
