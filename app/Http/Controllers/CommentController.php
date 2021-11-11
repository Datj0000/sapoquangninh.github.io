<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function all_comment()
    {
        $comment = Comment::all();
        return view('admin.manage.comment')->with('comment', $comment);
    }
    public function fetchdata()
    {
        $all_comment = Comment::orderby('comment_location', 'asc')->get();
        return response()->json([
            "data" => $all_comment,
        ]);
    }
    public function add_comment(Request $request)
    {
        $data = $request->all();
        $comment = new Comment();
        $comment->comment_name = $data['comment_name'];
        $comment->comment_role = $data['comment_role'];
        $comment->comment_desc = $data['comment_desc'];
        $get_image = $request->file('comment_image');
        $check = Comment::where('comment_name', $data['comment_name'])
            ->where('comment_role', $data['comment_role'])->first();
        if ($check) {
            echo 0;
        } else {
            if ($get_image) {
                $get_name_image = $get_image->getClientOriginalName();
                $name_image = current(explode('.', $get_name_image));
                $new_image =  $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
                $get_image->move('uploads/khachhang', $new_image);
                $comment->comment_image = $new_image;
                $result = $comment->save();
                if ($result) {
                    echo 1;
                }
            }
        }
    }
    public function view_comment($comment_id)
    {
        $view_comment = Comment::where('comment_id', $comment_id)->first();
        return response()->json([
            'data' => $view_comment,
        ]);
    }
    public function update_comment(Request $request, $comment_id)
    {
        $data = $request->all();
        $comment = Comment::where('comment_id', $comment_id)->first();
        $comment->comment_name = $data['comment_name'];
        $comment->comment_role = $data['comment_role'];
        $comment->comment_desc = $data['comment_desc'];
        $get_image = $request->file('comment_image');
        $check = $comment::where('comment_name', $data['comment_name'])
            ->where('comment_role', $data['comment_role'])
            ->where('comment_id', '!=', $comment_id)->first();
        if ($check) {
            echo 0;
        } else {
            if ($get_image) {
                if ($comment->comment_image) {
                    $destinationPath = 'uploads/khachhang/' . $comment->comment_image;
                    if (file_exists($destinationPath)) {
                        unlink($destinationPath);
                    }
                }
                $get_name_image = $get_image->getClientOriginalName();
                $name_image = current(explode('.', $get_name_image));
                $new_image =  $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
                $get_image->move('uploads/khachhang', $new_image);
                $comment->comment_image = $new_image;
                $result = $comment->save();
                if ($result) {
                    echo 1;
                }
            } else {
                $comment->comment_image = $comment->comment_image;
                $result = $comment->save();
                if ($result) {
                    echo 1;
                }
            }
        }
    }
    public function delete_comment($comment_id)
    {
        $comment = Comment::where('comment_id', $comment_id)->first();
        $destinationPath = 'uploads/khachhang/' . $comment->comment_image;
        if (file_exists($destinationPath)) {
            unlink($destinationPath);
        }
        $comment->delete();
    }
    public function arrange_comment(Request $request)
    {
        $data = $request->all();
        $cate_id = $data["page_id_array"];

        foreach($cate_id as $key => $value){
            $comment = Comment::find($value);
            $comment->comment_location = $key;
            $comment->save();
        }
    }
}
