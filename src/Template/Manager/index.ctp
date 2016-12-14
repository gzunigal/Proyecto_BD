<?php $this->layout = 'login'; ?>

<body class="design" style="padding-top: 80px">

<div class="btn-group"></div>

<div class="container">
	<select class="form-control" name="Misiones" required>
	<?php
		foreach($missions as $mision)
		{
			echo '<option value='.$mision->id.'>'.$mision->nombre_mision.'</option>';
		}
	?>
	</select>

</div>

</body>
