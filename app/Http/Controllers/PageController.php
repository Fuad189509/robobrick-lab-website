<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    private function getLanguage(Request $request)
    {
        $lang = $request->query('lang', config('robobrick.default_language'));
        return in_array($lang, ['id', 'en']) ? $lang : config('robobrick.default_language');
    }

    private function getWhatsAppLink($lang)
    {
        $message = config("robobrick.contact.{$lang}.whatsapp_message");
        $number = config('robobrick.whatsapp_numbers.primary');
        return 'https://wa.me/' . preg_replace('/[^0-9]/', '', $number) . '?text=' . urlencode($message);
    }

    public function home(Request $request)
    {
        $lang = $this->getLanguage($request);
        $config = config('robobrick');
        $seo = $config['seo'][$lang]['home'];
        $data = $config[$lang] ?? [];
        
        return view('pages.home', compact('lang', 'config', 'seo', 'data'));
    }

    public function about(Request $request)
    {
        $lang = $this->getLanguage($request);
        $config = config('robobrick');
        $seo = $config['seo'][$lang]['about'];
        $data = $config[$lang] ?? [];
        
        return view('pages.about', compact('lang', 'config', 'seo', 'data'));
    }

    public function program(Request $request)
    {
        $lang = $this->getLanguage($request);
        $config = config('robobrick');
        $seo = $config['seo'][$lang]['program'];
        $data = $config[$lang] ?? [];
        
        return view('pages.program', compact('lang', 'config', 'seo', 'data'));
    }

    public function services(Request $request)
    {
        $lang = $this->getLanguage($request);
        $config = config('robobrick');
        $seo = $config['seo'][$lang]['services'];
        $data = $config[$lang] ?? [];
        
        return view('pages.services', compact('lang', 'config', 'seo', 'data'));
    }

    public function legal(Request $request)
    {
        $lang = $this->getLanguage($request);
        $config = config('robobrick');
        $seo = $config['seo'][$lang]['legal'];
        $data = $config[$lang] ?? [];
        
        return view('pages.legal', compact('lang', 'config', 'seo', 'data'));
    }

    public function contact(Request $request)
    {
        $lang = $this->getLanguage($request);
        $config = config('robobrick');
        $seo = $config['seo'][$lang]['contact'];
        $data = $config[$lang] ?? [];
        $whatsappLink = $this->getWhatsAppLink($lang);
        
        return view('pages.contact', compact('lang', 'config', 'seo', 'data', 'whatsappLink'));
    }

    public function adminPreview(Request $request)
    {
        $lang = $this->getLanguage($request);
        $config = config('robobrick');
        $data = $config[$lang] ?? [];
        
        return view('pages.admin-preview', compact('lang', 'config', 'data'));
    }
}
