<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tutor;
class FindATutor extends Controller
{
    function index()
    {
        return view ('FindATutor');
    }
    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = tutor::all()
         ->where('tutorusername', 'like', '%'.$query.'%')
         ->get();
         
      }
      else
      {
       $data = tutor::all()
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row->tutorusername'</td>
         <td>'.$row->institute'</td>
        
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
      );

      echo json_encode($data);
     }
    }
}


