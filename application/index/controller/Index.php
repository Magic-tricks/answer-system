<?php
namespace app\index\controller;
use think\Controller;
class Index extends  Common
{
    public function index()
    {
        $userinfo = db('user')->find(session('userId'));
        $this->assign('userinfo',$userinfo);
        $cateData = db('category')->select();
        $subjectData = db('subject')->select();
        $comment=db("user")->alias("a")->join("comment b","a.id=b.uid")->field("a.*,b.*")->order("b.id desc")->paginate(6);

        $solve=db("solve")->where("uid",session("userId"))->find();
        if($solve)
        {
            $aid=explode(',',$solve["aid"]);
            $aid=array_unique($aid);
            $this->assign("aid",$aid);
        }

        $this->assign(['cateData'=>$cateData,'subjectData'=>$subjectData,"comment"=>$comment]);


        return view("indexs");
    }
    public  function  subject()
    {

        $userinfo = db('user')->find(session('userId'));
        $this->assign('userinfo',$userinfo);
        header("Content-Type: text/plain;charset=utf-8");
        if(session("user") == null)
        {
            $this->error("您还没有登录，请登录后重试...",'User/index');
        }
        //a传入 subjectID
        $suID=input('suID');
        $res=db("subject")->find($suID);

        $userRes=db("user")->find(session("userId"));
        db('subject')->where('id','=',$suID)->setInc('click','4');//setInc自增1
        db('category')->where('id','=',$res["cid"])->setInc('click','4');
        $comment=db("user")->alias("a")->join("comment b","a.id=b.uid")->field("a.*,b.*")->order("b.id desc")->paginate(4);

        $this->assign(["res"=>$res,"userRes"=>$userRes,"comment"=>$comment]);
        return $this->fetch('subject');

    }

    public function ajax()
    {

        if(request()->isAjax())
        {
            header("Content-Type: text/plain;charset=utf-8");
            $answer=input("post.");
            $res=db("subject")->where("id",$answer['id'])->find();
            if($res['flag'] == $answer['answer'])
            {
                $score = db("user")->where("id", $answer["userId"])->find();
                $userScore = $score["score"] + $res["score"];

                db("user")->where("id", $answer["userId"])->update(["score" => $userScore]);

                $solve = db("solve")->where("uid", $answer["userId"])->find();
                if ($solve)
                {
                    $aid=$solve["aid"].','.$answer['id'];
                    db("solve")->where("uid",$answer['userId'])->update(["aid"=>$aid]);
                }
                else
                {
                    $data['aid']=$answer['id'];
                    $data['uid']=$answer['userId'];
                    db("solve")->insert($data);
                }


                echo '{"success":true,"msg":"1"}';
            }
            else
            {
                echo '{"success":false,"msg":"0"}';
            }
        }
    }

    public function logout()
    {
        session(null);
        $this->success("退出登录成功...","User/index");
    }

    public function comment()
    {
        if(request()->isAjax())
        {
            header("Content-Type: text/json;charset=utf-8");
            $data=input("post.");
            if($data['uid'] !='' && $data['comment'] !='')
            {
                $data["time"]=time();
                $res=db("comment")->insert($data);
                if($res)
                {
                    return "{success:true,'msg':'1'}";
                }
            }
            else
            {
                    return "{success:true,'msg':'0'}";
            }
        }
    }
}
