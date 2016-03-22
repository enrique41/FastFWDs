<?php

class PermissionsController extends AppController
{
    var $name = 'Permissions';
	var $uses = array('ArosAcos', 'Aro', 'Aco');

    function index()
    {
		if (!empty($this->data['Arosacos']['aro_id']) && !empty($this->data['Arosacos']['aco_id']))
        {
			if ($this->ArosAcos->save($this->data['Arosacos']))
			{
				$this->redirect('/permissions/index');
			}
		}
		
		//if no group selected select default(all users)
		if(empty($this->data['Permissions']['group']))
		{
			$group = "ORDER BY 'aro_id' ASC";
		}
		else $group = "aro_id = " . $this->data['Permissions']['group'] . " ORDER BY 'aro_id' ASC";
		
		
        $this->set('aco', $this->Aco->find("id = 0 ORDER BY 'id' ASC"));
		 
		$this->set('permissions', $this->ArosAcos->find($group));
		
		$this->set('aro', $this->Aro->find("foreign_key = 0 ORDER BY 'id' ASC"));
		
		//$this->set('group_list', $this->Aro->generateList( 
               // "foreign_key = 0", "lft ASC", null, "{n}.Aro.id", "{n}.Aro.alias"));

		//$this->set('object_list', $this->Aco->generateList( 
                //"object_id = 0", "lft ASC", null, "{n}.Aco.id", "{n}.Aco.alias")); 
	}

    function view($id)
    {
        $this->Permissions->id = $id;
        $this->set('Permissions', $this->Permissions->read());

    }

    function add()
    {
        if (!empty($this->data))
        {
			if ($this->ArosAcos->save($this->data['Arosacos']))
			{
				$this->redirect('/admin/permissions');
			}
			else $this->redirect('/admin/permissions/add');
        }
		 
		$this->set('group_list', $this->Aro->generateList( 
                "foreign_key = 0", "lft ASC", null, "{n}.Aro.id", "{n}.Aro.alias")); 
	
		$this->set('object_list', $this->Aco->generateList( 
                "object_id = 0", "lft ASC", null, "{n}.Aco.id", "{n}.Aco.alias")); 
    }
	
	function edit($id = null)
	{
		if (empty($this->data))
		{
			$this->ArosAcos->id = $id;
			$this->data = $this->Arosacos->read();
		}
		else
		{
			if ($this->ArosAcos->save($this->data))
			{
				$this->redirect('permissions/index');
			}
		}
		
		$this->set('group_list', $this->Aro->generateList( 
                "foreign_key = 0", "lft ASC", null, "{n}.Aro.id", "{n}.Aro.alias")); 
	
		$this->set('object_list', $this->Aco->generateList( 
                "object_id = 0", "lft ASC", null, "{n}.Aco.id", "{n}.Aco.alias")); 
	}
	
	function delete($id)
	{
		$this->Permissions->del($id);
		$this->flash('The Permissions with id: '.$id.' has been deleted.', '/Permissionss');
	}
}

?>