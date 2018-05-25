<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

// 
class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    //  Taskからtasksテーブルのデータを全件取得
    // $tasksのデータとindex.blade.phpへviewを返す
    public function index()
    {
        $tasks = Task::all();
        
        return view('tasks.index',[
            'tasks' => $tasks,
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    // index.blade.phpから実行される
    //  Taskクラスをインスタンス化する
    // create.blade.phpにviewを返す。
    public function create()
    {
        $task = new Task;
        
        return view('tasks.create', [
            'task' => $task,
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     
    //  create.blade.phpから実行される
    // 引数にはIlluminateのRequest.phpから$requestを指定する
    // 受け取った$requestからcontentをtasksテーブルにinsertする
    // index.blade.phpにリダイレクトする
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'content' => 'required|max:191',
            ]);
            
        $tasks = Task::insert(['content' => $request->content, 'status' => $request->status]);
        
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //  index.blade.phpから実行される
    // idを引数に受け取り、Tasksテーブルで受け取ったidを検索する
    // 受け取った結果をshow.blade.phpに渡す
    public function show($id)
    {
        $task = Task::find($id);
        
        return view('tasks.show', [
            'task' => $task,
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // show.blade.phpから実行される 
    // idを引数に受け取り、Tasksテーブルで受け取ったidを検索する
    // 受け取った結果をedit.blade.phpに渡す
    public function edit($id)
    {
        $task = Task::find($id);
        
        return view('tasks.edit', [
            'task' => $task,
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //  edit.blade.phpから実行される
    // 引数にはIlluminateのRequest.phpから$requestと$idを指定する
    // 引数から受け取ったidを検索して、結果を$taskに入れる
    // taskインスタントのcontentプロパティに、requestインスタンスのcontentプロパティを代入する
    // taskインスタンスを保存する
    // index.blade.phpにGETでリダイレクトする
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'content' => 'required|max:191',
            'status' => 'required|max:10,
            ']);
        
        $task = Task::find($id);
        $task->content = $request->content;
        $task->status = $request->status;
        $task->save();
        
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //  show.blade.phpから実行される
    // 引数にはidを受け取る
    // 受け取ったidをtasksテーブルから検索してレコードを取得する
    // delete実行
    // index.blade.phpにリダイレクト
    
    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();
        
        return redirect('/');
    }
}
