<?php 

class Controller_posts extends Controller_Template
{
	public function action_index() {
		$posts  = Model_Post::find('all');
		$data = array('posts' => $posts);
        $this->template->title = 'Dev.io - Blog';
        $this->template->content = View::forge('pages/index', $data, false);
	}
	public function action_add(){
		if (Input::post('save')) {
			$post = new Model_Post();
			$post->author = Input::post('author');
			$post->username = Input::post('username');
			$post->title = Input::post('title');
			$post->body = Input::post('body');
			$post->tags = Input::post('tags');
			$post->created_at = date('h.i a , d M,y');
			$post->save();
			Session::set_flash('success', 'Blog published');
			Response::redirect('/');
		}
		$data = array();
        $this->template->title = 'Dev.io - Add Blog';
        $this->template->content = View::forge('pages/add', $data, false);	
	}

	public function action_view($id){
		$post  = Model_Post::find('first', array('where' => array( 'id' => $id)));
		$data = array('post' => $post);
        $this->template->title = "DEV - BLOG by ".$post->author;
        $this->template->content = View::forge('pages/view', $data, false);
	}

	public function action_edit($id){
		if (Input::post('save')) {
			$post = Model_Post::find(Input::post('post_id'));
			$post->author = Input::post('author');
			$post->username = Input::post('username');
			$post->title = Input::post('title');
			$post->body = Input::post('body');
			$post->tags = Input::post('tags');
			$post->created_at = date('h.i a , d M,y');
			$post->save();
			Session::set_flash('success', 'Blog Save!');
			Response::redirect('/');
		}
		$post  = Model_Post::find('first', array('where' => array('id' => $id)));
		$data = array('post' => $post);
        $this->template->title ="DEV - BLOG | Edit | ".$post->author;
        $this->template->content = View::forge('pages/edit', $data, false);
	}

	public function action_delete($id){
		$post  = Model_Post::find($id);
		$post->delete();
		Session::set_flash('success', 'Blog deleted!');
		Response::redirect('/');
	}


}

