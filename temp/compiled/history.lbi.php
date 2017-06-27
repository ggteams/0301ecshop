   <div class="snpr" id="history_list">
		<div id='history_div'>
  		<h1><?php echo $this->_var['lang']['view_history']; ?></h1>
		<?php 
$k = array (
  'name' => 'gg_history',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>    
   		</div>
   </div>


<script type="text/javascript">
if (document.getElementById('history_list').innerHTML.replace(/\s/g,'').length<1)
{
    document.getElementById('history_div').style.display='none';
}
else
{
    document.getElementById('history_div').style.display='block';
}
function clear_history()
{
Ajax.call('user.php', 'act=clear_history',clear_history_Response, 'GET', 'TEXT',1,1);
}
function clear_history_Response(res)
{
document.getElementById('history_list').innerHTML = '<?php echo $this->_var['lang']['no_history']; ?>';
}
</script>