<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;// đối tượng đại diện cho HTTP response chuyển hướng (redirect) từ ứng dụng Laravel đến một trang web khác
use Illuminate\Http\Response;// đối tượng đại diện cho HTTP response được gửi từ ứng dụng Laravel đến client.
use Illuminate\Http\Request;//đại diện cho HTTP request được gửi đến ứng dụng Laravel.vd:gửi từ form đến laravel
use App\Models\User;
use Illuminate\View\View;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $Users = user::all();
        return view('users.index')->with('users',$Users);//with('key','value')
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse //
    {//Request $request là một tham số đầu vào của phương thức store, biểu thị yêu cầu được gửi từ form.
        $input = $request->all();// là một câu lệnh gán giá trị cho biến $input, lấy tất cả các tham số 
        //được gửi từ form bằng cách sử dụng phương thức all() của đối tượng Request.
        user::create($input);//rồi gán vào hàm create để tạo một bản mới trong db
        return redirect('user')->with('flash_message', 'user Addedd!');//dòng with ko cần vẫn chạy đc
        //là câu lệnh để chuyển hướng người dùng đến trang "user" sau khi hoàn thành xử lý dữ liệu từ form. 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):View
    {
        $User = user::find($id);//Đây là câu truy vấn cơ sở dữ liệu để tìm kiếm sinh viên với ID được truyền vào
        //. Hàm find() sẽ trả về một đối tượng sinh viên nếu tìm thấy hoặc null nếu không tìm thấy.
        return view('users.show') -> with('users',$User);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):View
    {
        $User = user::find($id);
        return view('users.edit')->with('users',$User);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id):RedirectResponse
    {
        $User = user::find($id);
        $input = $request->all();
        $User->update($input);
        return redirect('user')->with('','');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):RedirectResponse
    {
        user::destroy($id);
        return redirect('user')->with('','');

    }
}
