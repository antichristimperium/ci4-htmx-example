<?php

namespace App\Controllers;

use App\Models\NewsModel;

class HTMXController  extends BaseController
{
    public function index()
    {
        return view('htmx_page');
    }

    public function list()
    {
        $model = model(NewsModel::class);
        $data['object_list'] = $model->getNews();
        return view('list', $data);
    }

    public function create()
    {
        helper('form');
        $post = $this->request->getPost(['title',]);
        $model = model(NewsModel::class);
        $model->save([
            'title' => $post['title'],
        ]);
		
		# htmx.on(trigger) in client side
        $json = json_encode(
			array("SaveRecord" => array(
				"title" => "Registro almacenado",
			)
		));

        header("HX-Trigger: ".$json."");
    }

    public function delete($id=0) {
        if ($id > 0) {
            $model = model(NewsModel::class);
            $model->where('id', $id)->delete();

            $json = json_encode(
                array("SaveRecord" => array(
                    "title" => "Registro Eliminado",
                )
            ));
    
            header("HX-Trigger: ".$json."");
        }
    }
}