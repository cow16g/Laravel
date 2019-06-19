<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class FooController extends Controller
{
    public function foo1()
    {
        return 'Foo1!!';
    }

    public function foo2()
    {
        return view('foo.foo2',[
            'title' => 'foo2',
            'body'  => 'My First Laravel.'
        ]);
    }

    public function foo3()
    {
        $user = User::find(1);
        return view('foo.foo3',[
            'user' => $user
        ]);
    }

    public function foo4()
    {
        return view('foo.foo4', [
            'title' => 'foo4',
            'body'  => 'Hello World!'
        ]);
    }
}
