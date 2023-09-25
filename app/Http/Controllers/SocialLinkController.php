<?php

namespace App\Http\Controllers;

use App\Models\SocialLink;
use Illuminate\Http\Request;

class SocialLinkController extends Controller
{
    public function index()
{
    $socialLinks = SocialLink::all();
    return view('social_links.index', compact('socialLinks'));
}

public function create()
{
    return view('social_links.create');
}

public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'url' => 'required|string|url',
    ]);

    SocialLink::create($validatedData);

    return redirect()->route('social-links.index')->with('success', 'Social link created successfully');
}

    public function edit(SocialLink $socialLink)
    {
        return view('social_links.edit', compact('socialLink'));
    }

public function update(Request $request, SocialLink $socialLink)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'url' => 'required|string|url',
    ]);

    $socialLink->update($validatedData);

    return redirect()->route('social-links.index')->with('success', 'Social link updated successfully');
}

    public function destroy(SocialLink $socialLink)
    {
        $socialLink->delete();

        return redirect()->route('social-links.index')->with('success', 'Social link deleted successfully');
    }
}
