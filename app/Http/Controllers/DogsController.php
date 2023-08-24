<?php

namespace App\Http\Controllers;

use App\Models\Dog;
use Illuminate\Http\Request;

/**
 *
 */
class DogsController extends Controller {

  /**
   * Display a listing of the resource.
   */
  public function index() {
    return \view('dog.index', [
      'dogs' => Dog::all(),
    ]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create() {
    return \view('dog.create', ['title' => 'Add new dog']);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request) {
    $data = $request->validate([
      'name' => 'required|max:18',
      'breed' => 'required|max:18',
      'height' => 'required|gt:0',
    ]);
    Dog::create($request->all());

    return \to_route('dogs');
  }

  /**
   * Display the specified resource.
   */
  public function show(Dog $dog) {
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Dog $dog) {
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Dog $dog) {
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Dog $dog) {
  }

}
