<?php
namespace app\admin\controller;
use think\Controller;
use think\Loader;

class Exceluser extends Controller
{
    public function index()
    {
        return view();

    }

    public function inserExcel()
    {   //导出
        if(request() -> isPost())
        {

            Loader::import('PHPExcel.Classes.PHPExcel');
            Loader::import('PHPExcel.Classes.PHPExcel.IOFactory.PHPExcel_IOFactory');
            Loader::import('PHPExcel.Classes.PHPExcel.Reader.Excel5');
            //获取表单上传文件
            $file = request()->file('excel');
            $info = $file->validate(['ext' => 'xlsx'])->move(ROOT_PATH . 'public');  //上传验证后缀名,以及上传之后移动的地址  E:\wamp\www\bick\public
            if($info)
            {
//              echo $info->getFilename();
                $exclePath = $info->getSaveName();  //获取文件名
                $file_name = ROOT_PATH . 'public' . DS . $exclePath;//上传文件的地址
                $objReader =\PHPExcel_IOFactory::createReader('Excel2007');
                $obj_PHPExcel =$objReader->load($file_name, $encode = 'utf-8');  //加载文件内容,编码utf-8
                echo "<pre>";
                $excel_array=$obj_PHPExcel->getsheet(0)->toArray();   //转换为数组格式
                array_shift($excel_array);  //删除第一个数组(标题);
                $city = [];
                foreach($excel_array as $k=>$v) {

                    $city[$k]['username'] = $v[0];
                    $city[$k]['password'] = md5($v[1]);
                    $city[$k]['class'] = $v[2];
                    $city[$k]['sex'] = $v[3];
                    $city[$k]['score'] = $v[4];
                    $city[$k]['url'] = $v[5];

                }

                $result=db("user")->insertAll($city);
                if ($result) {
                    # code...
                    $this->success("成功添加.$result.条数据","test/index");
                }
                else
                {
                    $this->error("添加失败","test/index");

                }

            }else
            {
                echo $file->getError();
            }
        }else
        {
            return $this -> fetch();
        }

    }


    public function exportExcel()
    {
        //导出

        $path = dirname(__FILE__);//找到当前脚本所在路径
        Loader::import('PHPExcel.Classes.PHPExcel');//手动引入PHPExcel.php
        Loader::import('PHPExcel.Classes.PHPExcel.IOFactory.PHPExcel_IOFactory');//引入IOFactory.php 文件里面的PHPExcel_IOFactory这个类
        $PHPExcel = new \PHPExcel();//实例化

        $PHPSheet = $PHPExcel->getActiveSheet();//创建工作表
        $PHPSheet->setTitle("demo");//给当前活动sheet设置名称
        $userData=db("user")->select();
        $PHPSheet->setCellValue("A1","姓名")->setCellValue("B1","密码")->setCellValue("C1","班级")		//定义表头标签名称
        ->setCellValue("D1","性别")->setCellValue("E1","分数")->setCellValue("F1","头像URL");
        foreach ($userData as $k => $v) {
            $Row = $k+2;//定义数据从第2行开始填入
            //读取$userData数据并写入表格数据
            $PHPSheet->setCellValue("A$Row","$v[username]")->setCellValue("B$Row","$v[password]")->setCellValue("C$Row","$v[class]")->setCellValue("D$Row","$v[sex]")->setCellValue("E$Row","$v[score]")->setCellValue("F$Row","$v[url]");

        }

        $PHPWriter = \PHPExcel_IOFactory::createWriter($PHPExcel,"Excel2007");//创建生成的格式
        header('Content-Disposition: attachment;filename="用户列表.xlsx"');//下载下来的表格名
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        $PHPWriter->save("php://output");//表示在$path路径下面生成demo.xlsx文件


    }
}