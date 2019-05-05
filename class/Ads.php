<?php

class Ads implements Ad
{
    public static $data;
    
    public function __construct()
    {
        if (!file_exists(DATA.'data.json')) {
            file_put_contents(DATA.'data.json', json_encode([]));
        }
        self::$data = json_decode(file_get_contents(DATA.'data.json'), JSON_OBJECT_AS_ARRAY);
    }
    
    public function index()
    {
        $all = [];
        foreach(self::$data as $val) {
            $id = $val['id'];
            $all[$id] = [
                'title' => file_get_contents(DATA.$id.'_title'),
                'content' => file_get_contents(DATA.$id.'_content'),
                'id' => $id
            ];
        }
       
        require VIEW.'index.php';

    }
    public function create()
    {
        require VIEW.'create.php';
    }

    public function save(array $request){
        $title = $request['title'];
        $content = $request['content'];

        end(self::$data);
        $id = key(self::$data);
        $id++;

        self::$data[$id]= ['title'=>$title, 'id'=>$id];

        file_put_contents(DATA.'data.json', json_encode(self::$data));
        file_put_contents(DATA.$id.'_title', $title);
        file_put_contents(DATA.$id.'_content', $content);

        App::redirect('index');

    }
    public function edit($id)
    {
        $AD = [
            'title' => file_get_contents(DATA.$id.'_title'),
            'content' => file_get_contents(DATA.$id.'_content'),
            'id' => $id
        ];
        
        require VIEW.'edit.php';
    }
    public function update($id, array $request)
    {
        $title = $request['title'];
        $content = $request['content'];

        self::$data[$id]= ['title'=>$title, 'id'=>$id];

        file_put_contents(DATA.'data.json', json_encode(self::$data));
        file_put_contents(DATA.$id.'_title', $title);
        file_put_contents(DATA.$id.'_content', $content);

        App::redirect('index');
    }
    public function destroy($id)
    {
        unset(self::$data[$id]);
        file_put_contents(DATA.'data.json', json_encode(self::$data));
        unlink(DATA.$id.'_title');
        unlink(DATA.$id.'_content');
        App::redirect('index');
    }
}