<?php
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\Controller;

class PointComponent extends Component {


//cắt chuỗi: từ kí chuỗi $from đến chuỗi $to trong 1 chuỗi cho trước, kết quả: xóa cả chuỗi $to.
     public function takeString($from, $to, $string){

        $get_right_content = strstr($string, $from); //Get $from content too.
        $need_del_right_content = strstr($get_right_content, $to); //Delete $to too.
        $result = str_replace($need_del_right_content, "", $get_right_content);
        return $result;
    }

//Lấy tên học kì hiện tại
     public function getTerm(){

                $term ='';
                $month = date('m');

                  if($month > 10)
                  {
                     $term = "Học kỳ 1 - Năm học 20".date('y')."-20".date('y', strtotime('+1 year'));

                  }
                  elseif ($month <=2) { //$month <=2
                     $term = "Học kỳ 1 - Năm học 20".date('y', strtotime('-1 year'))."-20".date('y');
                  }

                  elseif ($month > 2 && $month <= 7) {
                     $term = "Học kỳ 2 - Năm học 20".date('y', strtotime('-1 year'))."-20".date('y');
                    
                  }
                  else {

                    $term = "Học kỳ 3 - Năm học 20".date('y', strtotime('-1 year'))."-20".date('y');
                  }

                $term = "Học kỳ 2 - Năm học 2016-2017";

                  return $term;
                     

        }
//Lấy thông tin điểm số học kì hiện tại
      public function getTermInfo($respone){


         // $string_to_start = '<tr><td colspan="10"><strong>&nbsp;&nbsp;&nbsp;'.$this->getTerm();
         $string_to_start = $this->getTerm(); //Thay bằng 

         $string_end = "<tr><td align='center'>&nbsp;</td><td align='center'>&nbsp;</td><td>&nbsp;<strong>Trung bình học kỳ";
         $res = $this->takeString($string_to_start,$string_end,$respone); //trích xuất chuỗi cần Lấy

         if($res == null){

			return "Hiện tại chưa có dữ liệu";

         }
        
         $string_to_start .= " </strong></td></tr><tr>";
         $res = str_replace($string_to_start, "", $res);

         $arr = explode('</tr><tr>', $res); //Chuyển về mảng để xử lý
	

         $count = count($arr);

         for($i = 0 ; $i < $count; $i ++){

          $arr_one = $arr[$i];
          $arr_one_ok[$i] = explode("</td>", $arr_one);

         }



        //  //Nhận được mảng $arr_one_ok có giá trị:


        // // (int) 0 => [
        // //   (int) 0 => '<td align='center'>1',
        // //   (int) 1 => '<td align='center' title='IE204.H21'>IE204',
        // //   (int) 2 => '<td>&nbsp;Tối ưu hóa công cụ tìm kiếm',
        // //   (int) 3 => '<td align='center'>4',
        // //   (int) 4 => '
        // //                       <td align='center' title=''>',
        // //   (int) 5 => '
        // //                       <td align='center' title='Trọng số: 20%'>7.5',
        // //   (int) 6 => '
        // //                       <td align='center' title='Trọng số: 30%'>7',
        // //   (int) 7 => '
        // //                       <td align='center' title='Trọng số: 50%'>6',
        // //   (int) 8 => '
        // //                       <td align='center'>6.6',
        // //   (int) 9 => '
        // //                       <td>&nbsp;',
        // //   (int) 10 => ''
        $count_arr_one_ok = count($arr_one_ok);
       
        for($i = 0; $i < $count_arr_one_ok; $i++)
              {

                  for($j=0; $j < 10; $j++)
                  {

                  $arr_one_ok[$i][$j] = strstr((string)$arr_one_ok[$i][$j], ">");
                  $arr_one_ok[$i][$j]  = str_replace(">", "", (string)$arr_one_ok[$i][$j] );
                  $arr_one_ok[$i][$j]  = str_replace("&nbsp;", "", (string)$arr_one_ok[$i][$j] );

                  }

                  $del_tail_arr = array_pop($arr_one_ok[$i]);
                  $del_head_arr = array_shift($arr_one_ok[$i]);

              }

        //   //Kết quả vừa xử lý được:

        //   // (int) 0 => [
        //   //   (int) 0 => 'IE204',
        //   //   (int) 1 => 'Tối ưu hóa công cụ tìm kiếm',
        //   //   (int) 2 => '4',
        //   //   (int) 3 => '',
        //   //   (int) 4 => '7.5',
        //   //   (int) 5 => '7',
        //   //   (int) 6 => '6',
        //   //   (int) 7 => '6.6',
        //   //   (int) 8 => ''
        //   // ],
        //   // (int) 1 => [
        //   //   (int) 0 => 'IS207',
        //   //   (int) 1 => 'Phát triển ứng dụng web',
        //   //   (int) 2 => '4',
        //   //   (int) 3 => '',
        //   //   (int) 4 => '7.5',
        //   //   (int) 5 => '7',
        //   //   (int) 6 => '8',
        //   //   (int) 7 => '7.6',
        //   //   (int) 8 => ''
        //   // ],
        //   // (int) 2 => [
        //   //   (int) 0 => 'IS334',
        //   //   (int) 1 => 'Thương mại điện tử',
        //   //   (int) 2 => '3',
        //   //   (int) 3 => '4',
        //   //   (int) 4 => '',
        //   //   (int) 5 => '',
        //   //   (int) 6 => '4',
        //   //   (int) 7 => '4',
        //   //   (int) 8 => ''
        //   // ],
        $final_count = count($arr_one_ok);
        for($i = 0; $i < $final_count; $i++){



          $arr_one_ok[$i]['MaHp'] = $arr_one_ok[$i][0];
          $arr_one_ok[$i]['TenHp'] = $arr_one_ok[$i][1];
          $arr_one_ok[$i]['TinChi'] = $arr_one_ok[$i][2];
          $arr_one_ok[$i]['QT'] = $arr_one_ok[$i][3];
          $arr_one_ok[$i]['GK'] = $arr_one_ok[$i][4];
          $arr_one_ok[$i]['TH'] = $arr_one_ok[$i][5];
          $arr_one_ok[$i]['CK'] = $arr_one_ok[$i][6];
          $arr_one_ok[$i]['DiemHP'] = $arr_one_ok[$i][7];
          $arr_one_ok[$i]['GhiChu'] = $arr_one_ok[$i][8];

          for($j =0 ; $j<9; $j++)
          {
              unset($arr_one_ok[$i][$j]);

          }
         
        }

         return $arr_one_ok;
        
      }

      
}