<?php


namespace Home\Controller;

class FlowFieldController extends UdfFieldController {
	protected $config = array('app_type' => 'pubic');
	//过滤查询字段
	function _search_filter(&$map) {
		$map['name'] = array('like', "%" . $_POST['name'] . "%");
		$map['is_del'] = array('eq', '0');
	}

	function index() {
		$this -> assign("folder_name", "文档库管理");
		$this -> _index();
	}
}
