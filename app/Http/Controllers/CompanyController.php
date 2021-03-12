<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use App\Category;
use App\Company;
use App\Employee;
use App\Http\Requests\PostsCreateRequest;
use App\Photo;
use Illuminate\Support\Facades\Auth;

if (version_compare(PHP_VERSION, '7.2.0', '>=')) {
// Ignores notices and reports all other kinds... and warnings
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
// error_reporting(E_ALL ^ E_WARNING); // Maybe this is enough
}

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

         $AllCompanies = Company::paginate(1);



        return view('admin.companies.index', compact('AllCompanies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    //   $categories = Category::pluck('name','id')->all();


        return view('admin.companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostsCreateRequest $request)
    //  public function store(Request $request)
    {
        //
            $input = $request->all();
          //  $user = Auth::user();// login user

            if($file = $request->file('logo')){


            $name = time() . $file->getClientOriginalName();


            $file->move('images', $name);

          //  $photo = Photo::create(['file'=>$name]);


            $input['logo'] = $name;


        }

       //  $user->posts()->create($input); //Company

        Company::create($input);
        return redirect('/admin/companies');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

     $company = Company::findOrFail($id);

  //  $categories = Employee::pluck('name','id')->all();

        return view('admin.companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $input = $request->all();



        if($file = $request->file('logo')){


            $name = time() . $file->getClientOriginalName();


            $file->move('images', $name);

          
            $input['logo'] = $name;


        }

            Company::whereId($id)->first()->update($input);

     // Auth::user()->posts()->whereId($id)->first()->update($input);


        return redirect('/admin/companies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

         $company = Company::findOrFail($id);

        //unlink(public_path() . $post->photo->file);

        $company->delete();

        return redirect('/admin/companies');
    }

     

      


}
