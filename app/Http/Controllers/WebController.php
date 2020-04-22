<?php

namespace App\Http\Controllers;

use App\portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{
    public function index()
    {
        $jobs = portfolio::orderBy('created_at', 'DESC')->limit(4)->get();
        $posts = DB::table('posts')
            ->join('users', 'posts.author', '=', 'users.id')
            ->select('posts.uri', 'posts.title', 'posts.subtitle', 'posts.cover', 'posts.content', 'posts.created_at', 'users.name')
            ->limit(6)
            ->get();
        $head = $this->seo->render(
            env('APP_NAME') . ' - Agência Digital',
            'Desenvolvimento de aplicativos, social media, geração de fluxo de vendas para ecommerce.',
            url(env('APP_URL')),
            asset('front/assets/images/solutionstec.svg')
        );
        return view('front.home', [
            'jobs' => $jobs,
            'posts' => $posts,
            'head' => $head
        ]);
    }

    //exibe a página sobre
    public function aboutUs()
    {
        $head = $this->seo->render(
            env('APP_NAME') . ' - Sobre Nós',
            'A SolutionsTec foi fundada em 2014 como uma empresa de desenvolvimento de sites em Pernambuco, Brasil',
            url(env('APP_URL')),
            asset('front/assets/images/danielle-macinnes-222441-unsplash.jpg')
        );
        return view('front.about', [
            'head' => $head
        ]);
    }

    //Exibe a página de contato
    public function contact()
    {
        $head = $this->seo->render(
            env('APP_NAME') . ' - Contato',
            'Entre em contato e inicie o suscesso da sua empresa',
            url(env('APP_URL')),
            asset('front/assets/images/map.png')
        );
        return view('front.contact', [
            'head' => $head
        ]);
    }

    //página do idealizador da empresa
    public function creator()
    {
        $head = $this->seo->render(
            env('APP_NAME') . ' - ' . env('FOUNDER'),
            'Acreditar que tudo é possível quando você tem fé no que você é capaz.',
            url(env('APP_URL')),
            asset('front/assets/images/Paulo-Dantas.jpg')
        );
        return view('front.creator', [
            'head' => $head
        ]);
    }

    //Dispara o email de página de contato
    public function sendMail(Request $request)
    {
        $rules = [
            'name' => 'required|min:3|max:40',
            'email' => 'required|email',
            'subject' => 'required|max:120',
            'field' => 'required|min:5',
        ];

        $message = [
            'name.required' => "Por favor, insira seu nome.",
            'name.min' => "Insira um nome válido!",
            'name.max' => "Insira um nome válido!",
            'email.required' => "Por favor, insira seu e-mail.",
            'email.email' => "Por favor, insira um e-mail válido!",
            'subject.required' => "Por favor, insira o assunto.",
            'field.required' => "Por favor, insira sua mensagem.",
            "field.min" => "Sua mensagem deve conter algumas palavras.",
        ];

        if ($request->validate($rules, $message)) {

            $data = [
                'reply_name' => $request->name,
                'reply_email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->field,
            ];

            Mail::send(new Contact($data));
            Session::flash('success', "<div class='w-form-success'>Mensagem enviada com succeso!</div>");
            return redirect('contato');
        } else {
            return redirect('contato');
        }


    }
}
