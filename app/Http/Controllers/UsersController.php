<?php

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Users $users
     * @return \Illuminate\Http\Response
     */
    public function show(Users $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Users $users
     * @return \Illuminate\Http\Response
     */
    public function edit(Users $users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Users $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Users $users)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Users $users
     * @return \Illuminate\Http\Response
     */
    public function destroy(Users $users)
    {
        //
    }


    public function ProfileInfo()
    {
        auth()->loginUsingId(1);
        $user = \App\Users::where('id', auth()->user()->id)->with('profile')->first();
        dd($user->toarray());
    }

    public function UserInfo($id)
    {
        $profile = \App\Profile::where('id', $id)->with('user')->first();
        dd($profile->toarray());
    }

    public function UserPost($id)
    {
        $userPosts = \App\Users::where('id', $id)->with('posts')->first();
        foreach ($userPosts->posts as $post) {
            echo $post->title . '</br>';
        }
    }

    public function AllPost()
    {
        $posts = \App\Posts::with('user')->get();
        foreach ($posts as $post) {
            echo $post->title . 'user : ' . $post->user->username . '<br>';
        }
    }

    public function UserProduct()
    {
        auth()->loginUsingId(1);
        $userProduct = \App\Users::where('id', auth()->user()->id)->with('product')->first();
        foreach ($userProduct->product as $product) {
            echo $product->title . $product->price;
            echo $userProduct->username;
        }
    }

    public function HowUserShopping($id)
    {
        $product = \App\Product::where('id', $id)->with('user')->first();
        dd($product->toarray());
    }


}
