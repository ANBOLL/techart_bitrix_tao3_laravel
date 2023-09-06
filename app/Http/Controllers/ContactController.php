<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function contact(){
        return view('contact');
    }

    public function contactPost(Request $request){

        Mail::send('email', [
                'name' => $request->get('name'),
                'comment' => $request->get('comment') ],
                function ($message) {
                        $message->from('boldyrev@techart.ru');
                        $message->to('boldyrev@techart.ru', 'Your Name')
                                ->subject('Вопрос ребром');
        });

        return back()->with('success', 'Спасибо за сообщение, ваш вопрос был отправлен сотрудникам компании!');
    }
}
