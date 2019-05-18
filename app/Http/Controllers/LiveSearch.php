<?php

namespace Curso\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Curso\User;

class LiveSearch extends Controller
{
    function index(){
        return view('users.findUsers');
    }

    function action(Request $request){
        
        if($request->ajax()){
            $query = $request->get('query');
            $output = '';
            if($query != ''){
                $data = DB::table('users')
                            ->where('name','like','%'.$query.'%')
                            ->orWhere('email','like','%'.$query.'%')
                            ->orWhere('documento','like','%'.$query.'%')
                            ->orderBy('id','DESC')
                            ->get();
            } else {
                $data = User::orderBy('id', 'DESC')
                    // ->name($name)
                    // ->email($email)
                    // ->paginate(6);
                    ->get();
            }
            $total_row = $data->count();
            if($total_row > 0){
                // dd($data);
                foreach ($data as $row) {
                    $output .= '
                        <tr>
                            <td>'.$row->id.'</td>
                            <td>'.$row->name.'</td>
                            <td>'.$row->email.'</td>
                            <td>'.$row->documento.'</td>
                        </tr>
                    ';
                }
            }else{
                $output = '
                    <tr>
                        <td align="center" colspan="5">No Data Found</td>
                    </tr>
                ';
            }
            // dd($data);
            $data = array(
                'table_data'  => $output,
                'total_data'  => $total_row
            );
            echo json_encode($data);

        }
    }
}
