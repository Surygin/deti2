<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;

class ckUpload extends Controller
{
    public function ckUpload(Request $request) {

        $file = $request->upload;
        // $fileOriginName = $file->getClientOriginalName();
        // dd($fileOriginName);
        // $fileExtantion = end(explode(".", $fileOriginName));
        // dd($fileExtantion);
        $fileName = asset('uploads/posts/img-') . uniqid() .''.$file->getClientOriginalName();
        $file->move('uploads/posts', $fileName);
        $url = asset('uploads/posts/') . $fileName;
        $callback = $request->input('CKEditorFuncNum');
        echo '<script type="text/javascript">window.parent.CKEDITOR.tools.callFunction("'.$callback.'", "'.$fileName.'", "Success" );</script>';

    }

    public function upload(Request $request){

            $this->validate($request, [
                'name' => 'required',
                'content' => 'required'
            ]);

            $content = $request->content;
            $dom = new \DomDocument();
            $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $imageFile = $dom->getElementsByTagName('imageFile');

            foreach($imageFile as $item => $image){
                $data = $image->getAttribute('src');
                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);
                $imgeData = base64_decode($data);
                $image_name= "/uploads/posts/" . time().$item.'.png';
                $path = public_path() . $image_name;
                file_put_contents($path, $imgeData);
                
                $image->removeAttribute('src');
                $image->setAttribute('src', $image_name);
            }

            $content = $dom->saveHTML();
            $fileUpload = new Post;
            $fileUpload->name = $request->name;
            $fileUpload->content = $content;
            $fileUpload->save();

            dd($content);
        }

    }

