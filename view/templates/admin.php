<?php ob_start() ?>

<h2>Администрирование странички</h2>
<form actuib="index.php/add" method="POST" name="form1">
<table>
	<tr>
		<td>Автор:</td>
		<td><input type="text" name="add_author"></td>
	</tr>
	<tr>
		<td>Дата:</td>
		<td><input type="text" name="add_date"></td>
	</tr>
	<tr>
		<td>Заголовок:</td>
		<td><input type="text" name="add_title"></td>
	</tr>
	<tr>
		<td>Текст:</td>
		<td><input type="textarea" name="add_content"></td>
	</tr>
	<tr>
		<td><input type="reset" name=""  reset="" value="Очистить"></td>
		<td><input type="submit" name="submit" value="Добавить"></td>
	</tr>
</table>
</form>

<?php $content = ob_get_clean(); ?>

<?php include "view/templates/layout.php";