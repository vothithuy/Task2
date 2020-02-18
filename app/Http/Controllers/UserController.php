<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function index()
    {
                //Lấy danh sách user từ database
            $getData = DB::table('tbl_user')->select('id','first_name','last_name','email','phone','password','avatar')->get();
            
            //Gọi đến file list.blade.php trong thư mục "resources/views/user" với giá trị gửi đi tên listuser = $getData
            return view('user.list')->with('listuser',$getData);
    }

    
    public function create()
    {
        return view('user.create');
    }

  
    public function store(Request $request)
        {
        
            //Lấy giá trị đã nhập
            $allRequest  = $request->all();
            $first_name  = $allRequest['first_name'];
            $last_name = $allRequest['last_name'];
            $email  = $allRequest['email'];
            $phone = $allRequest['phone'];
            $password  = $allRequest['password'];
            $avatar = $allRequest['avatar'];
        
        //Gán giá trị vào array
        $dataInsertToDatabase = array(
            'first_name'  => $first_name,
            'last_name' => $last_name,
            'email'  => $email,
            'phone' => $phone,
            'password' => $password,
            'avatar' => $avatar,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        );
        
        //Insert vào bảng tbl_user
        $insertData = DB::table('tbl_user')->insert($dataInsertToDatabase);
        
        //Kiểm tra Insert để trả về một thông báo
        if ($insertData) {
            Session::flash('success', 'You created a new user successfully!');
        }else {                        
            Session::flash('error', 'Fail!');
        }
        
        //Thực hiện chuyển trang
        return redirect('user/create');
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        
            //Lấy dữ liệu từ Database với các trường được lấy và với điều kiện id = $id
            $getData = DB::table('tbl_user')->select('id','first_name','last_name','email','phone','password','avatar')->where('id',$id)->get();
            
            //Gọi đến file edit.blade.php trong thư mục "resources/views/user" với giá trị gửi đi tên getUserhById = $getData
            return view('user.edit')->with('getUserById',$getData);
    }

  
    public function update(Request $request, $id)
    {
            //Cap nhat sua hoc sinh
               
            //Thực hiện câu lệnh update với các giá trị $request trả về
            $updateData = DB::table('tbl_user')->where('id', $request->id)->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => $request->password,
                'avatar' => $request->avatar,
                'updated_at' => date('Y-m-d H:i:s')
            ]);
            
            //Kiểm tra lệnh update để trả về một thông báo
            if ($updateData) {
                Session::flash('success', 'Update Success!');
            }else {                        
                Session::flash('error', 'Fail!');
            }
            
            //Thực hiện chuyển trang
            return redirect('user');
    }

  
    public function destroy($id)
    {
        //Thực hiện câu lệnh xóa với giá trị id = $id trả về
        $deleteData = DB::table('tbl_user')->where('id', '=', $id)->delete();
        
        //Kiểm tra lệnh delete để trả về một thông báo
        if ($deleteData) {
            Session::flash('success', 'Delete User Success!');
        }else {                        
            Session::flash('error', 'Delete Fail!');
        }
        
        //Thực hiện chuyển trang
        return redirect('user');

    }
}
