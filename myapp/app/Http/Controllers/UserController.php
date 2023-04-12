<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register()
    {
        $data['title'] = 'Register';//đây là biến dùng để chứa dữ liệu truyền vào view, trong trường hợp này là tiêu đề của trang "Register".
        return view('user/register',$data);
    }
    public function register_action(Request $request)
    {   //hàm này là để xét form khi ko điền thông tin vào form
        $request->validate([// là một phương thức của đối tượng $request trong Laravel, được sử dụng để xác thực các giá trị được gửi trong biểu mẫu HTML.
            'name' => 'required',//là một phương thức của đối tượng $request trong Laravel, được sử dụng để xác thực các giá trị được gửi trong biểu mẫu HTML.
            'username' => 'required|unique:tb_user',//required': là một quy tắc xác thực của Laravel, được sử dụng để đảm bảo rằng giá trị được nhập vào trường name phải tồn tại và khác rỗng.
            'password' => 'required',//required nếu giá trị của trường "name" trong yêu cầu là rỗng hoặc không tồn tại, thì quy tắc kiểm tra hợp lệ này sẽ trả về một thông báo lỗi và yêu cầu người dùng cung cấp giá trị cho trường "name" trước khi tiếp tục thực hiện hành động tiếp theo.
            'password_confirmation' => 'required|same:password',//đc sử dụng để xác định gt phải tồn tại và phải khớp với trường pasword
        ]);
        $user = new User([
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make( $request->username),
        ]);
        $user->save();
        return redirect()->route('login')->with('success','Registration Success.Please');
    }
    public function login()
    {   
        $data['title'] = 'Login';
        return view('user/login',$data);
    }
    // public function login_action(Request $request)
    // {
    //     $request->validate([
    //         'username' => 'required',
    //         'password' => 'required',
    //     ]);
        // if(Auth::attempt(['username' => $request->username, 'password' => $request->password])){
        //     // Đăng nhập thành công
        //     return redirect()->route('home');
        //   } else {
        //     // Đăng nhập thất bại
            // return back()->withErrors('password','Wrong username or password!');
        //   }
    // }
    public function login_action(Request $request)
    {   //hàm này là để xét form khi ko điền thông tin vào form
        $request->validate([// là một phương thức của đối tượng $request trong Laravel, được sử dụng để xác thực các giá trị được gửi trong biểu mẫu HTML.
            'username' => 'required',//required': là một quy tắc xác thực của Laravel, được sử dụng để đảm bảo rằng giá trị được nhập vào trường name phải tồn tại và khác rỗng.
            'password' => 'required'
        ]);
       if(Auth::attempt(['username' => $request->username,'password' => $request->password])){
        $request->session()->regenerate();
        return redirect()->intended('/');
       }
        return back()->withErrors('password','Wrong username or password!');
    }
}
