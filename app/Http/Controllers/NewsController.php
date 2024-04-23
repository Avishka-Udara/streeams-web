<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class NewsController extends Controller
{
    public function index(): View
    {
        $news = News::latest()->paginate(5);

        return view('admin.news.index',compact('news'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

  

    public function create(): View
    {
        return view('admin.news.create');
    }

  
    public function store(Request $request): RedirectResponse

    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        News::create($input);

        return redirect()->route('admin.news.index')
                        ->with('success','News created successfully.');
    }

  

    public function show(News $news): View
    {
        return view('admin.news.show',compact('news'));
    }

    

    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    
    public function update(Request $request, News $news): RedirectResponse
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);
    

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }

        $News->update($input);

        return redirect()->route('admin.news.index')
                        ->with('success','News updated successfully');
    }

    public function destroy(News $news): RedirectResponse
    {
        $news->delete();

        return redirect()->route('admin.news.index')
                        ->with('success','News deleted successfully');
    }
}
