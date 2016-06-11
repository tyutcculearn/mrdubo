<?php

namespace Home\Controller;
session_start();
if($_SESSION['id']!=999) {
    echo "<script>alert('请通过正确的途径登录本系统！');location.href='login.php';</script>";//替换成要跳转的网址；
    exit;//终止程序继续执行
}
use Think\Controller;

class IndexController extends Controller
{
    public function login()
    {
        $this->display("Index/login");
    }
    public function index()
    {
        $this->display();
    }

    //用户管理
    public function userInfo()
    {
        $user = D('user')->select();
        $this->assign('user', $user);
        $this->display("Index/user");
    }

    public function userAdd()
    {
        $user = D('user');
        if (!empty($_POST)) {
            $user->create();
            $add = $user->add();
            if ($add) {
                $map['id'] = $_POST['id'];
                $res = $user->where($map)->select();
                $this->success('添加成功');
            } else {
                $this->error('添加失败');
            }
        } else {
            $this->display();
        }
    }

    public function showUserUpd()
    {
        $user = D('user')->select();
        $this->assign('user', $user);
        $this->display("Index/userUpd");
    }

    public function userUpd()
    {
        if (!empty($_POST)) {
            $id = $_POST['id'];
            $data['name'] = $_POST['name'];
            $data['password'] = $_POST['password'];
            $data['email'] = $_POST['email'];
            $data['vip'] = $_POST['vip'];
            $res = D('user')->where("id=" . $id)->save($data);
            if ($res != false) {
                $this->success("修改成功");
            } else {
                $this->error("修改失败");
            }
        }
    }

    public function showUserDel()
    {
        $user = D('user')->select();
        $this->assign('user', $user);
        $this->display("Index/userDel");
    }

    public function userDel()
    {
        if (!empty($_POST)) {
            $id = $_POST['id'];
            $data['name'] = $_POST['name'];
            $data['password'] = $_POST['password'];
            $data['email'] = $_POST['email'];
            $data['vip'] = $_POST['vip'];
            $res = D('user')->where("id=" . $id)->delete($data);
            if ($res != false) {
                $this->success("删除成功");
            } else {
                $this->error("删除失败");
            }
        }
    }


//课程管理
    public function courseInfo()
    {
        $course = D('course')->select();
        $this->assign('course', $course);
        $this->display("course");
    }

    public function courseAdd()
    {
        $course = D('course');
        if (!empty($_POST)) {
            $course->create();
            $add = $course->add();
            if ($add) {
                $map['id'] = $_POST['id'];
                $res = $course->where($map)->select();
                $this->success('添加成功');
            } else {
                $this->error('添加失败');
            }
        } else {
            $this->display();
        }
    }

    public function showCourseUpd()
    {
        $course = D('course')->select();
        $this->assign('course', $course);
        $this->display("Index/courseUpd");
    }

    public function courseUpd()
    {
        if (!empty($_POST)) {
            $id = $_POST['id'];
            $data['name'] = $_POST['name'];
            $data['time'] = $_POST['time'];
            $data['img'] = $_POST['img'];
            $data['title'] = $_POST['title'];
            $data['message'] = $_POST['message'];
            $res = D('course')->where("id=" . $id)->save($data);
            if ($res != false) {
                $this->success("修改成功");
            } else {
                $this->error("修改失败");
            }
        }
    }

    public function showCourseDel()
    {
        $course = D('course')->select();
        $this->assign('course', $course);
        $this->display("Index/courseDel");
    }

    public function courseDel()
    {
        if (!empty($_POST)) {
            $id = $_POST['id'];
            $data['name'] = $_POST['name'];
            $data['time'] = $_POST['time'];
            $data['img'] = $_POST['img'];
            $data['title'] = $_POST['title'];
            $data['message'] = $_POST['message'];
            $res = D('course')->where("id=" . $id)->delete($data);
            if ($res != false) {
                $this->success("删除成功");
            } else {
                $this->error("删除失败");
            }
        }
    }

//文章管理
    public function articleInfo()
    {
        $article = D('article')->select();
        $this->assign('article', $article);
        $this->display("Index/article");
    }

    public function articleAdd()
    {
        $article = D('article');
        if (!empty($_POST)) {
            $article->create();
            $add = $article->add();
            if ($add) {
                $map['id'] = $_POST['id'];
                $res = $article->where($map)->select();
                $this->success('添加成功');
            } else {
                $this->error('添加失败');
            }
        } else {
            $this->display();
        }
    }

    public function showArticleUpd()
    {
        $article = D('article')->select();
        $this->assign('article', $article);
        $this->display("Index/articleUpd");
    }

    public function articleUpd()
    {
        if (!empty($_POST)) {
            $id = $_POST['id'];
            $data['user_id'] = $_POST['user_id'];
            $data['course_id'] = $_POST['course_id'];
            $data['title'] = $_POST['title'];
            $data['content'] = $_POST['content'];
            $data['vip'] = $_POST['vip'];
            $res = D('article')->where("id=" . $id)->save($data);
            if ($res != false) {
                $this->success("修改成功");
            } else {
                $this->error("修改失败");
            }
        }
    }

    public function showArticleDel()
    {
        $article = D('article')->select();
        $this->assign('article', $article);
        $this->display("Index/articleDel");
    }

    public function articleDel()
    {
        if (!empty($_POST)) {
            $id = $_POST['id'];
            $data['user_id'] = $_POST['user_id'];
            $data['course_id'] = $_POST['course_id'];
            $data['title'] = $_POST['title'];
            $data['content'] = $_POST['content'];
            $data['vip'] = $_POST['vip'];
            $res = D('article')->where("id=" . $id)->delete($data);
            if ($res != false) {
                $this->success("删除成功");
            } else {
                $this->error("删除失败");
            }
        }
    }

//回复管理
    public function responseInfo()
    {
        $response = D('response')->select();
        $this->assign('response', $response);
        $this->display("Index/response");
    }

    public function responseAdd()
    {
        $response = D('response');
        if (!empty($_POST)) {
            $response->create();
            $add = $response->add();
            if ($add) {
                $map['id'] = $_POST['id'];
                $res = $response->where($map)->select();
                $this->success('添加成功');
            } else {
                $this->error('添加失败');
            }
        } else {
            $this->display();
        }
    }

    public function showResponseUpd()
    {
        $response = D('response')->select();
        $this->assign('response', $response);
        $this->display("Index/responseUpd");
    }

    public function responseUpd()
    {
        if (!empty($_POST)) {
            $id = $_POST['id'];
            $data['article_id'] = $_POST['article_id'];
            $data['user_id'] = $_POST['user_id'];
            $data['message'] = $_POST['message'];
            $data['timestamp'] = $_POST['timestamp'];
            $res = D('response')->where("id=".$id)->save($data);
            if ($res != false) {
                $this->success("修改成功");
            } else {
                $this->error("修改失败");
            }
        }
    }

    public function showResponseDel()
    {
        $response = D('response')->select();
        $this->assign('response', $response);
        $this->display("Index/responseDel");
    }

    public function responseDel()
    {
        if (!empty($_POST)) {
            $id = $_POST['responseid'];
            $data['article_id'] = $_POST['article_id'];
            $data['user_id'] = $_POST['user_id'];
            $data['message'] = $_POST['message'];
            $data['timestamp'] = $_POST['timestamp'];
            $res = D('response')->where("id=".$id)->delete($data);
            if ($res != false) {
                $this->success("删除成功");
            } else {
                $this->error("删除失败");
            }
        }
    }
}
