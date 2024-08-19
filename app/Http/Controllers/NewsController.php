<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\News;
 
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return view ('admin.news.index')->with('news', $news);
    }


    public function addNews(Request $request){
         $requestData = $request->only('title','content','photo');
        $fileName = time().$request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images', $fileName, 'public');
        $requestData["photo"] = '/storage/'.$path;
        News::create($requestData);
        return redirect(route('admin.news.index'))->with('flash_message', 'news Addedd!');
        
        // $data = $request->only('title','content','photo');
        // dd($data);

      




        // News::create([
        //     'title' => $data['title'],
        //     'content' => $data['content'],
        //     'photo' => $data['photo'],
            
        // ]);
        //   $message = ['type'=>'success','description'=>'You are successfully registered!'];
        //  return redirect(route('admin.login'))->with(['message'=>$message]);
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $requestData = $request->all();
        $requestData = $request->only('title','content','photo');
        $fileName = time().$request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images', $fileName, 'public');
        $requestData["photo"] = '/storage/'.$path;
        News::create($requestData);
        return redirect('admin.news')->with('flash_message', 'news Addedd!');
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
    }
}